<?php
use yii\widgets\ActiveForm;
use app\components\HelloWidget;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<?= $form->field($model, 'lname') ?>

<?= $form->field($model, 'lpass')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Login') ?>
    </div>

<?php ActiveForm::end(); ?>
<?= HelloWidget::widget(['message' => 'Good morning']) ?>
