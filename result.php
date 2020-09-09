
<?php


    //$bk=$_POST['bk'];
$bk=$argv[1];
    if ($bk<0){
         echo "Không nhập số âm"."\n";
         return;
    }
    if(is_numeric($bk)){
    $dientich=pi()*$bk*$bk;
    $bankinh=2*pi()*$bk;
    echo ("Diện tích là: ".round($dientich,2)."\n");
    echo "Bán kính là: ".round($bankinh,2)."\n";}
    else{
        echo "Vui lòng nhập số"."\n";
    };



