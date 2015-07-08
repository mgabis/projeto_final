<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shows".
 *
 * @property integer $id
 * @property string $name
 * @property string $local
 * @property string $date
 * @property string $address
 * @property integer $number
 * @property string $neighborhood
 * @property string $city
 * @property string $state
 * @property integer $start_time
 * @property integer $final_hour
 * @property integer $number_of_tickets
 * @property string $valor
 * @property string $type_of_tickets
 */
class Shows extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shows';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'local', 'date', 'address', 'number', 'neighborhood', 'city', 'state', 'start_time', 'final_hour', 'number_of_tickets', 'valor', 'type_of_tickets'], 'required'],
            [['date'], 'safe'],
            [['number', 'start_time', 'final_hour', 'number_of_tickets'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['local', 'address'], 'string', 'max' => 60],
            [['neighborhood', 'city', 'state', 'valor'], 'string', 'max' => 45],
            [['type_of_tickets'], 'string', 'max' => 15]
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
            'local' => 'Local',
            'date' => 'Date',
            'address' => 'Address',
            'number' => 'Number',
            'neighborhood' => 'Neighborhood',
            'city' => 'City',
            'state' => 'State',
            'start_time' => 'Start Time',
            'final_hour' => 'Final Hour',
            'number_of_tickets' => 'Number Of Tickets',
            'valor' => 'Valor',
            'type_of_tickets' => 'Type Of Tickets',
        ];
    }
}
