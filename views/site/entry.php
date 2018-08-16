<?php
/**
 * Created by PhpStorm.
 * User: gurik
 * Date: 16.08.2018
 * Time: 8:03
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

    $form = ActiveForm::begin();
    echo $form->field($model, 'name');
    echo $form->field($model, 'email');
?>

<div class = "form-group">
    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
</div>

<?php
    ActiveForm::end();
?>



