<?php
/*
$eta=-hrtime(true);
$day = "Wed";

switch ($day) {
  case "Mon":
    echo "Mon";
    break;
  case "Tue":
    echo "Tue";
    break;
  case "Wed":
    echo "Wed";
    break;
  case "Thur":
    echo "Thur";
    break;
  case "Fri":
    echo "Fri";
    break;
  default:
    echo "Not today!<br>";
}
$eta+=hrtime(true);
echo $eta;
echo "<br>" . $eta/1e+9; //nanoseconds to milliseconds
*/


$eta=-hrtime(true);
$day = "Tue";

if($day === "Mon"){
	$test = "Mon";
}elseif($day === "Tue"){
	$test = "Tue";
}elseif($day === "Wed"){
	$test = "Wed";
}elseif($day === "Thur"){
	$test = "Thur";
}elseif($day === "Fri"){
	$test = "Fri";
}else{
	$test = "Not today!<br>";
}

echo $test;
$eta+=hrtime(true);
echo $eta;
echo "<br>" . $eta/1e+9; //nanoseconds to milliseconds

/*
$eta=-hrtime(true);
sleep(1);
$eta+=hrtime(true);

echo $eta/1e+9; //nanoseconds to milliseconds
/*
$time = -microtime(true);
sleep(2);
echo $end = sprintf('%f', $time += microtime(true));
*/
/*
$start=hrtime(true);
sleep(2);
$end=hrtime(true);
$eta=$end-$start;
echo $eta;
echo "<br>" . $eta/1e+9; //nanoseconds to milliseconds
*/
/*
$time = -microtime(true);
sleep(5);
$end = sprintf('%f', $time += microtime(true));
echo $end;
*/
//Substituted as:
/*
$start=hrtime(true);
sleep(5);
$end=hrtime(true);
$eta=$end-$start;

echo $eta/1e+6; //nanoseconds to milliseconds
//5000.362419

//OR simply

$eta=-hrtime(true);
sleep(2);
$eta+=hrtime(true);

echo $eta/1e+9; //nanoseconds to milliseconds
//5000.088229
*/


/*








$events = array(
  array(
   'image' => 'img/1.png',
   'start' => '01-02-2014',
   'end' => '02-02-2014'
  ),
  array(
   'image' => 'img/2.png',
   'start' => '03-02-2014',
   'end' => '04-02-2014'
  )
);

foreach($events as $event) {
  if(date('d-m-Y') >= $event['start'] && date('d-m-Y') <= $event['end']) {
    echo "<img src='".$event['image']."'>";
  }
}
*/
?>