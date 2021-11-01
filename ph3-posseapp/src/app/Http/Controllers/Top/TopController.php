<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudyTime;
use \Carbon\Carbon;

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


        return $study_times;
    }
}
