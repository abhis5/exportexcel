<!--
 export_excel.blade.php
!-->

<!DOCTYPE html>
<html>
 <head>
  <title>Export Data to Excel in Laravel using Maatwebsite</title>
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
   <h3 align="center">Export Data to Excel in Laravel</h3><br />

<div class="form-group">
   <form class="" action="index.html" method="post">
      From:<br>
 <input  class="input-group date form-control" data-provide="datepicker" type="date" name="fromdate"><br>
 To:<br>
 <input  class="form-control" type="date" name="todate">
   </form>
<br> </br>
<button type="submit" class="btn btn-primary" value="Submit">Submit</button>

</div>



   <div align="center">
    <a href="{{ route('export_excel.excel') }}" class="btn btn-success">Export to Excel</a>
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
