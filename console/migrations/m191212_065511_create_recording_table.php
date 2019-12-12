<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%recording}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%client}}`
 * - `{{%master}}`
 * - `{{%service}}`
 */
class m191212_065511_create_recording_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%recording}}', [
            'client id' => $this->integer(),
            'date' => $this->date(),
            'time' => $this->time(),
            'master id' => $this->integer()->notNull(),
            'service id' => $this->integer()->notNull(),
        ]);

        // creates index for column `client id`
        $this->createIndex(
            '{{%idx-recording-client id}}',
            '{{%recording}}',
            'client id'
        );

        $this->addPrimaryKey('recording_pk', 'recording', ['client id', 'date', 'time']);

        // add foreign key for table `{{%client}}`
        $this->addForeignKey(
            '{{%fk-recording-client id}}',
            '{{%recording}}',
            'client id',
            '{{%client}}',
            'id',
            'CASCADE'
        );

        // creates index for column `master id`
        $this->createIndex(
            '{{%idx-recording-master id}}',
            '{{%recording}}',
            'master id'
        );

        // add foreign key for table `{{%master}}`
        $this->addForeignKey(
            '{{%fk-recording-master id}}',
            '{{%recording}}',
            'master id',
            '{{%master}}',
            'id',
            'CASCADE'
        );

        // creates index for column `service id`
        $this->createIndex(
            '{{%idx-recording-service id}}',
            '{{%recording}}',
            'service id'
        );

        // add foreign key for table `{{%service}}`
        $this->addForeignKey(
            '{{%fk-recording-service id}}',
            '{{%recording}}',
            'service id',
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
            '{{%fk-recording-client id}}',
            '{{%recording}}'
        );

        // drops index for column `client id`
        $this->dropIndex(
            '{{%idx-recording-client id}}',
            '{{%recording}}'
        );

        // drops foreign key for table `{{%master}}`
        $this->dropForeignKey(
            '{{%fk-recording-master id}}',
            '{{%recording}}'
        );

        // drops index for column `master id`
        $this->dropIndex(
            '{{%idx-recording-master id}}',
            '{{%recording}}'
        );

        // drops foreign key for table `{{%service}}`
        $this->dropForeignKey(
            '{{%fk-recording-service id}}',
            '{{%recording}}'
        );

        // drops index for column `service id`
        $this->dropIndex(
            '{{%idx-recording-service id}}',
            '{{%recording}}'
        );

        $this->dropTable('{{%recording}}');
    }
}
