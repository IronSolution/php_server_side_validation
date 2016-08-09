<?php
/**
 * Created by PhpStorm.
 * User: Gihan
 * Date: 2016-08-09
 * Time: PM 8.20
 */

function registration($data){
$errors=array();

    foreach($data as $key=>$value){
        if(strlen($value)===0){
        $errors[]=ucfirst(str_replace('_',' ',$key)." can't be empty..");
        }
    }
    $_SESSION['errors']=$errors;

    if(count($errors)===0){
        header('Location:page_1.php');
    }

}