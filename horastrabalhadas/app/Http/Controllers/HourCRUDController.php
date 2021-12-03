<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class HourCRUDController extends Controller
{
    public function index()
    {
        //new Periodo();

        // $start= '2021-02-02 23:00';
        // $end = '2021-02-03 04:00';
        // if ($this->newDate($end)->format('d') > $this->newDate($start)->format('d')) {

        //     if ($this->newDate($start)->format('H') < 22) {
        //         $end2 = newDate($end)->format('Y-m-d 22:00');

        //         $hours_day = $this->dateDiff($start, $end2);

        //         $day_min = $this->hoursToMinutes($hours_day);
        //     };

        //     if ($this->newDate($end)->format('H') >= 5) {
        //         $start2 = $this->newDate($end)->format('Y-m-d 05:00');

        //         $hours_day = $this->dateDiff($start2, $end);

        //         $day_min += $this->hoursToMinutes($hours_day);
        //     };

        //     if ($this->newDate($start)->format('H') >= 22 || $this->newDate($start)->format('H') <= 22) {

        //         $end2 = $end;
        //         $start2 = $start;
        //         if ($this->newDate($end)->format('H') >= 5) {
        //             $end2 = newDate($end)->format('Y-m-d 05:00');
        //         }


        //         if ($this->newDate($start)->format('H') < 22) {
        //             $start2 = $this->newDate($start)->format('Y-m-d 22:00');
        //         }


        //         $hours_day = $this->dateDiff($start2, $end2);

        //         $night_min += $this->hoursToMinutes($hours_day);
        //     }
        // }
        // //day == 
        // if ($this->newDate($end)->format('d') == $this->newDate($start)->format('d')) {



        //     if ($this->newDate($end)->format('H') > 4 && $this->newDate($end)->format('H') <= 23) {
        //         $end2 = $end;
        //         //$start2 = $start;
        //         if ($this->newDate($end)->format('H') >= 5) {
        //             $start2 = $this->newDate($end)->format('Y-m-d 05:00');
        //         }

        //         if ($this->newDate($end)->format('H') >= 22) {
        //             $end2 = $this->newDate($end)->format('Y-m-d 22:00');
        //         }

        //         $hours_day = $this->dateDiff($start, $end2);
        //         $day_min =$this-> hoursToMinutes($hours_day);
        //     }

        //     if ($this->newDate($end)->format('H') >= 22 && $this->newDate($end)->format('H') <= 23) {

        //         $start2 = $this->newDate($start)->format('Y-m-d 22:00');
        //         $end2 = $end;
        //         if ($this->newDate($start)->format('H') <= 4) {
        //             $start2 = $start;
        //         }

        //         $hours_day = $this->dateDiff($start2, $end2);

        //         $night_min += $this->hoursToMinutes($hours_day);
        //     }
        // }

        return view("spahoras");
    }
    //
    public function dateDiff($start, $end, $format = '%h:%I')
    {
        $dat1 = date_create($start);
        $dat2 = date_create($end);
        $interval = date_diff($dat1, $dat2);
        return $interval->format($format);
    }

    // public function newDate($date)
    // {
    //     return new DateTime($date);
    // }

    public function hoursToMinutes($hours)
    {
        list($hours, $minutes) = explode(':', $hours);
        return $hours * 60 + $minutes;
    }

    public function minutesToHours($minutes)
    {
        $hours = floor($minutes / 60);
        $result = $minutes % 60;
        return ($hours < 10 ? '0' . $hours : $hours) . ':' . ($result < 10 ? '0' . $result : $result);
    }
}
