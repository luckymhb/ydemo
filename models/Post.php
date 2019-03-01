<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%post}}".
 *
 * @property integer $id
 * @property string $title
 * @property integer $author_id
 * @property string $content
 * @property integer $tags
 * @property integer $status
 * @property string $create_time
 * @property string $update_time
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%post}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author_id', 'content', 'tags', 'status', 'create_time', 'update_time'], 'required'],
            [['author_id', 'tags', 'status'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'title' => '标题',
            'author_id' => '作者',
            'content' => '内容',
            'tags' => '标签',
            'status' => '状态',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }
    public function getstatus0(){           //表关连的外键名(status0)            hasmany 用于一对多
        return $this->hasOne(Poststatus::classname(),['id'=>'status']);     //hasone获取一条记录 用于多对一   一对一
    }
    public function getauthor0(){           //表关连的外键名(status0)            hasmany 用于一对多
        return $this->hasOne(Adminuser::classname(),['id'=>'author_id']);     //hasone获取一条记录 用于多对一   一对一
    }
    public function beforeSave($insert){
        if(parent::beforeSave($insert)){
            if($insert){
                $this->create_time=date('y-m-d H:i:s',time());
                $this->update_time=date('y-m-d H:i:s',time());
            }else{
                $this->update_time=date('y-m-d H:i:s',time());
            }
            return true;
        }else{
            return false;
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
