<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m210825_104707_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'position' => $this->string(255),
            'position_description' => $this->string(255),
            'Birthday' => $this->string(),
            'Website' => $this->string(),
            'Phone' => $this->integer(255),
            'City' => $this->string(),
            'Age' => $this->integer(),
            'Degree' => $this->string(),
            'PhEmailone' => $this->string(),
            'Freelance' => $this->string(),
            'description' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
