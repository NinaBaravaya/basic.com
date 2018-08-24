<?php
/**
 * Created by PhpStorm.
 * User: nina
 * Date: 23.08.18
 * Time: 22:36
 */

namespace app\models;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
}