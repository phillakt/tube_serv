<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */
/* @var $form yii\widgets\ActiveForm */

use app\modules\admin\models\Cat;

$catData = new Cat();

$getCatTitle = $catData::find()->asArray()->all();

$resultCatTitle = ArrayHelper::map($getCatTitle, 'id', 'title');

?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-6">
            <?= $form->field($model, 'sourceVideo')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'proxyServerUrlVideo')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'posterImg')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'date')->textInput() ?>

            <?= $form->field($model, 'publishDate')->textInput() ?>

            <?= $form->field($model, 'parent_id')->dropDownList($resultCatTitle) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>