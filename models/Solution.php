<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solution".
 *
 * @property int $id_solution
 * @property string $solution_question
 * @property string $solution_answer
 * @property int $id_category
 *
 * @property Category $category
 */
class Solution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['solution_question', 'id_category'], 'required'],
            [['solution_answer'], 'string'],
            [['id_category'], 'integer'],
            [['solution_question'], 'string', 'max' => 500],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id_category']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_solution' => 'Id Solution',
            'solution_question' => 'Solution Question',
            'solution_answer' => 'Solution Answer',
            'id_category' => 'Id Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id_category' => 'id_category']);
    }
}
