<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-main-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add New User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',
            'user_firstname',
            'user_lastname',
            'created_at',
            'user_type',
            //'id',
            //'auth_key',
            // 'password_hash',
            //'password_reset_token',
            // 'status',
            // 'updated_at',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
