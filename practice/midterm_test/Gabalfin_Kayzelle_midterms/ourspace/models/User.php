<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $user_email
 * @property string $user_password
 * @property string $user_lname
 * @property string $user_fname
 * @property string $user_mname
 * @property string $user_housenum
 * @property string $user_street
 * @property string $user_city
 * @property string $user_country
 * @property integer $user_postalcode
 * @property string $user_gender
 * @property string $user_contact
 * @property string $user_company
 * @property string $user_birthdate
 * @property integer $user_age
 * @property string $user_type
 *
 * @property Requirements[] $requirements
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
            [['user_email', 'user_password', 'user_lname', 'user_fname', 'user_street', 'user_city', 'user_country', 'user_postalcode', 'user_contact', 'user_company'], 'required'],
            [['user_postalcode', 'user_age'], 'integer'],
            [['user_birthdate'], 'safe'],
            [['user_email'], 'string', 'max' => 50],
            [['user_password', 'user_lname', 'user_fname', 'user_housenum', 'user_street', 'user_city', 'user_country', 'user_contact', 'user_company'], 'string', 'max' => 25],
            [['user_mname'], 'string', 'max' => 10],
            [['user_gender'], 'string', 'max' => 6],
            [['user_type'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
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
            'user_gender' => 'User Gender',
            'user_contact' => 'User Contact',
            'user_company' => 'User Company',
            'user_birthdate' => 'User Birthdate',
            'user_age' => 'User Age',
            'user_type' => 'User Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirements()
    {
        return $this->hasMany(Requirements::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['user_id' => 'user_id']);
    }
}
