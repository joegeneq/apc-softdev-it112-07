<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\batch;

/**
 * batchSearch represents the model behind the search form about `backend\models\batch`.
 */
class batchSearch extends batch
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['batch_code', 'batch_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = batch::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'batch_date' => $this->batch_date,
        ]);

        $query->andFilterWhere(['like', 'batch_code', $this->batch_code]);

        return $dataProvider;
    }
}
