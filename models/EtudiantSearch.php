<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Etudiant;

/**
 * EtudiantSearch represents the model behind the search form of `app\models\Etudiant`.
 */
class EtudiantSearch extends Etudiant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['immatriculation'], 'integer'],
            [['nom_etud', 'prenom_etud', 'tel_etud', 'address_etud', 'classe_etud'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Etudiant::find();

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
            'immatriculation' => $this->immatriculation,
        ]);

        $query->andFilterWhere(['like', 'nom_etud', $this->nom_etud])
            ->andFilterWhere(['like', 'prenom_etud', $this->prenom_etud])
            ->andFilterWhere(['like', 'tel_etud', $this->tel_etud])
            ->andFilterWhere(['like', 'address_etud', $this->address_etud])
            ->andFilterWhere(['like', 'classe_etud', $this->classe_etud]);

        return $dataProvider;
    }
}
