<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use DB;
  use Excel;
  use info;
  session_start();
  class ExportExcelController extends Controller
  {
          function index()
          {



          # $query->;

           $staff_data = DB::table('infos')  ->get();


           return view('export_excel')->with('staff_data', $staff_data);


          }

        public function sort(Request $request){
           $_SESSION["from"] = $request -> input('fromdate');
           $_SESSION["to"] =$request -> input('todate');


             if (isset($_SESSION["from"])  &&  isset($_SESSION["to"]) ) {
             $_SESSION["staff_data"] = DB::table('infos') -> whereBetween('Date', [$_SESSION["from"], $_SESSION["to"]]) ->get();
            return view('export_excel')->with('staff_data', $_SESSION["staff_data"]);
              }


           else if(isset($_SESSION["from"])  &&  !isset($_SESSION["to"]))
           {
            $_SESSION["todayDate"] = date("Y-m-d");
            $_SESSION["staff_data"] = DB::table('infos') -> whereBetween('Date', [$_SESSION["from"],  $_SESSION["todayDate"] ])->get();
           return view('export_excel')->with('staff_data', $_SESSION["staff_data"]);
         }

         else if(!isset($_SESSION["from"])  &&  isset($_SESSION["to"]))
         {
          $_SESSION["InitDate"]  = '1980-01-01';
          $_SESSION["staff_data"] = DB::table('infos') -> whereBetween('Date', [  $_SESSION["InitDate"],  $_SESSION["to"] ])->get();
         return view('export_excel')->with('staff_data', $_SESSION["staff_data"]);
       }

       else{

         $_SESSION["staff_data"] = DB::table('infos') -> get();
        return view('export_excel')->with('staff_data', $_SESSION["staff_data"]);

       }



      }
     function excel()
          {
          # $staff_data = DB::table('infos')->get()->toArray();
        $staff_data = $_SESSION["staff_data"]->toArray();


        #  if (isset($_SESSION["from"]) ) {
        #    $staff_data = DB::table('infos') -> whereBetween('Date', [$_SESSION["from"], $_SESSION["to"]]) ->get();
        #   }
        #  else {
        #    $staff_data = DB::table('infos')  ->get();
        #   }

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
