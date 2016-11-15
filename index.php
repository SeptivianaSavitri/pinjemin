<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pinjemin.ga</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
         
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <link rel="stylesheet" href="mystyle.css">
  
  <script type="text/javscript"> 
    $( document ).ready(function() {
       $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 3 // Creates a dropdown of 15 years to control year
      });
    });
  </script>
</head>
<body>
    <div class = "spaces"></div>
    <div class="row">
      <div class="col s12"><div class = "caption title">Pinjemin.ga</div></div>
      <div class="col s2"></div>
      <div class="col s8"><div class = "caption">Cari barang-barang yang anda inginkan!</div></div>
      <div class="col s2"></div>
    </div>

    <div class="row" >
      <div class="col s2"></div>
      <div class="col s8">
          <div class="row round">
            <div class="col s4" style ="border-right: solid 0.5px #979797"> <input class="noborder"type="search" ></div>
            <div class="col s3" style ="border-right: solid 0.5px #979797"> <input type="date" class="datepicker noborder"></div>
            <div class="col s3"> <input type="date" class="datepicker noborder"></div>
            <div class="col s1"> <a class="waves-effect waves-light btn">Cari</a></div>
            <div class="col s1"></div>
          </div>
      </div>
      <div class="col s2"></div>
    </div>
   

</body>
</html>
