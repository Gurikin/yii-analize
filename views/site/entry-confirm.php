<?php
/**
 * Created by PhpStorm.
 * User: gurik
 * Date: 16.08.2018
 * Time: 8:01
 */
use yii\helpers\Html;

?>

<p>You are input the next data:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
