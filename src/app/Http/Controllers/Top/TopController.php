<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventAttendance;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $status_id = $request->input('status_id');

        $today = new Carbon('today');

        $today = $today->format('Y-m-d');

        $events = new Event;
        if($status_id==null){
            // 通常時
            $events = $events->with('event_attendances.user')->where('end_at','>=',$today)->where('posse_branch',Auth::user()->posse_branch)->orderBy('events.start_at')->get();
        }elseif($status_id=='not_submitted'){
            // 未提出
            $events = $events->with('event_attendances.user')->where('end_at','>=',$today)->where('posse_branch',Auth::user()->posse_branch)->whereDoesntHave('event_attendances', function (Builder $query)use($user_id){$query->where('user_id',$user_id);})->orderBy('events.start_at')->get();
        }else{
            // 参加or不参加
            $events = $events->with('event_attendances.user')->whereHas('event_attendances', function($query)use($user_id,$status_id){$query->where('status_id',$status_id)->where('user_id',$user_id);})->where('end_at','>=',$today)->where('posse_branch',Auth::user()->posse_branch)->orderBy('events.start_at')->get();
        }

        return view('user.index', compact('events','status_id'));
    }

    public function sendData($eventId)
    {
        $user_id = Auth::id();
        $event = Event::select('events.*',DB::raw("count(event_attendances.status_id=1 OR NULL) as participants,sum(CASE WHEN event_attendances.user_id=$user_id THEN event_attendances.status_id ELSE 0 END) as status"))->leftJoin('event_attendances','event_attendances.event_id','=','events.id')->groupBy('events.id')->having('events.id','=',$eventId)->first();
        $event['current_time'] = date("Y-m-d H:i:s");
        $comment = EventAttendance::select('event_attendances.comment')->where('event_attendances.user_id' , $user_id)->where('event_attendances.event_id' , $eventId)->first();
        if (!empty($comment)) {
            $event['comment']= $comment->comment;
        }

        $event = json_encode($event);
        return $event;
    }


    public function create(Request $request)
    {
        $comment = $request->comment?? null;
        $param = [
            'user_id' => $request->user_id,
            'event_id' => $request->event_id,
            'status_id' => $request->status_id,
            'comment'=> $comment,
        ];
        $updated_date = DB::table('event_attendances') -> where('user_id',$request->user_id) -> where('event_id',$request->event_id) -> first('updated_at');
        DB::table('event_attendances') -> updateOrInsert(['user_id' => $request->user_id,'event_id' => $request->event_id] , $param);
        // 未回答のデータを送信したときは未回答の位置にリダイレクト。
        if ($updated_date == NULL){
            return redirect('/?status_id=not_submitted');
        }
        //それ以外の処理
        switch ($request->status_id){
            case null: return redirect('/');
            break;
            case 1: return redirect('/?status_id=1');
            break;
            case 2: return redirect('/?status_id=2');
            break;
            case "not_submitted": return redirect('/?status_id=not_submitted');
            break;
        }

    }
}
