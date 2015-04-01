<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\mission;

/**
 * missionSearch represents the model behind the search form about `backend\models\mission`.
 */
class missionSearch extends mission
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['mission_name', 'mission_desc', 'mission_num_of_volunteer_needed', 'mission_location', 'mission_contact_person_fname', 'mission_contact_person_lname', 'mission_contact_num', 'mission_email_address'], 'safe'],
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
        $query = mission::find();

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
        ]);

        $query->andFilterWhere(['like', 'mission_name', $this->mission_name])
            ->andFilterWhere(['like', 'mission_desc', $this->mission_desc])
            ->andFilterWhere(['like', 'mission_num_of_volunteer_needed', $this->mission_num_of_volunteer_needed])
            ->andFilterWhere(['like', 'mission_location', $this->mission_location])
            ->andFilterWhere(['like', 'mission_contact_person_fname', $this->mission_contact_person_fname])
            ->andFilterWhere(['like', 'mission_contact_person_lname', $this->mission_contact_person_lname])
            ->andFilterWhere(['like', 'mission_contact_num', $this->mission_contact_num])
            ->andFilterWhere(['like', 'mission_email_address', $this->mission_email_address]);

        return $dataProvider;
    }
}
