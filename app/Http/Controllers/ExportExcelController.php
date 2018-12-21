<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use info;


class ExportExcelController extends Controller
{
    function index()
    {
      $from = date('2017-01-01');
      $to = date('2018-05-02');

    # $query->;

     $staff_data = DB::table('infos') -> whereBetween('Date', [$from, $to]) ->get();


     return view('export_excel')->with('staff_data', $staff_data);


    }

    function excel()
    {
  #   $staff_data = DB::table('infos')->get()->toArray();
     $staff_data = DB::table('infos')->where('Date', '2017-01-09')->get();
     $staff_array[] = array('Date', 'Employee ID', 'In time', 'Out time');
     foreach($staff_data as $staff)
     {
      $staff_array[] = array(
       'Date'  => $staff->Date,
       'Employee Id'   => $staff->e_id,
       'In Time'    => $staff->in_time,
       'Out Time'  => $staff->out_time,

      );
     }
     Excel::create('Staff Data', function($excel) use ($staff_array){
      $excel->setTitle('Staff Data');
      $excel->sheet('Staff Data', function($sheet) use ($staff_array){
       $sheet->fromArray($staff_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
}

?>
