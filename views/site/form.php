<?php
/**
 * Created by PhpStorm.
 * User: karpov
 * Date: 11.11.2016
 * Time: 18:21
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php if ($name) { ?>  <p>Вы ввели имя <b><?= $name ?></b> и email <b><?= $email ?></b>.</p><?php } ?>
<?php $f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $f->field($form, 'name') ?>
<?= $f->field($form, 'email') ?>
<?= $f->field($form, 'file')->fileInput() ?>
<?= Html::submitButton('Отправить'); ?>
<?php ActiveForm::end(); ?>