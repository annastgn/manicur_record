<?php

use yii\db\Migration;

/**
 * Class m191212_065208_alter_name_column_from_service_table
 */
class m191212_065208_alter_name_column_from_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191212_065208_alter_name_column_from_service_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191212_065208_alter_name_column_from_service_table cannot be reverted.\n";

        return false;
    }
    */
}
