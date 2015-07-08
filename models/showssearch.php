<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shows;

/**
 * showssearch represents the model behind the search form about `app\models\shows`.
 */
class showssearch extends shows
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'number', 'start_time', 'final_hour', 'number_of_tickets'], 'integer'],
            [['name', 'local', 'date', 'address', 'neighborhood', 'city', 'state', 'valor', 'type_of_tickets'], 'safe'],
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
        $query = shows::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'number' => $this->number,
            'start_time' => $this->start_time,
            'final_hour' => $this->final_hour,
            'number_of_tickets' => $this->number_of_tickets,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'local', $this->local])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'neighborhood', $this->neighborhood])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'valor', $this->valor])
            ->andFilterWhere(['like', 'type_of_tickets', $this->type_of_tickets]);

        return $dataProvider;
    }
}
