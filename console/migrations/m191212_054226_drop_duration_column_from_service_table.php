<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%service}}`.
 */
class m191212_054226_drop_duration_column_from_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%service}}', 'duration');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%service}}', 'duration', $this->double()->notNull());
    }
}
