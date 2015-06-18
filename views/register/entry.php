<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;;
?>


<?php

 $form = ActiveForm::begin(); ?>

<?= $form -> field($account,'name') ?>

<?= $form -> field($account,'tele') ?>

<?= $form -> field($account,'email') ?>




<div class="form-group">
  <?=Html::submitButton('submit', ['class'=>'btn btn-lg btn-success'])?>
</div>

<?php ActiveForm::end(); ?>
