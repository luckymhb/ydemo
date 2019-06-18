<?php
namespace app\components;

use yii\base\BaseObject;

class test extends BaseObject
{
    private $_label;
    public function getLabel(){
        return $this->_label;
    }
    public function setLabel($value){
        $this->_label = trim($value);
    }
}