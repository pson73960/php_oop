<?php

$myfile=file_get_contents('number.txt');
$mangtrong=explode("\n",$myfile);


$result=[];
for($i=0;$i<count($mangtrong);$i++){
    $coun=0;

    $num=$mangtrong[$i];
    for($j=0;$j<count($mangtrong);$j++) {
        if($num==$mangtrong[$j]){
            $coun=$coun+1;

        }
        if ($coun>=3){
            if (!in_array($num,$result)){
            array_push($result,$num);
            }
    break;
        }





    }


}
print_r($result);








