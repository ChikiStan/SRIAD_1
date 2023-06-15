<?php
$fd = fopen("function/стопа.txt", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = fgets($fd);
    $time = explode('X',$str);
    //echo $time[0];
    $axel_x_left = explode('Y',$time[1]);
//    echo 'AXELX = '.$axel_x_left[0];
    $axel_y_left = explode('Z',$axel_x_left[1]);
//    echo 'AXELY = '.$axel_y_left[0];
    $axel_z_left = explode('X',$axel_y_left[1]);
    echo 'AXELZ = '.$axel_z_left[0];
    $axel_x_right = explode('Y',$axel_z_left[1]);
 //   echo 'AXELZ = '.$axel_x_right[0];
}
fclose($fd);
?>
