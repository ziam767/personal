<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Offices;

/**
 * OfficesSearch represents the model behind the search form about `backend\models\Offices`.
 */
class OfficesSearch extends Offices
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['office_id', 'department_id'], 'integer'],
            [['office_name', 'office_name_en', 'office_address', 'office_position', 'office_tel', 'office_fax', 'office_email', 'office_logo', 'office_status', 'office_updated', 'office_created'], 'safe'],
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
        $query = Offices::find();

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
            'office_id' => $this->office_id,
            'department_id' => $this->department_id,
            'office_updated' => $this->office_updated,
            'office_created' => $this->office_created,
        ]);

        $query->andFilterWhere(['like', 'office_name', $this->office_name])
            ->andFilterWhere(['like', 'office_name_en', $this->office_name_en])
            ->andFilterWhere(['like', 'office_address', $this->office_address])
            ->andFilterWhere(['like', 'office_position', $this->office_position])
            ->andFilterWhere(['like', 'office_tel', $this->office_tel])
            ->andFilterWhere(['like', 'office_fax', $this->office_fax])
            ->andFilterWhere(['like', 'office_email', $this->office_email])
            ->andFilterWhere(['like', 'office_logo', $this->office_logo])
            ->andFilterWhere(['like', 'office_status', $this->office_status]);

        return $dataProvider;
    }
}
