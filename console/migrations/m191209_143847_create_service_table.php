<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m191209_143847_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'cost' => $this->money()->notNull(),
            'duration' => $this->double()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
