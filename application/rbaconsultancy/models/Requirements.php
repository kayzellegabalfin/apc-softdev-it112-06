<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requirements".
 *
 * @property string $req_id
 * @property integer $user_id
 * @property integer $slist_id
 * @property integer $rlist_id
 * @property string $req_status
 * @property string $req_fileuploaded
 * @property string $req_datefileuploaded
 *
 * @property User $user
 * @property ServiceList $slist
 * @property RequirementsList $rlist
 */
class Requirements extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requirements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['req_id', 'user_id', 'slist_id', 'rlist_id'], 'required'],
            [['user_id', 'slist_id', 'rlist_id'], 'integer'],
            [['req_datefileuploaded'], 'safe'],
            [['req_id'], 'string', 'max' => 8],
            [['req_status'], 'string', 'max' => 25],
            [['req_fileuploaded'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'req_id' => 'Req ID',
            'user_id' => 'User ID',
            'slist_id' => 'Slist ID',
            'rlist_id' => 'Rlist ID',
            'req_status' => 'Req Status',
            'req_fileuploaded' => 'Req Fileuploaded',
            'req_datefileuploaded' => 'Req Datefileuploaded',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
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
}
