<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service_list".
 *
 * @property integer $slist_id
 * @property string $slist_name
 * @property string $slist_desc
 * @property string $slist_type
 * @property string $slist_dateadded
 *
 * @property PriceList[] $priceLists
 * @property RequirementsPerService[] $requirementsPerServices
 * @property Services[] $services
 */
class ServiceList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slist_id', 'slist_name', 'slist_type'], 'required'],
            [['slist_id'], 'integer'],
            [['slist_name', 'slist_desc'], 'string'],
            [['slist_dateadded'], 'safe'],
            [['slist_type'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'slist_id' => 'Service ID',
            'slist_name' => 'Service Name',
            'slist_desc' => 'Service Desc',
            'slist_type' => 'Service Type',
            'slist_dateadded' => 'Service Dateadded',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceLists()
    {
        return $this->hasMany(PriceList::className(), ['slist_id' => 'slist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirementsPerServices()
    {
        return $this->hasMany(RequirementsPerService::className(), ['slist_id' => 'slist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['slist_id' => 'slist_id']);
    }
}
