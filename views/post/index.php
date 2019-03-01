<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],     //序号列
            'id',                                       //数据列
            //'title',
            ['attribute'=>'title',
             'label' =>'标题',  
             //'filter'=>Poststatus::find()             //查询条件
             //       ->select([name],[id])
             //        ->orderBy('position')
             //        ->indexBy('id')
             //        ->column(),       
            ],
            'author_id',
            //'content:ntext',      //字段：属性
            //'tags',
            //'status',
            ['attribute'=>'status',
            'label' =>'状态',
            ],
             //'create_time',
             ['attribute'=>'update_time',
             'label' =>'日期',
             'format' =>['date','php:Y-m-d'],             //对日期格式化
             'contentOptions' =>['width'=>'100px'],       //设置HTML
             ],
            // 'update_time',

            ['class' => 'yii\grid\ActionColumn'],         //动作列   （查看，更新，删除）
        ],
    ]); ?>
</div>
