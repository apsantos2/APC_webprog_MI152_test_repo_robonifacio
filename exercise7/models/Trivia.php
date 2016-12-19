<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trivia".
 *
 * @property integer $ID
 * @property string $QUESTION
 * @property string $ANSWER
 */
class Trivia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trivia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['QUESTION', 'ANSWER'], 'required'],
            [['QUESTION', 'ANSWER'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'QUESTION' => 'Question',
            'ANSWER' => 'Answer',
        ];
    }
}
