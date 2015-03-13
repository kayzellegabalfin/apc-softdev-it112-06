<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "requirements_per_user".
 *
 * @property integer $rpu_id
 * @property string $rpu_status
 * @property string $rpu_datefilesubmitted
 * @property string $rpu_fileuploaded
 * @property integer $rlist_id
 * @property integer $user_id
 * @property integer $service_id
 *
 * @property User $user
 * @property RequirementsList $rlist
 * @property Services $service
 */
class RequirementsPerUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requirements_per_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rpu_status', 'rlist_id', 'user_id', 'service_id'], 'required'],
            [['rpu_datefilesubmitted'], 'safe'],
            [['rlist_id', 'user_id', 'service_id'], 'integer'],
            [['rpu_status', 'rpu_fileuploaded'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rpu_id' => 'Rpu ID',
            'rpu_status' => 'Rpu Status',
            'rpu_datefilesubmitted' => 'Rpu Datefilesubmitted',
            'rpu_fileuploaded' => 'Rpu Fileuploaded',
            'rlist_id' => 'Rlist ID',
            'user_id' => 'User ID',
            'service_id' => 'Service ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRlist()
    {
        return $this->hasOne(RequirementsList::className(), ['rlist_id' => 'rlist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Services::className(), ['service_id' => 'service_id']);
    }
}
