<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_postalcode', 'user_age'], 'integer'],
            [['user_email', 'user_password', 'user_lname', 'user_fname', 'user_mname', 'user_housenum', 'user_street', 'user_city', 'user_country', 'user_gender', 'user_contact', 'user_company', 'user_birthdate', 'user_type'], 'safe'],
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
        $query = User::find();

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
            'user_postalcode' => $this->user_postalcode,
            'user_birthdate' => $this->user_birthdate,
            'user_age' => $this->user_age,
        ]);

        $query->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'user_password', $this->user_password])
            ->andFilterWhere(['like', 'user_lname', $this->user_lname])
            ->andFilterWhere(['like', 'user_fname', $this->user_fname])
            ->andFilterWhere(['like', 'user_mname', $this->user_mname])
            ->andFilterWhere(['like', 'user_housenum', $this->user_housenum])
            ->andFilterWhere(['like', 'user_street', $this->user_street])
            ->andFilterWhere(['like', 'user_city', $this->user_city])
            ->andFilterWhere(['like', 'user_country', $this->user_country])
            ->andFilterWhere(['like', 'user_gender', $this->user_gender])
            ->andFilterWhere(['like', 'user_contact', $this->user_contact])
            ->andFilterWhere(['like', 'user_company', $this->user_company])
            ->andFilterWhere(['like', 'user_type', $this->user_type]);

        return $dataProvider;
    }
}
