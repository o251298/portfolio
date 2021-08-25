<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%resume}}`.
 */
class m210825_120345_create_resume_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%resume}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
            'position' => $this->string(),
            'years' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%resume}}');
    }
}
