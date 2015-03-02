<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RequirementsList;

/**
 * RequirementsListSearch represents the model behind the search form about `app\models\RequirementsList`.
 */
class RequirementsListSearch extends RequirementsList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rlist_id'], 'integer'],
            [['rlist_name', 'rlist_desc'], 'safe'],
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
        $query = RequirementsList::find();

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
            'rlist_id' => $this->rlist_id,
        ]);

        $query->andFilterWhere(['like', 'rlist_name', $this->rlist_name])
            ->andFilterWhere(['like', 'rlist_desc', $this->rlist_desc]);

        return $dataProvider;
    }
}
