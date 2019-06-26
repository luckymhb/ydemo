<?php

namespace app\models;

use Yii;
use yii\helpers\BaseUrl;

/**                                                     //表字段
 * This is the model class for table "{{%login}}".
 *
 * @property integer $id
 * @property string $lname
 * @property string $lpass
 * @property string $date
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%login}}';
    }
    public function setCreateTimeText($value){
        $this->create_time = strtotime($value);
    }
    public function getCreateTimeText(){
        return date('Y-m-d H:i:s',$this->create_time);
    }

    /**
     * @inheritdoc
     */
    public function rules()             //表字段的属性
    {
        return [
//            [['lname', 'lpass'], 'required'],
            [['lname'], 'string', 'max' => 30],
            [['lpass'], 'string', 'max' => 40],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lname' => '用户名',
            'lpass' => '密码',
            'uploadFile'=>'上传文件',
            'items' =>'选项',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::$app->request->baseUrl.'/uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
