<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "requirements_per_service".
 *
 * @property integer $rps_id
 * @property string $rps_name
 * @property integer $slist_id
 * @property integer $rlist_id
 *
 * @property ServiceList $slist
 * @property RequirementsList $rlist
 * @property RequirementsPerUser[] $requirementsPerUsers
 */
class RequirementsPerService extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requirements_per_service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rps_id', 'rps_name', 'slist_id', 'rlist_id'], 'required'],
            [['rlist_id'], 'integer'],
            [['rps_id', 'slist_id','rps_name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rps_id' => 'Rps ID',
            'rps_name' => 'Rps Name',
            'slist_id' => 'Slist ID',
            'rlist_id' => 'Rlist ID',
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
    public function getRlist()
    {
        return $this->hasOne(RequirementsList::className(), ['rlist_id' => 'rlist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirementsPerUsers()
    {
        return $this->hasMany(RequirementsPerUser::className(), ['rps_id' => 'rps_id']);
    }
}
