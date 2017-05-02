<?php

namespace frontend\modules;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\AltFront;

/**
 * AltFrontSearch represents the model behind the search form about `frontend\modules\AltFront`.
 */
class AltFrontSearch extends AltFront
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alt_frontID'], 'integer'],
            [['alt_frontTitle', 'alt_fronmtBody', 'alt_frontimg'], 'safe'],
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
        $query = AltFront::find();

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
            'alt_frontID' => $this->alt_frontID,
        ]);

        $query->andFilterWhere(['like', 'alt_frontTitle', $this->alt_frontTitle])
            ->andFilterWhere(['like', 'alt_fronmtBody', $this->alt_fronmtBody])
            ->andFilterWhere(['like', 'alt_frontimg', $this->alt_frontimg]);

        return $dataProvider;
    }
}
