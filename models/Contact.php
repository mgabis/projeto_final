<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $nome
 * @property string $e-mail
 * @property integer $phone
 * @property string $message
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'e-mail', 'phone', 'message'], 'required'],
            [['phone'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['e-mail'], 'string', 'max' => 45],
            [['message'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'e-mail' => 'E Mail',
            'phone' => 'Phone',
            'message' => 'Message',
        ];
    }
}
