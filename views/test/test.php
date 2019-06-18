<?php
use yii\widgets\ActiveForm;
use app\components\HelloWidget;
use yii\helpers\Html;
use yii\bootstrap\Alert;
use app\assets\AppAsset;
AppAsset::register($this);  // $this 代表视图对象
$this->context->layout = false;
$this->title = '测试';

use yii\widgets\Menu;

echo Menu::widget([
    'activateItems' => false,
    'items' => [
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'Products', 'url' => ['product/index']],
        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    ],
]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!-- yii框架创建表单  yii/widgets/ActionForm -->
<head>
    <meta charset="<?= Yii::$app->charset ?>">          <!-- Yii::$app->charset  设置页面编码  -->
    <!-- yong yu du qu pei zhi wen jian -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="container">
        <?php
        echo Alert::widget([
            'options' => ['class' => 'alert-info'],
            'body' => Yii::$app->session->getFlash('postDeleted'),
        ]);
        ?>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'lname') ?>

        <?= $form->field($model, 'lpass')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Login') ?>
        </div>

        <?php ActiveForm::end(); ?>
        <?= HelloWidget::widget(['message' => 'Good morning']) ?>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
