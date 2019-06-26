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
        <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'lname')->textInput()->hint('Please enter your name')->label('Name') ?>

        <?= $form->field($model, 'lpass')->passwordInput() ?>

<!--        --><?//= $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>'multiple']); ?>

        <?= $form->field($model, 'imageFile')->fileInput() ?>

        <?= $form->field($model, 'items[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C'])->label('选项'); ?>

        <?= $form->field($model, 'category')->dropdownList($item,
                                                        ['prompt'=>'Select Category']
                                                    ); ?>
        <?= $form->field($model, 'category')->radioList([
            1 => 'radio 1',
            2 => 'radio 2'
        ]); ?>

        <?= $form->field($model, 'category')->checkboxList([
            1 => 'checkbox 1',
            2 => 'checkbox 2'
        ]); ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
        <?= HelloWidget::widget(['message' => 'Good morning']) ?>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
