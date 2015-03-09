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
 * @property integer $rps_id
 * @property integer $user_id
 *
 * @property User $user
 * @property RequirementsPerService $rps
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
            [['rpu_id', 'rps_id', 'user_id'], 'required'],
            [['rpu_id', 'rps_id', 'user_id'], 'integer'],
            [['rpu_datefilesubmitted'], 'safe'],
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
            'rps_id' => 'Rps ID',
            'user_id' => 'User ID',
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
    public function getRps()
    {
        return $this->hasOne(RequirementsPerService::className(), ['rps_id' => 'rps_id']);
    }
}
