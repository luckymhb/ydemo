<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget
{
    //创建小部件
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        //使用自定义内容
        return Html::encode($this->message);
        //使用视图文件
//        return $this->render('hello');
    }
}