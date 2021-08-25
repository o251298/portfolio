<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tehnology}}`.
 */
class m210825_124135_create_tehnology_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tehnology}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'icon' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tehnology}}');
    }
}
