<?php

use yii\db\Migration;

/**
 * Class m190208_041728_keystables
 */
class m190208_041728_keystables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/m190208_041728.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190208_041728_keystables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190208_041728_keystables cannot be reverted.\n";

        return false;
    }
    */
}
