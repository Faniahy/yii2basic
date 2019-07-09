<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Etudiant".
 *
 * @property int $immatriculation
 * @property string $nom_etud
 * @property string $prenom_etud
 * @property string $tel_etud
 * @property string $address_etud
 * @property string $classe_etud
 */
class Etudiant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Etudiant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['immatriculation', 'nom_etud', 'prenom_etud', 'tel_etud', 'address_etud', 'classe_etud'], 'required'],
            [['immatriculation'], 'integer'],
            [['nom_etud', 'prenom_etud', 'address_etud'], 'string', 'max' => 25],
            [['tel_etud'], 'string', 'max' => 15],
            [['classe_etud'], 'string', 'max' => 50],
            [['immatriculation'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'immatriculation' => 'Immatriculation',
            'nom_etud' => 'Nom Etud',
            'prenom_etud' => 'Prenom Etud',
            'tel_etud' => 'Tel Etud',
            'address_etud' => 'Address Etud',
            'classe_etud' => 'Classe Etud',
        ];
    }
}
