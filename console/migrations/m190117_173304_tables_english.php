<?php

use yii\db\Migration;

/**
 * Class m190117_173304_tables_english
 */
class m190117_173304_tables_english extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/m190110_011129.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190117_173304_tables_english cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190117_173304_tables_english cannot be reverted.\n";

        return false;
    }
    */
}
