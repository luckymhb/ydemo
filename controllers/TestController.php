<?php

namespace app\controllers;

use yii;
use app\models\Login;
use yii\web\Response;
use yii\helpers\Html;
class TestController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    //禁用布局
    //访问路径
    //http://www.ydemo.com/web/index.php?r=test/login

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
            $uname = Login::findOne(['lname' => $_POST['username'], 'lpass' => $_POST['password']]);
            if($uname){
                $data['status'] = 1;
                $data['info'] = '登录成功';
            }else{
                $data['status'] = 2;
                $data['info'] = '用户名或密码错误';
            }
            //直接ajax返回，前端不需要解析
            //        $response = Yii::$app->response;
            //        $response->format = \yii\web\Response::FORMAT_JSON;
            //        $response->data = $data;
            //        $response->send();
            return json_encode($data);
        }else{
            return $this->render('login', [
                'title' => Html::encode('管理员登录'),
            ]);
        }
    }
    public function actionDetail(){
        return $this->render('detail');
    }

}
