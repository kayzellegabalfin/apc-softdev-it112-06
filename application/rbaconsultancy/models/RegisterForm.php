<?php

namespace app\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "users".
 *
 * @property string $user_id
 * @property string $user_email
 * @property string $user_password
 * @property string $user_lname
 * @property string $user_fname
 * @property string $user_mname
 * @property string $user_housenum
 * @property string $user_street
 * @property string $user_city
 * @property string $user_country
 * @property string $user_postalcode
 * @property integer $user_contact
 * @property string $user_company
 * @property string $user_birthdate
 * @property integer $user_age
 * @property string $user_type
 *
 * @property Requirements[] $requirements
 * @property Services[] $services
 */
class RegisterForm extends \yii\db\ActiveRecord
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
            [['user_id'], 'required'],
            [['user_contact', 'user_age'], 'integer'],
            [['user_birthdate'], 'safe'],
            [['user_id'], 'string', 'max' => 50],
            [['user_email', 'user_password', 'user_lname', 'user_fname', 'user_mname', 'user_housenum', 'user_street', 'user_city', 'user_country', 'user_postalcode', 'user_company', 'user_type'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'user_id' => 'User ID',
            'user_email' => 'Email',
            'user_password' => 'Password',
            'user_lname' => 'Last Name',
            'user_fname' => 'First Name',
            'user_mname' => 'Middle Name',
            'user_housenum' => 'House Number',
            'user_street' => 'Street',
            'user_city' => 'City',
            'user_country' => 'Country',
            'user_postalcode' => 'Postalcode',
			'user_gender' => 'Gender',
            'user_contact' => 'Contact',
            'user_company' => 'Company',
            'user_birthdate' => 'Birthdate',
            'user_age' => 'Age',
            'user_type' => 'Type',
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
