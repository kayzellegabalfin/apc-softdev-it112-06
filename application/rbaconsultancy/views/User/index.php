<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'user_email:email',
            'user_password',
            'user_lname',
            'user_fname',
            // 'user_mname',
            // 'user_housenum',
            // 'user_street',
            // 'user_city',
            // 'user_country',
            // 'user_postalcode',
            // 'user_gender',
            // 'user_contact',
            // 'user_company',
            // 'user_birthdate',
            // 'user_age',
            // 'user_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
