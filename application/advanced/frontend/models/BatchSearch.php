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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'batch_code'], 'integer'],
            [['batch_year'], 'safe'],
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
        $query = Batch::find();

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
            'batch_code' => $this->batch_code,
            'batch_year' => $this->batch_year,
        ]);

        return $dataProvider;
    }
}
