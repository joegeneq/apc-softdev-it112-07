<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Alumni;

/**
 * AlumniSearch represents the model behind the search form about `backend\models\Alumni`.
 */
class AlumniSearch extends Alumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'admin_id', 'volunteer_id'], 'integer'],
            [['alumni_code', 'alumni_fname', 'alumni_lname', 'alumni_mname', 'alumn_bdate', 'alumni_age', 'alumni_school_graduated', 'alumni_year_graduated', 'alumni_address', 'alumni_contact_num', 'alumni_reg_date', 'alumni_occupation', 'alumni_company_name', 'alumni_company_contact_num', 'alumni_company_address'], 'safe'],
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
            'admin_id' => $this->admin_id,
            'volunteer_id' => $this->volunteer_id,
        ]);

        $query->andFilterWhere(['like', 'alumni_code', $this->alumni_code])
            ->andFilterWhere(['like', 'alumni_fname', $this->alumni_fname])
            ->andFilterWhere(['like', 'alumni_lname', $this->alumni_lname])
            ->andFilterWhere(['like', 'alumni_mname', $this->alumni_mname])
            ->andFilterWhere(['like', 'alumn_bdate', $this->alumn_bdate])
            ->andFilterWhere(['like', 'alumni_age', $this->alumni_age])
            ->andFilterWhere(['like', 'alumni_school_graduated', $this->alumni_school_graduated])
            ->andFilterWhere(['like', 'alumni_year_graduated', $this->alumni_year_graduated])
            ->andFilterWhere(['like', 'alumni_address', $this->alumni_address])
            ->andFilterWhere(['like', 'alumni_contact_num', $this->alumni_contact_num])
            ->andFilterWhere(['like', 'alumni_reg_date', $this->alumni_reg_date])
            ->andFilterWhere(['like', 'alumni_occupation', $this->alumni_occupation])
            ->andFilterWhere(['like', 'alumni_company_name', $this->alumni_company_name])
            ->andFilterWhere(['like', 'alumni_company_contact_num', $this->alumni_company_contact_num])
            ->andFilterWhere(['like', 'alumni_company_address', $this->alumni_company_address]);

        return $dataProvider;
    }
}
