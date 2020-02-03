<?php
/**
 * Created by PhpStorm.
 * User: Djupp
 * Date: 01.02.2020
 * Time: 20:57
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends AppController
{
    public function actionIndex($id = null)
    {

        $hi = "Hello world!";
        $names = ["Ivanov", "Petrov", "Sidorov"];


        if (!$id) {
            $id = 'test';
        }

        return $this->render('index', compact('hi','names','id'));


    }
}