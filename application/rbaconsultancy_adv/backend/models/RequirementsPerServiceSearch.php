<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RequirementsPerService;

/**
 * RequirementsPerServiceSearch represents the model behind the search form about `backend\models\RequirementsPerService`.
 */
class RequirementsPerServiceSearch extends RequirementsPerService
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rps_id', 'slist_id', 'rlist_id'], 'integer'],
            [['rps_name'], 'safe'],
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
        $query = RequirementsPerService::find();

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
            'rps_id' => $this->rps_id,
            'slist_id' => $this->slist_id,
            'rlist_id' => $this->rlist_id,
        ]);

        $query->andFilterWhere(['like', 'rps_name', $this->rps_name]);

        return $dataProvider;
    }
}
