<?php
#Function for parsing age
function parse_Date($Date):DateTime{
    return $ageArray = new DateTime($Date);
}
function todays_Date():string{
    return date("Y-m-d");
}


//calculates difference in years using DateTime objects. Format for date should be yyyy-mm-dd
function calc_Age($age, $date):string{
    $difference = parse_Date($age)->diff(parse_Date($date));
    return $difference->y;
}
//this one returns an array for more flexible formating
function calc_Time_Diff($age, $date):array{
    $difference = parse_Date($age)->diff(parse_Date($date));
    return array($difference->y,$difference->m,$difference->d);
}
?>