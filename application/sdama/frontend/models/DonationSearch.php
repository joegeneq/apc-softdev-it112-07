<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Donation;

/**
 * DonationSearch represents the model behind the search form about `frontend\models\Donation`.
 */
class DonationSearch extends Donation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'donation_type', 'donation_status'], 'integer'],
            [['donation_date'], 'safe'],
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
        $query = Donation::find();

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
            'donation_type' => $this->donation_type,
            'donation_status' => $this->donation_status,
            'donation_date' => $this->donation_date,
        ]);

        return $dataProvider;
    }
}
