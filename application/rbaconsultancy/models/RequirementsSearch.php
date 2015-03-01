<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\requirements;

/**
 * RequirementsSearch represents the model behind the search form about `app\models\requirements`.
 */
class RequirementsSearch extends requirements
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['req_id', 'req_status', 'req_fileuploaded', 'req_datefileuploaded'], 'safe'],
            [['user_id', 'slist_id', 'rlist_id'], 'integer'],
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
        $query = requirements::find();

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
            'user_id' => $this->user_id,
            'slist_id' => $this->slist_id,
            'rlist_id' => $this->rlist_id,
            'req_datefileuploaded' => $this->req_datefileuploaded,
        ]);

        $query->andFilterWhere(['like', 'req_id', $this->req_id])
            ->andFilterWhere(['like', 'req_status', $this->req_status])
            ->andFilterWhere(['like', 'req_fileuploaded', $this->req_fileuploaded]);

        return $dataProvider;
    }
}
