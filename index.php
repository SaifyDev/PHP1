<?php

class players{

    public static $count = 0;
    public function __construct($name,$age){
        echo $name." ".$age."<br>";
        players::$count++;
    }
}

$contastnt = [['Asad','1'],['saif','2'],['ammad','3'],['mudassir','4'],['sarmad','5'],['wamiq','6'],
['mubashir','6']];

for($i=0; $i<count($contastnt); $i++)
{
    $abc = new players($contastnt[$i][0],$contastnt[$i][1]);
}

echo players::$count;
?>