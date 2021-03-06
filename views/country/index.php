<?php
/**
 * Created by PhpStorm.
 * User: gurik
 * Date: 16.08.2018
 * Time: 22:19
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})")?>
        <?= $country->population ?>
    </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination])?>
