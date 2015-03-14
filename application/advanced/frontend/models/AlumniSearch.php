<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Alumni;

/**
 * AlumniSearch represents the model behind the search form about `frontend\models\Alumni`.
 */
class AlumniSearch extends Alumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_gender', 'alumni_birthdate', 'alumni_marital_stat', 'alumni_address', 'alumni_mobile', 'alumni_landline', 'alumni_email', 'alumni_photo'], 'safe'],
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
        $query = Alumni::find();

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
            'alumni_birthdate' => $this->alumni_birthdate,
        ]);

        $query->andFilterWhere(['like', 'alumni_lname', $this->alumni_lname])
            ->andFilterWhere(['like', 'alumni_fname', $this->alumni_fname])
            ->andFilterWhere(['like', 'alumni_mname', $this->alumni_mname])
            ->andFilterWhere(['like', 'alumni_gender', $this->alumni_gender])
            ->andFilterWhere(['like', 'alumni_marital_stat', $this->alumni_marital_stat])
            ->andFilterWhere(['like', 'alumni_address', $this->alumni_address])
            ->andFilterWhere(['like', 'alumni_mobile', $this->alumni_mobile])
            ->andFilterWhere(['like', 'alumni_landline', $this->alumni_landline])
            ->andFilterWhere(['like', 'alumni_email', $this->alumni_email])
            ->andFilterWhere(['like', 'alumni_photo', $this->alumni_photo]);

        return $dataProvider;
    }
}
