<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TeacherReg;

/**
 * TeacherRegSearch represents the model behind the search form about `backend\models\TeacherReg`.
 */
class TeacherRegSearch extends TeacherReg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'prefered_location', 'other_university_country', 'cv', 'pic', 'vids', 'live'], 'integer'],
            [['type_of_position', 'core_subject', 'nationality', 'prefered_school_type', 'current_residence', 'univsersity_attended', 'other_university', 'first_name', 'last_name', 'email', 'skype', 'dob', 'phone', 'start_from', 'dbs'], 'safe'],
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
        $query = TeacherReg::find();

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
            'prefered_location' => $this->prefered_location,
            'other_university_country' => $this->other_university_country,
            'cv' => $this->cv,
            'pic' => $this->pic,
            'vids' => $this->vids,
            'live' => $this->live,
        ]);

        $query->andFilterWhere(['like', 'type_of_position', $this->type_of_position])
            ->andFilterWhere(['like', 'core_subject', $this->core_subject])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'prefered_school_type', $this->prefered_school_type])
            ->andFilterWhere(['like', 'current_residence', $this->current_residence])
            ->andFilterWhere(['like', 'univsersity_attended', $this->univsersity_attended])
            ->andFilterWhere(['like', 'other_university', $this->other_university])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'start_from', $this->start_from])
            ->andFilterWhere(['like', 'dbs', $this->dbs]);

        return $dataProvider;
    }
}
