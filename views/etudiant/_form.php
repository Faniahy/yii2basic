<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Etudiant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etudiant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'immatriculation')->textInput() ?>

    <?= $form->field($model, 'nom_etud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prenom_etud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_etud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_etud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classe_etud')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
