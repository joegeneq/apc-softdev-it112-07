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
            [['id', 'alumni_id'], 'integer'],
            [['mission_location', 'mission_length', 'mission_start_date', 'mission_end_date', 'mission_status'], 'safe'],
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
            'mission_start_date' => $this->mission_start_date,
            'mission_end_date' => $this->mission_end_date,
            'alumni_id' => $this->alumni_id,
        ]);

        $query->andFilterWhere(['like', 'mission_location', $this->mission_location])
            ->andFilterWhere(['like', 'mission_length', $this->mission_length])
            ->andFilterWhere(['like', 'mission_status', $this->mission_status]);

        return $dataProvider;
    }
}
