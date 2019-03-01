<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = '创建文章';
$this->params['breadcrumbs'][] = ['label' => '文章列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <!-- Html::tag 生成标签    Html::encode字符转换
                           参数1 要生成的标签名
                           参数2 标簦的内容
                           参数3 用到的CSS样式
     -->
    <?php 
        $options = ['style' => ['width' => '100px','color' => '#f00']];
    ?>
    <?= Html::tag('p', Html::encode($this->title), $options) ?>  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
