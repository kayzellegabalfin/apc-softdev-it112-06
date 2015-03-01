<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ServiceList;

/**
 * ServicelistSearch represents the model behind the search form about `app\models\ServiceList`.
 */
class ServicelistSearch extends ServiceList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slist_id'], 'integer'],
            [['slist_name', 'slist_desc'], 'safe'],
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
        $query = ServiceList::find();

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
            'slist_id' => $this->slist_id,
        ]);

        $query->andFilterWhere(['like', 'slist_name', $this->slist_name])
            ->andFilterWhere(['like', 'slist_desc', $this->slist_desc]);

        return $dataProvider;
    }
}
