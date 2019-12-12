<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%recording}}`.
 */
class m191212_053551_drop_recording_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%recording}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%recording}}', [
            'id' => $this->primaryKey(),
            'client' => $this->integer()->notNull(),
            'service' => $this->integer()->notNull(),
            'time' => $this->time()->notNull(),
            'date' => $this->date()->notNull(),
        ]);
    }
}
