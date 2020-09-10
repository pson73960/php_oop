
<?php
//$bk=$_POST['bk'];
//Enter vairable
$bk=$argv[1];
//Consider non-negative conditions
    if ($bk<0){
         echo "Không nhập số âm"."\n";
         return;
    }
    //consider the condition as number
    if(is_numeric($bk)){
    //Recipe
    $dientich=pi()*$bk*$bk;
    $bankinh=2*pi()*$bk;
    echo ("Diện tích là: ".round($dientich,2)."\n");
    echo "Bán kính là: ".round($bankinh,2)."\n";}
    else{
        echo "Vui lòng nhập số"."\n";
    };



