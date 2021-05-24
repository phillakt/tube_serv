<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CoubsGenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coubs Genres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coubs-genres-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coubs Genres', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'slug',
            'description',
            'alt',
            //'img',
            //'parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
