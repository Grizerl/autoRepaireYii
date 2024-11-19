<?php

namespace app\models;

use yii\db\ActiveRecord;

class Members extends ActiveRecord
{

    public static function tableName()
    {
        return 'members';
    }

}