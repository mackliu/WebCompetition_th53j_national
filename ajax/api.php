<?php


switch($_GET['type']){
    case "user";
        echo "你是一般使用者";
    break;
    case "admin";
        echo "你是管理者";
    break;
    case "VIP";
        echo "你是超級貴賓";
    break;
}
