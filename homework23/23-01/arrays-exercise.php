<?php 
echo "<h2>First Exercise</h2>";
$numeric = array(0,1,2,3,4,);
echo "The value of index 3 is = ".$numeric[3]."<br>";

echo "<br>";
echo "<br>";

echo "<h2>Second Exercise</h2>";
$second = array("zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4);
echo "The value of \"third\" key is = ".$second["three"]."<br>";

echo "<br>";
echo "<br>";

echo "<h2>Third Exercise</h2>";
$third = array(
    array(0,1),
    array(
        2,
        array(3)
    )
    );
echo "We need to pick second item in the first array , second item in the picked item and the first item in the third array and we get =".$third[1][1][0]."<br>";

echo "<br>";
echo "<br>";

echo "<h2>Fourth Exercise</h2>";
$fourth = array(
    "a"=>array(
        "b"=>0,
        "c"=>1,
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
echo $fourth["b"]["o"]["b"]."= is the answer and if you want to know how I got it just look at the code <br>";

echo "<br>";
echo "<br>";

echo "<h2>Fifth Exercise</h2>";
$fifth = "a,b,c,d,e,f";
$fifthExploded = explode(",", $fifth);
var_dump($fifthExploded);

echo "<br>";
echo "<br>";

echo "<h2>Sixth Exercise</h2>";
$sixth=[];
foreach($fifthExploded as$key => $value){
    $sixth [$value]= $value;
}
var_dump($sixth);

echo "<br>";
echo "<br>";

echo "<h2>Seventh Exercise</h2>";
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$keysAndValues ;
foreach($keys as $key => $value){
    
    foreach($values as $key2 => $value2){
        $keysAndValues [$value] = $value2;    
    }
}

var_dump($keysAndValues);
echo "<h4>This is not fully correct</h4>";

echo "<br>";
echo "<br>";

echo "<h2>Eighth Exercise</h2>";
$transactions = array(
    array(
        "debit"=>3,
        "credit"=>2
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

function transAmount( $debit , $credit ){
    $sum = $debit - $credit;
    return $sum;
}


array_push($transactions[0], $transactions[0]['amount']=transAmount($transactions[0]['debit'] , $transactions[0]['credit']) );
array_push($transactions[1], $transactions[1]['amount']=transAmount($transactions[1]['debit'] , $transactions[1]['credit']) );


var_dump($transactions);

echo "<br>";
echo "<br>";

echo "<h2>Ninth Exercise</h2>";
$ninth = array(0,1,2,3,4,5,6);
$sum = 0;
foreach($ninth as $value){
    $sum +=$value;
  
    
}
echo "The sum of this array is = ".$sum;
?>

