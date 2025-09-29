<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>Sign Up</h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model ,'username')->textInput(['maxlength' => true]); ?>

<?= $form->field($model , 'email')->input('email'); ?>

<?= $form->field($model , 'password')->passwordInput(); ?>

<div class="form-group">
    <?= Html::submitButton('signup',['class' => 'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>


