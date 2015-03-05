<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $user_lastname
 * @property string $user_firstname
 * @property string $user_midname
 * @property string $user_housenum
 * @property string $user_street
 * @property string $user_city
 * @property string $user_country
 * @property integer $user_postalcode
 * @property string $user_gender
 * @property string $user_companyname
 * @property string $user_companyadd
 * @property string $user_companycontact
 * @property string $user_birthdate
 * @property integer $user_age
 * @property string $user_type
 *
 * @property RequirementsPerUser[] $requirementsPerUsers
 * @property Services[] $services
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'user_lastname', 'user_firstname', 'user_country', 'user_postalcode'], 'required'],
            [['id', 'status', 'created_at', 'updated_at', 'user_postalcode', 'user_age'], 'integer'],
            [['user_birthdate'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['user_lastname', 'user_firstname', 'user_housenum', 'user_street', 'user_city', 'user_country'], 'string', 'max' => 25],
            [['user_midname'], 'string', 'max' => 10],
            [['user_gender'], 'string', 'max' => 6],
            [['user_companyname', 'user_companyadd', 'user_companycontact'], 'string', 'max' => 45],
            [['user_type'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_lastname' => 'User Lastname',
            'user_firstname' => 'User Firstname',
            'user_midname' => 'User Midname',
            'user_housenum' => 'User Housenum',
            'user_street' => 'User Street',
            'user_city' => 'User City',
            'user_country' => 'User Country',
            'user_postalcode' => 'User Postalcode',
            'user_gender' => 'User Gender',
            'user_companyname' => 'User Companyname',
            'user_companyadd' => 'User Companyadd',
            'user_companycontact' => 'User Companycontact',
            'user_birthdate' => 'User Birthdate',
            'user_age' => 'User Age',
            'user_type' => 'User Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirementsPerUsers()
    {
        return $this->hasMany(RequirementsPerUser::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['user_id' => 'id']);
    }
}
