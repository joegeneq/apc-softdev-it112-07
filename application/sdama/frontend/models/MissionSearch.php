<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Mission;

/**
 * MissionSearch represents the model behind the search form about `frontend\models\Mission`.
 */
class MissionSearch extends Mission
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mission_name', 'mission_desc', 'mission_num_of_volunteer_needed', 'mission_location', 'mission_contact_person_lname', 'mission_contact_person_fname', 'mission_contact_num', 'mission_email_address'], 'integer'],
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
        $query = Mission::find();

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
            'mission_name' => $this->mission_name,
            'mission_desc' => $this->mission_desc,
            'mission_num_of_volunteer_needed' => $this->mission_num_of_volunteer_needed,
            'mission_location' => $this->mission_location,
            'mission_contact_person_lname' => $this->mission_contact_person_lname,
            'mission_contact_person_fname' => $this->mission_contact_person_fname,
            'mission_contact_num' => $this->mission_contact_num,
            'mission_email_address' => $this->mission_email_address,
        ]);

        return $dataProvider;
    }
}
