<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Solution;

/**
 * SolutionSearch represents the model behind the search form of `app\models\Solution`.
 */
class SolutionSearch extends Solution
{
    public $name_category;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_solution', 'id_category'], 'integer'],
            [['solution_question', 'solution_answer', 'name_category'], 'safe'],
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
        $query = Solution::find();

        // add conditions that should always apply here

        $query->joinWith('category');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>[
                'defaultOrder' => ['id_solution' => SORT_ASC],
                'attributes' => [
                    'id_solution',
                    'solution_question',
                    'name_category' => [
                        'asc' => ['category.name_category' => SORT_ASC],
						'desc' => ['category.name_category' => SORT_DESC],
                    ],
                ],
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_solution' => $this->id_solution,
            'id_category' => $this->id_category,
        ]);

        $query->andFilterWhere(['like', 'solution_question', $this->solution_question])
            ->andFilterWhere(['like', 'category.name_category', $this->name_category])
            ->andFilterWhere(['like', 'solution_answer', $this->solution_answer]);

        return $dataProvider;
    }
}
