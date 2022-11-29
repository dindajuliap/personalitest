<?php
  function date_indo($date){
    $Day    = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    $Month  = array("January","February","March","April","May","June","July","August","September","October","November","December");
    $year   = substr($date,0,4);
    $month  = substr($date,5,2);
    $Date   = substr($date,8,2);
    $time   = date('H.i', strtotime(substr($date,11,5)));
    $day    = date("w",strtotime($date));
    $result = $Date." ".$Month[(int)$month-1]." ".$year;

    return $result;
  }

  function time_indo($date){
    $Day    = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    $Month  = array("January","February","March","April","May","June","July","August","September","October","November","December");
    $year   = substr($date,0,4);
    $month  = substr($date,5,2);
    $Date   = substr($date,8,2);
    $time   = date('H.i', strtotime(substr($date,11,5)));
    $day    = date("w",strtotime($date));
    $result = $Date." ".$Month[(int)$month-1]." ".$year." ".$time;

    return $result;
  }
