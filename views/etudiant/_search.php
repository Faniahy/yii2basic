<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EtudiantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etudiant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'immatriculation') ?>

    <?= $form->field($model, 'nom_etud') ?>

    <?= $form->field($model, 'prenom_etud') ?>

    <?= $form->field($model, 'tel_etud') ?>

    <?= $form->field($model, 'address_etud') ?>

    <?php // echo $form->field($model, 'classe_etud') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
