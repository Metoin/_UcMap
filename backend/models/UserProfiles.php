<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%metoin_user_profiles}}".
 *
 * @property string $user_id
 * @property string $signiture
 * @property int $country
 * @property int $province
 * @property string $city
 * @property string $area
 * @property string $town
 * @property string $village
 * @property string $address
 * @property string $occupation
 */
class UserProfiles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%metoin_user_profiles}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'country', 'province', 'city', 'area', 'town', 'village'], 'integer'],
            [['signiture'], 'string', 'max' => 250],
            [['address'], 'string', 'max' => 100],
            [['occupation'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'signiture' => 'Signiture',
            'country' => 'Country',
            'province' => 'Province',
            'city' => 'City',
            'area' => 'Area',
            'town' => 'Town',
            'village' => 'Village',
            'address' => 'Address',
            'occupation' => 'Occupation',
        ];
    }
}
