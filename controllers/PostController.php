<?php
/**
 * Created by PhpStorm.
 * User: Djupp
 * Date: 02.02.2020
 * Time: 0:21
 */

namespace app\controllers;

use Yii;

class PostController extends AppController
{

    public function actionTest()
    {
        $names = ["Ivanov", "Petrov", "Sidorov"];

        // $this->debag(Yii ::$app);

        $this->debag($names);
        return $this->render('Test');
    }

}