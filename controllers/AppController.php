<?php
/**
 * Created by PhpStorm.
 * User: Djupp
 * Date: 02.02.2020
 * Time: 0:18
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller{

    public function debag($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}


function debug($arr){

    echo '<pre>' . print_r($arr, true) . '</pre>';
}