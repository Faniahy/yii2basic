<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "backend_user".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $userName
 * @property string $password
 * @property string $authKey
 */
class BackendUser extends \yii\db\ActiveRecord  implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'backend_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'userName', 'password', 'authKey'], 'required'],
            [['firstName'], 'string', 'max' => 15],
            [['lastName'], 'string', 'max' => 20],
            [['userName', 'password'], 'string', 'max' => 30],
            [['authKey'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'userName' => 'User Name',
            'password' => 'Password',
            'authKey' => 'Auth Key',
        ];
    }

    public function getAuthKey(){
        return $this->authKey;
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authKey){
        return $this->authKey === $authKey;
    }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
        throw new \yii\base\NotSupportedException();
    }
    public static function findByUsername($username){
        return self::findOne(['userName'=>$username]);
    }
    public function validatePassword($password){
        return $this->password === $password;
    }
}
