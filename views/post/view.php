<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你要删除这篇文章吗?',          //'Are you sure you want to delete this item?'
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            //'author_id',
            ['attribute'=>'author_id',
            'label' =>'作者',
            'value' =>$model->author0->nickName,
            ],
            'content:ntext',
            'tags',
            //'status',
            ['attribute'=>'status',
            'label' =>'状态',
            'value' =>$model->status0->name,
            ],
            'create_time',
            'update_time',
          ],
          'template'=>'<tr><th style="width:120px;">{label}</th><td>{value}</td></tr>',
    ]) ?>

</div>
