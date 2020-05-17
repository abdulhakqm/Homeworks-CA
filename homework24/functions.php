<?php 

define("months", [
    "january" => "31",
    "february" => "28 days, if leap year 29",
    "march" => "31",
    "april" => "30",
    "may" => "31",
    "june" => "30",
    "july" => "31",
    "august" => "31",
    "september" => "30",
    "october" => "31",
    "november" => "30",
    "december" => "31"
]);

    function makeOption($month){
        foreach ($month as $key => $value){
            echo "<option value=".$key.">".ucwords($key)."</option>";
        }
    }

    function makeSelect ($month){
        if (is_array($month)){
            echo "<h3>Select month </h3>";
           
            echo "<select name=\"month\" id=\"month\">";
            makeOption($month);
            echo "</select>";
     
        }else die("error");
       
    }

    function message(){
        if (isset($_POST['month'])){
            foreach (months as $key => $value){
                if ($_POST['month'] == $key){
                    $month = $key;
                    $days = $value;
                    echo "Month of ".ucwords($month)." has ".$days." days";
                }
            }
        }
        else {
            echo "Chose your month";
        }
    }