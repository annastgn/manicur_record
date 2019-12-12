<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%service}}`.
 */
class m191212_054138_drop_cost_column_from_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%service}}', 'cost');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%service}}', 'cost', $this->money()->notNull());
    }
}
