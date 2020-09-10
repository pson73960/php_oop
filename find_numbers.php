<?php
//get data in file number.txt
$myfile=file_get_contents('number.txt');
$mangtrong=explode("\n",$myfile);

//create containing results
$result=[];
//create 2 loops
for($i=0;$i<count($mangtrong);$i++){
    //create a counter
    $coun=0;
    for($j=0;$j<count($mangtrong);$j++) {
        if($mangtrong[$i]==$mangtrong[$j]){
            $coun=$coun+1;

        }
        if ($coun>=3){
            if (!in_array($mangtrong[$i],$result)){
                //add number >=3 into array result
            array_push($result,$mangtrong[$i]);
            }
        break;
        }
    }
}
print_r($result);








