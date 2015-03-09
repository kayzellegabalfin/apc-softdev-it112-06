<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RequirementsPerUser;

/**
 * RequirementsPerUserSearch represents the model behind the search form about `common\models\RequirementsPerUser`.
 */
class RequirementsPerUserSearch extends RequirementsPerUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rpu_id', 'rlist_id', 'user_id'], 'integer'],
            [['rpu_status', 'rpu_datefilesubmitted', 'rpu_fileuploaded'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RequirementsPerUser::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'rpu_id' => $this->rpu_id,
            'rpu_datefilesubmitted' => $this->rpu_datefilesubmitted,
            'rlist_id' => $this->rlist_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'rpu_status', $this->rpu_status])
            ->andFilterWhere(['like', 'rpu_fileuploaded', $this->rpu_fileuploaded]);

        return $dataProvider;
    }
}
