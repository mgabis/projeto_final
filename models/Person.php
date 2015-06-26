<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $id
 * @property string $name
 * @property integer $cpf
 * @property integer $rg
 * @property string $e-mail
 * @property integer $phone_1
 * @property integer $phone_2
 * @property string $address
 * @property integer $number
 * @property string $neighborhood
 * @property string $city
 * @property string $state
 * @property string $password
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'cpf', 'rg', 'e-mail', 'phone_1', 'phone_2', 'address', 'number', 'neighborhood', 'city', 'state', 'password'], 'required'],
            [['cpf', 'rg', 'phone_1', 'phone_2', 'number'], 'integer'],
            [['name', 'address'], 'string', 'max' => 60],
            [['e-mail'], 'string', 'max' => 50],
            [['neighborhood', 'city', 'state'], 'string', 'max' => 45],
            [['password'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cpf' => 'Cpf',
            'rg' => 'Rg',
            'e-mail' => 'E Mail',
            'phone_1' => 'Phone 1',
            'phone_2' => 'Phone 2',
            'address' => 'Address',
            'number' => 'Number',
            'neighborhood' => 'Neighborhood',
            'city' => 'City',
            'state' => 'State',
            'password' => 'Password',
        ];
    }
}
