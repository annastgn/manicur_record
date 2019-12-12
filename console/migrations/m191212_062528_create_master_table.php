<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%master}}`.
 */
class m191212_062528_create_master_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%master}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(255)->notNull(),
            'category' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%master}}');
    }
}
