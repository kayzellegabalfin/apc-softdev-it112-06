<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserMain;

/**
 * UserMainSearch represents the model behind the search form about `common\models\UserMain`.
 */
class UserMainSearch extends UserMain
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'user_postalcode', 'user_age'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'user_lastname', 'user_firstname', 'user_midname', 'user_housenum', 'user_street', 'user_city', 'user_country', 'user_gender', 'user_companyname', 'user_companyadd', 'user_companycontact', 'user_birthdate', 'user_type'], 'safe'],
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
        $query = UserMain::find();

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
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_postalcode' => $this->user_postalcode,
            'user_birthdate' => $this->user_birthdate,
            'user_age' => $this->user_age,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'user_lastname', $this->user_lastname])
            ->andFilterWhere(['like', 'user_firstname', $this->user_firstname])
            ->andFilterWhere(['like', 'user_midname', $this->user_midname])
            ->andFilterWhere(['like', 'user_housenum', $this->user_housenum])
            ->andFilterWhere(['like', 'user_street', $this->user_street])
            ->andFilterWhere(['like', 'user_city', $this->user_city])
            ->andFilterWhere(['like', 'user_country', $this->user_country])
            ->andFilterWhere(['like', 'user_gender', $this->user_gender])
            ->andFilterWhere(['like', 'user_companyname', $this->user_companyname])
            ->andFilterWhere(['like', 'user_companyadd', $this->user_companyadd])
            ->andFilterWhere(['like', 'user_companycontact', $this->user_companycontact])
            ->andFilterWhere(['like', 'user_type', $this->user_type]);

        return $dataProvider;
    }
}
