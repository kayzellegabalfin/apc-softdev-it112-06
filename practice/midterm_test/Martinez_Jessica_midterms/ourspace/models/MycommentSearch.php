<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\mycomment;

/**
 * MycommentSearch represents the model behind the search form about `app\models\mycomment`.
 */
class MycommentSearch extends mycomment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['author','myaddress_id', 'body', 'created_at'], 'safe'],
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
        $query = mycomment::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
		
		$query->joinWith('myaddress');
			
        $query->andFilterWhere([
            'id' => $this->id,
            //'myaddress_id' => $this->myaddress_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'body', $this->body])
			->andFilterWhere(['like', 'myaddress.lastname', $this->myaddress_id]);

        return $dataProvider;
    }
}
