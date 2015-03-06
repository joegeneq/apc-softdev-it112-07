<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Logs;

/**
 * LogsSearch represents the model behind the search form about `frontend\models\Logs`.
 */
class LogsSearch extends Logs
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['logs_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Logs::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'logs_date' => $this->logs_date,
        ]);

        return $dataProvider;
    }
}
