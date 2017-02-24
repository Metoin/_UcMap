<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%metoin_user}}".
 *
 * @property string $user_id
 * @property int $type
 * @property string $nick
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $salt
 * @property string $first_nick
 * @property int $sex
 * @property string $birthday
 * @property int $city
 * @property string $avatar
 * @property int $is_init
 * @property int $is_activate
 * @property int $is_real
 * @property string $ctime
 * @property string $cip
 * @property string $last_time
 * @property string $last_ip
 * @property int $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%metoin_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'sex', 'city', 'is_init', 'is_activate', 'is_real', 'ctime', 'last_time', 'status'], 'integer'],
            [['birthday'], 'safe'],
            [['nick', 'email'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 16],
            [['password'], 'string', 'max' => 32],
            [['salt'], 'string', 'max' => 6],
            [['first_nick'], 'string', 'max' => 1],
            [['avatar', 'cip', 'last_ip'], 'string', 'max' => 20],
            [['phone', 'email'], 'unique', 'targetAttribute' => ['phone', 'email']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'type' => 'Type',
            'nick' => 'Nick',
            'phone' => 'Phone',
            'email' => 'Email',
            'password' => 'Password',
            'salt' => 'Salt',
            'first_nick' => 'First Nick',
            'sex' => 'Sex',
            'birthday' => 'Birthday',
            'city' => 'City',
            'avatar' => 'Avatar',
            'is_init' => 'Is Init',
            'is_activate' => 'Is Activate',
            'is_real' => 'Is Real',
            'ctime' => 'Ctime',
            'cip' => 'Cip',
            'last_time' => 'Last Time',
            'last_ip' => 'Last Ip',
            'status' => 'Status',
        ];
    }
}
