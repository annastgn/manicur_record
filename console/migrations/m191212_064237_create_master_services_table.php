<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%master_services}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%service}}`
 * - `{{%master}}`
 */
class m191212_064237_create_master_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%master_services}}', [
            'service id' => $this->integer(),
            'master id' => $this->integer(),
            'duration' => $this->double()->notNull(),
            'cost' => $this->money()->notNull(),
        ]);

        // creates index for column `service id`
        $this->createIndex(
            '{{%idx-master_services-service id}}',
            '{{%master_services}}',
            'service id'
        );

        $this->addPrimaryKey('master_services_pk', 'master_services', ['service id', 'master id']);

        // add foreign key for table `{{%service}}`
        $this->addForeignKey(
            '{{%fk-master_services-service id}}',
            '{{%master_services}}',
            'service id',
            '{{%service}}',
            'id',
            'CASCADE'
        );

        // creates index for column `master id`
        $this->createIndex(
            '{{%idx-master_services-master id}}',
            '{{%master_services}}',
            'master id'
        );

        // add foreign key for table `{{%master}}`
        $this->addForeignKey(
            '{{%fk-master_services-master id}}',
            '{{%master_services}}',
            'master id',
            '{{%master}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%service}}`
        $this->dropForeignKey(
            '{{%fk-master_services-service id}}',
            '{{%master_services}}'
        );

        // drops index for column `service id`
        $this->dropIndex(
            '{{%idx-master_services-service id}}',
            '{{%master_services}}'
        );

        // drops foreign key for table `{{%master}}`
        $this->dropForeignKey(
            '{{%fk-master_services-master id}}',
            '{{%master_services}}'
        );

        // drops index for column `master id`
        $this->dropIndex(
            '{{%idx-master_services-master id}}',
            '{{%master_services}}'
        );

        $this->dropTable('{{%master_services}}');
    }
}
