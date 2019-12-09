<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m191209_141403_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(255)->notNull(),
            'phone' => $this->char(10),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
