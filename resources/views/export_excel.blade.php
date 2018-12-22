<!--
 export_excel.blade.php
!-->

<!DOCTYPE html>
<html>
 <head>
  <title>Export Data to Excel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Export Data to Excel</h3><br />


<div class="form-group" >

  <form action="{{route('export_excel')}}">
    From:<br>
    <input type="date" name="fromdate"><br>
    To:<br>
    <input type="date" name="todate">
     <input type="submit" value="Display">

  </form>


</div>
<div align="right">
 <a href="{{ route('export_excel.excel') }}" class="btn btn-success">Download</a>
</div>






   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <td> Date</td>
      <td> Employee ID</td>
      <td> IN Time</td>
      <td> OUT Time </td>

     </tr>
     @foreach($staff_data as $staff)
     <tr>
      <td>{{ $staff-> Date }}</td>
      <td>{{ $staff-> e_id }}</td>
      <td>{{ $staff-> in_time }}</td>
      <td>{{ $staff-> out_time }}</td>

     </tr>
     @endforeach
    </table>
   </div>


  </div>
 </body>
</html>
