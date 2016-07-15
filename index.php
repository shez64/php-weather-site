<?php 

if ($_GET['city']) {

    $city = str_replace(' ', '', $_GET['city']);
  
    $forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$_GET['city']."/forecasts/latest");

    $thepageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);

    $thesecondPageArray = explode("</span></span></span>", $thepageArray[1]);

    echo $theweather = $thesecondPageArray[0];

    }  ?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <style type="text/css">
      html { 
                background: url(cityweather.jpeg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
}
      body {


        background:none;
      }


      .container {

        margin: 0 auto;
        text-align: center;
        width: 500px;
        margin-top: 100px;
      }

      .btn {

        margin: 15px;

      }

      .form-control {

        width: 400px;

      margin: 0 auto;


                      }

    </style>


  </head>
  <body>


  <div class="container">
    <h1> What Is Today's Weather?</h1>

    <form>
  <fieldset class="form-group">
    <label for="city">Enter the name of a city</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="E.g. London, Sydney..">
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  
    <div id="weatherbox">

    

    </div>
  
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
