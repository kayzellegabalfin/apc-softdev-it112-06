<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_list".
 *
 * @property integer $slist_id
 * @property string $slist_name
 * @property string $slist_desc
 *
 * @property PriceList $priceList
 * @property Requirements[] $requirements
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
            [['slist_name'], 'required'],
            [['slist_desc'], 'string'],
            [['slist_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'slist_id' => 'Slist ID',
            'slist_name' => 'Slist Name',
            'slist_desc' => 'Slist Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceList()
    {
        return $this->hasOne(PriceList::className(), ['plist_id' => 'slist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirements()
    {
        return $this->hasMany(Requirements::className(), ['slist_id' => 'slist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['slist_id' => 'slist_id']);
    }
}
