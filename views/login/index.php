<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LoginSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Login', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([      //GridView网格布局小部件
        'dataProvider' => $dataProvider,        //提供数据的数据提供者
        'filterModel' => $searchModel,          //指定一个能够提供搜索过滤功能的搜索模型类
        'columns' => [                          //需要展示的列及其格式
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'lname',
            'lpass',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
