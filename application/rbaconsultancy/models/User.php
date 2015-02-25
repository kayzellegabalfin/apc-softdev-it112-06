<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;



class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $authKey;
    public static function tableName()
    {
        return 'user';
    }
	public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_contact', 'user_age'], 'integer'],
            [['user_birthdate'], 'safe'],
            [['user_id'], 'string', 'max' => 50],
            [['user_email', 'user_password', 'user_lname', 'user_fname', 'user_mname', 'user_housenum', 'user_street', 'user_city', 'user_country', 'user_postalcode', 'user_company', 'user_type'], 'string', 'max' => 250]
        ];
    }
	public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_email' => 'User Email',
            'user_password' => 'User Password',
            'user_lname' => 'User Lname',
            'user_fname' => 'User Fname',
            'user_mname' => 'User Mname',
            'user_housenum' => 'User Housenum',
            'user_street' => 'User Street',
            'user_city' => 'User City',
            'user_country' => 'User Country',
            'user_postalcode' => 'User Postalcode',
            'user_contact' => 'User Contact',
            'user_company' => 'User Company',
            'user_birthdate' => 'User Birthdate',
            'user_age' => 'User Age',
            'user_type' => 'User Type',
        ];
    }
		
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static :: findOne ($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static :: findOne (['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($user_email)
    {
       return static :: findOne (['user_email' => $user_email]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($user_password)
    {
        return $this->user_password === $user_password;
    }
	
	
	
}


