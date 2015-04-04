<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\alumni;

/**
 * alumniSearch represents the model behind the search form about `backend\models\alumni`.
 */
class alumniSearch extends alumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'alumni_school_contact_num', 'alumni_father_contact_num', 'alumni_mother_contact_num', 'alumni_num_siblings', 'alumni_num_children'], 'integer'],
            [['alumni_lname', 'alumni_fname', 'alumni_mname', 'alumni_gender', 'alumni_birthdate', 'alumni_nationality', 'alumni_occupation', 'alumni_marital_stat', 'alumni_address', 'alumni_mobile', 'alumni_landline', 'alumni_email', 'alumni_school_graduated_from', 'alumni_school_year_graduated', 'alumni_school_address', 'alumni_photo', 'alumni_father_name', 'alumni_father_address', 'alumni_father_occupation', 'alumni_mother_name', 'alumni_mother_address', 'alumni_mother_occupation', 'alumni_spouse'], 'safe'],
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
        $query = alumni::find();

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
            'alumni_school_contact_num' => $this->alumni_school_contact_num,
            'alumni_father_contact_num' => $this->alumni_father_contact_num,
            'alumni_mother_contact_num' => $this->alumni_mother_contact_num,
            'alumni_num_siblings' => $this->alumni_num_siblings,
            'alumni_num_children' => $this->alumni_num_children,
        ]);

        $query->andFilterWhere(['like', 'alumni_lname', $this->alumni_lname])
            ->andFilterWhere(['like', 'alumni_fname', $this->alumni_fname])
            ->andFilterWhere(['like', 'alumni_mname', $this->alumni_mname])
            ->andFilterWhere(['like', 'alumni_gender', $this->alumni_gender])
            ->andFilterWhere(['like', 'alumni_nationality', $this->alumni_nationality])
            ->andFilterWhere(['like', 'alumni_occupation', $this->alumni_occupation])
            ->andFilterWhere(['like', 'alumni_marital_stat', $this->alumni_marital_stat])
            ->andFilterWhere(['like', 'alumni_address', $this->alumni_address])
            ->andFilterWhere(['like', 'alumni_mobile', $this->alumni_mobile])
            ->andFilterWhere(['like', 'alumni_landline', $this->alumni_landline])
            ->andFilterWhere(['like', 'alumni_email', $this->alumni_email])
            ->andFilterWhere(['like', 'alumni_school_graduated_from', $this->alumni_school_graduated_from])
            ->andFilterWhere(['like', 'alumni_school_year_graduated', $this->alumni_school_year_graduated])
            ->andFilterWhere(['like', 'alumni_school_address', $this->alumni_school_address])
            ->andFilterWhere(['like', 'alumni_photo', $this->alumni_photo])
            ->andFilterWhere(['like', 'alumni_father_name', $this->alumni_father_name])
            ->andFilterWhere(['like', 'alumni_father_address', $this->alumni_father_address])
            ->andFilterWhere(['like', 'alumni_father_occupation', $this->alumni_father_occupation])
            ->andFilterWhere(['like', 'alumni_mother_name', $this->alumni_mother_name])
            ->andFilterWhere(['like', 'alumni_mother_address', $this->alumni_mother_address])
            ->andFilterWhere(['like', 'alumni_mother_occupation', $this->alumni_mother_occupation])
            ->andFilterWhere(['like', 'alumni_spouse', $this->alumni_spouse]);

        return $dataProvider;
    }
}
