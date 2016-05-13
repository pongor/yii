<?php

namespace app\backend\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\backend\models\Institute;

/**
 * InstituteSearch represents the model behind the search form about `app\backend\models\Institute`.
 */
class InstituteSearch extends Institute
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'country_id', 'buildyear', 'buildmonth', 'city_id', 'rank'], 'integer'],
            [['name_en', 'name_zh', 'address_en', 'address_zh', 'website', 'league_en', 'league_zh', 'brief_en', 'brief_zh', 'livingcost', 'tuition', 'compus_surrounding', 'compus_living', 'scholarship', 'history_en', 'history_zh'], 'safe'],
            [['accept_rate', 'employment_rate', 'total_enrollment', 'graduation_rate'], 'number'],
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
        $query = Institute::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'country_id' => $this->country_id,
            'buildyear' => $this->buildyear,
            'buildmonth' => $this->buildmonth,
            'accept_rate' => $this->accept_rate,
            'employment_rate' => $this->employment_rate,
            'total_enrollment' => $this->total_enrollment,
            'city_id' => $this->city_id,
            'rank' => $this->rank,
            'graduation_rate' => $this->graduation_rate,
        ]);

        $query->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_zh', $this->name_zh])
            ->andFilterWhere(['like', 'address_en', $this->address_en])
            ->andFilterWhere(['like', 'address_zh', $this->address_zh])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'league_en', $this->league_en])
            ->andFilterWhere(['like', 'league_zh', $this->league_zh])
            ->andFilterWhere(['like', 'brief_en', $this->brief_en])
            ->andFilterWhere(['like', 'brief_zh', $this->brief_zh])
            ->andFilterWhere(['like', 'livingcost', $this->livingcost])
            ->andFilterWhere(['like', 'tuition', $this->tuition])
            ->andFilterWhere(['like', 'compus_surrounding', $this->compus_surrounding])
            ->andFilterWhere(['like', 'compus_living', $this->compus_living])
            ->andFilterWhere(['like', 'scholarship', $this->scholarship])
            ->andFilterWhere(['like', 'history_en', $this->history_en])
            ->andFilterWhere(['like', 'history_zh', $this->history_zh]);

        return $dataProvider;
    }
}
