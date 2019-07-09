<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EtudiantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Etudiants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etudiant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'immatriculation',
            'nom_etud',
            'prenom_etud',
            'tel_etud',
            'address_etud',
            //'classe_etud',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
