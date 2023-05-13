<?php

$cert="3256";

//echo ($_POST['cert']==$cert)?1:0;

if($_POST['cert']==$cert){
    echo 1;
}else{
    echo 0;
}