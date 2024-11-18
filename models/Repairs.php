<?php

namespace app\models;

use yii\db\ActiveRecord;

class Repairs extends ActiveRecord
{

    public static function tableName()
    {
        return 'repairs';
    }

}