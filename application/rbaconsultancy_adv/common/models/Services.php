<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $service_id
 * @property integer $user_id
 * @property integer $slist_id
 * @property string $service_dateapplied
 * @property string $service_status
 *
 * @property ServiceList $slist
 * @property User $user
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_id', 'user_id', 'slist_id'], 'required'],
            [['service_id', 'user_id', 'slist_id'], 'integer'],
            [['service_dateapplied'], 'safe'],
            [['service_status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'user_id' => 'User ID',
            'user.username' => 'Acquired by',
            'slist_id' => 'Slist ID',
            'servicelist.slist_name'=> 'Service',
            'service_dateapplied' => 'Date Applied',
            'service_status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlist()
    {
        return $this->hasOne(ServiceList::className(), ['slist_id' => 'slist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
