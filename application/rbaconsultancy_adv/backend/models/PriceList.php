<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "price_list".
 *
 * @property integer $plist_id
 * @property string $plist_name
 * @property double $plist_price
 * @property string $plist_dateadded
 * @property integer $slist_id
 *
 * @property ServiceList $slist
 */
class PriceList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plist_id', 'plist_name', 'plist_price', 'slist_id'], 'required'],
            [['plist_id', 'slist_id'], 'integer'],
            [['plist_price'], 'number'],
            [['plist_dateadded'], 'safe'],
            [['plist_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'plist_id' => 'Plist ID',
            'plist_name' => 'Plist Name',
            'plist_price' => 'Plist Price',
            'plist_dateadded' => 'Plist Dateadded',
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
}
