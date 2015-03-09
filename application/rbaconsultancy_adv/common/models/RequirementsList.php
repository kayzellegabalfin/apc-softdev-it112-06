<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "requirements_list".
 *
 * @property integer $rlist_id
 * @property string $rlist_name
 * @property string $rlist_desc
 * @property string $rlist_dateadded
 * @property integer $slist_id
 *
 * @property ServiceList $slist
 * @property RequirementsPerUser[] $requirementsPerUsers
 */
class RequirementsList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requirements_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rlist_name', 'slist_id'], 'required'],
            [['rlist_desc'], 'string'],
            [['rlist_dateadded'], 'safe'],
            [['slist_id'], 'integer'],
            [['rlist_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rlist_id' => 'Rlist ID',
            'rlist_name' => 'Rlist Name',
            'rlist_desc' => 'Rlist Desc',
            'rlist_dateadded' => 'Rlist Dateadded',
            'slist_id' => 'Slist ID',
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
    public function getRequirementsPerUsers()
    {
        return $this->hasMany(RequirementsPerUser::className(), ['rlist_id' => 'rlist_id']);
    }
}
