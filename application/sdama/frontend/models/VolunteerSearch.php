<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Volunteer;

/**
 * VolunteerSearch represents the model behind the search form about `frontend\models\Volunteer`.
 */
class VolunteerSearch extends Volunteer
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['volunteer_status', 'volunteer_code', 'volunteer_fname', 'volunteer_lname', 'volunteer_mname', 'volunteer_bdate', 'volunteer_age', 'volunteer_school_graduated', 'volunteer_year_graduated', 'volunteer_address', 'volunteer_contact_num', 'volunteer_start_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Volunteer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'volunteer_status', $this->volunteer_status])
            ->andFilterWhere(['like', 'volunteer_code', $this->volunteer_code])
            ->andFilterWhere(['like', 'volunteer_fname', $this->volunteer_fname])
            ->andFilterWhere(['like', 'volunteer_lname', $this->volunteer_lname])
            ->andFilterWhere(['like', 'volunteer_mname', $this->volunteer_mname])
            ->andFilterWhere(['like', 'volunteer_bdate', $this->volunteer_bdate])
            ->andFilterWhere(['like', 'volunteer_age', $this->volunteer_age])
            ->andFilterWhere(['like', 'volunteer_school_graduated', $this->volunteer_school_graduated])
            ->andFilterWhere(['like', 'volunteer_year_graduated', $this->volunteer_year_graduated])
            ->andFilterWhere(['like', 'volunteer_address', $this->volunteer_address])
            ->andFilterWhere(['like', 'volunteer_contact_num', $this->volunteer_contact_num])
            ->andFilterWhere(['like', 'volunteer_start_date', $this->volunteer_start_date]);

        return $dataProvider;
    }
}
