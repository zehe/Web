<?php
/**
 * Created by PhpStorm.
 * User: hze
 * Date: 12/27/15
 * Time: 10:57 AM
 */
$read = fopen("data.txt",'r');

while($line = fgets($read,4096)){
    list($name,$dob,$hometown)= explode("|",$line);

    printf("Name: %s <br/>",$name);
    printf("DOB: %s <br/>",$dob);
    printf("Hometown: %s <br/>",$hometown);

}

?>