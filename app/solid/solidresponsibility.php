<?php

 namespace App\Solid;

use Illuminate\Support\Facades\DB;

 class salesreports{
    public function between($startdate, $enddate){
        return DB::table('sales')
        ->whereBetween('created_at',[$startdate, $enddate])
        ->latest()
        ->get();
    }
    // for months data
    public function formonth($month){

    }
    // for years data
    public function foryears($year){

    }
    // no need for the export method called here cuz it already has a class
    // public function exports($startdate, $enddate){
    //     $sales = $this->between($startdate, $enddate);

    //     return 'file generate';
    // }
 }