<?php

namespace app\controllers;

use yii;
use app\models\Login;
class TestController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    //禁用布局

    public function actionIndex()
    {
        // $test='hello';
        // $db=Login::findBySql('SELECT lname,id FROM yii_login')->all();
        // echo Login::find()->all();
        return $this->render('index');
    }
    public function actionCheck()
    {
        $admin=Login::model()->findAll();
        return $this->render('check');
    }
    public function actionWelcome(){
      return $this->render('welcome');
    }
    public function actionLogin(){
      if($_POST){
        $uname = Login::find()->where(['lname' => $_POST['username'],'lpass'=>$_POST['password']])->one();
        if($uname){
          $data['status'] = 1;
          $data['info'] = '登录成功';
        }else{
          $data['status'] = 2;
          $data['info'] = '用户名或密码错误';
        }
      }else{
        return $this->render('login');
      }
    }

}
