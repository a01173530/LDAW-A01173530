<?php

namespace Utils;

function formatDate($dateStr = "2021-08-24"){

    $timestamp = strtotime($dateStr);
    
    return date("M d, Y", $timestamp);

}

function moneyFormat($number){
    
    return "$" . number_format($number, 2);

}