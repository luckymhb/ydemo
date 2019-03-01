<?php

namespace app\controllers;

use yii;
use app\models\Login;
class TestController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {   
        $test='hello';
        $db=Login::findBySql('SELECT lname,id FROM yii_login')->all();
        echo Login::find()->all();
        return $this->render('index',[
            'model'=>$test,
            'lists' => $db,
        ]);
    }
    public function actionCheck()
    {
        $admin=Login::model()->findAll();
        return $this->render('check');
    }

}
