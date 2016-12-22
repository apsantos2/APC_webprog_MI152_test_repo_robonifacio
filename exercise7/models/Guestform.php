<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guestform".
 *
 * @property integer $user_id
 * @property string $complete_name
 * @property string $nickname
 * @property string $Email_Address
 * @property string $Home_Address
 * @property string $gender
 * @property string $cellphone
 * @property string $comment
 */
class Guestform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guestform';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['complete_name', 'Email_Address', 'Home_Address'], 'string', 'max' => 255, ],
			[['complete_name', 'Email_Address', 'Home_Address','nickname','gender','cellphone','comment'], 'required'],
            [['nickname'], 'string', 'max' => 45],
            [['gender'], 'string', 'max' => 6],
            [['cellphone'], 'string', 'max' => 11],
			[['Email_Address'], 'email'],
            [['comment'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'complete_name' => 'Complete Name',
            'nickname' => 'Nickname',
            'Email_Address' => 'Email  Address',
            'Home_Address' => 'Home  Address',
            'gender' => 'Gender',
            'cellphone' => 'Cellphone',
            'comment' => 'Comment',
        ];
    }
}
