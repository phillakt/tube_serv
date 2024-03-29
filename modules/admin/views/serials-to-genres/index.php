<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SerialsToGenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serials To Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serials-to-genres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Serials To Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'films_id',
            'genres_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
