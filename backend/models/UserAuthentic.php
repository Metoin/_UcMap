<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%metoin_user_authentic}}".
 *
 * @property string $user_id
 * @property string $name
 * @property string $card
 * @property int $is_check
 * @property string $pic
 * @property string $ctime
 * @property int $status
 */
class UserAuthentic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%metoin_user_authentic}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'is_check', 'ctime', 'status'], 'integer'],
            [['name', 'card'], 'string', 'max' => 18],
            [['pic'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'name' => 'Name',
            'card' => 'Card',
            'is_check' => 'Is Check',
            'pic' => 'Pic',
            'ctime' => 'Ctime',
            'status' => 'Status',
        ];
    }
}
