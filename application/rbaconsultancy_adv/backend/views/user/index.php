<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Mains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-main-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Main', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'user_lastname',
            // 'user_firstname',
            // 'user_midname',
            // 'user_housenum',
            // 'user_street',
            // 'user_city',
            // 'user_country',
            // 'user_postalcode',
            // 'user_gender',
            // 'user_companyname',
            // 'user_companyadd',
            // 'user_companycontact',
            // 'user_birthdate',
            // 'user_age',
            // 'user_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
