<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pricelist;

/**
 * PricelistSearch represents the model behind the search form about `common\models\Pricelist`.
 */
class PricelistSearch extends Pricelist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plist_id', 'slist_id'], 'integer'],
            [['plist_name', 'plist_dateadded'], 'safe'],
            [['plist_price'], 'number'],
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
        $query = Pricelist::find();

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
            'plist_id' => $this->plist_id,
            'plist_price' => $this->plist_price,
            'plist_dateadded' => $this->plist_dateadded,
            'slist_id' => $this->slist_id,
        ]);

        $query->andFilterWhere(['like', 'plist_name', $this->plist_name]);

        return $dataProvider;
    }
}
