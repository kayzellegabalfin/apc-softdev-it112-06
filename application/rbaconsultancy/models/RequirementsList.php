<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requirements_list".
 *
 * @property integer $rlist_id
 * @property string $rlist_name
 * @property string $rlist_desc
 *
 * @property Requirements[] $requirements
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
            [['rlist_name'], 'required'],
            [['rlist_desc'], 'string'],
            [['rlist_name'], 'string', 'max' => 50]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirements()
    {
        return $this->hasMany(Requirements::className(), ['rlist_id' => 'rlist_id']);
    }
}
