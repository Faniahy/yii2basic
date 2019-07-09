<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>
<?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>
<button class="btn btn-primary">OK</button>

<?= LinkPager::widget(['pagination' => $pagination]) ?>