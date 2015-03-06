<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Batch;

/**
 * BatchSearch represents the model behind the search form about `frontend\models\Batch`.
 */
class BatchSearch extends Batch
{
    public function rules()
    {
        return [
            [['id', 'batch_code'], 'integer'],
            [['batch_year'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Batch::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'batch_code' => $this->batch_code,
            'batch_year' => $this->batch_year,
        ]);

        return $dataProvider;
    }
}
