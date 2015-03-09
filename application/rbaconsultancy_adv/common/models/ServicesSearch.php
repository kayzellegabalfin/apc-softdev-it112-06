<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Services;

/**
 * ServicesSearch represents the model behind the search form about `common\models\Services`.
 */
class ServicesSearch extends Services
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_id', 'slist_id'], 'integer'],
            [['user_id', 'service_dateapplied', 'service_status'], 'safe'],
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
        $query = Services::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('user', 'servicelist');

        $query->andFilterWhere([
            'service_id' => $this->service_id,
            //'user_id' => $this->user_id,
            //'slist_id' => $this->slist_id,
            'service_dateapplied' => $this->service_dateapplied,
        ]);

        $query->andFilterWhere(['like', 'service_status', $this->service_status])
                ->andFilterWhere(['like', 'user.username', $this->user_id])
                ->andFilterWhere(['like', 'servicelist.slist_name', $this->slist_id]);

        return $dataProvider;
    }
}
