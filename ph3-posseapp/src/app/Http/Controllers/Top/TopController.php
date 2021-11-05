<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudyTime;
use \Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    function index(){
        return view('top.index');
    }
    function get_data(){
        $dt = Carbon::today();
        $dt_from = new Carbon();
		$dt_from->startOfMonth();
		$dt_to = new Carbon();
		$dt_to->endOfMonth();

        $study_times = array();

        $today_time = StudyTime::whereDate('created_at', $dt)->sum('study_time');
        $study_times["today_time"]=$today_time;

        $month_time = StudyTime::whereBetween('created_at', [$dt_from, $dt_to])->sum('study_time');
        $study_times["month_time"]=$month_time;

        $all_time = StudyTime::sum('study_time');
        $study_times["all_time"]=$all_time;

        $contents_time = DB::table('study_times')->join('contents','study_times.content_id','contents.id')->selectRaw('contents.name ,contents.colour ,sum(study_time) as study_time')->where('contents.type',1)->groupBy('study_times.content_id')->get();
        $study_times["contents_time"]=$contents_time;

        $languages_time = DB::table('study_times')->join('contents','study_times.content_id','contents.id')->selectRaw('contents.name ,contents.colour ,sum(study_time) as study_time')->where('contents.type',2)->groupBy('study_times.content_id')->get();
        $study_times["languages_time"]=$languages_time;

        $bar_graph = StudyTime::whereBetween('created_at', [$dt_from, $dt_to])->selectRaw('DATE_FORMAT(created_at, "%Y-%m-%d") as `date` , sum(study_time) as study_time')->groupBy('date')->get();
        $study_times["bar_graph"]=$bar_graph;
        
        return $study_times;
    }
}
