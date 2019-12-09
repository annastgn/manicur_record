<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%recording}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%client}}`
 * - `{{%service}}`
 */
class m191209_144426_create_recording_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%recording}}', [
            'id' => $this->primaryKey(),
            'client' => $this->integer()->notNull(),
            'service' => $this->integer()->notNull(),
            'time' => $this->time()->notNull(),
            'date' => $this->date()->notNull(),
        ]);

        // creates index for column `client`
        $this->createIndex(
            '{{%idx-recording-client}}',
            '{{%recording}}',
            'client'
        );

        // add foreign key for table `{{%client}}`
        $this->addForeignKey(
            '{{%fk-recording-client}}',
            '{{%recording}}',
            'client',
            '{{%client}}',
            'id',
            'CASCADE'
        );

        // creates index for column `service`
        $this->createIndex(
            '{{%idx-recording-service}}',
            '{{%recording}}',
            'service'
        );

        // add foreign key for table `{{%service}}`
        $this->addForeignKey(
            '{{%fk-recording-service}}',
            '{{%recording}}',
            'service',
            '{{%service}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%client}}`
        $this->dropForeignKey(
            '{{%fk-recording-client}}',
            '{{%recording}}'
        );

        // drops index for column `client`
        $this->dropIndex(
            '{{%idx-recording-client}}',
            '{{%recording}}'
        );

        // drops foreign key for table `{{%service}}`
        $this->dropForeignKey(
            '{{%fk-recording-service}}',
            '{{%recording}}'
        );

        // drops index for column `service`
        $this->dropIndex(
            '{{%idx-recording-service}}',
            '{{%recording}}'
        );

        $this->dropTable('{{%recording}}');
    }
}
