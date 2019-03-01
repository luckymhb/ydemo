<?php

namespace app\models;

use Yii;

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

    /**
     * @inheritdoc
     */
    public function rules()             //表字段的属性
    {
        return [
            [['lname', 'lpass', 'date'], 'required'],
            [['date'], 'safe'],
            [['lname'], 'string', 'max' => 30],
            [['lpass'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lname' => 'Lname',
            'lpass' => 'Lpass',
            'date' => 'Date',
        ];
    }
}
