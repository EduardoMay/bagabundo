<?php

use yii\db\Migration;

/**
 * Class m190321_022300_correxion_llaves_foraneas
 */
class m190321_022300_correxion_llaves_foraneas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/m190321_022300.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190321_022300_correxion_llaves_foraneas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190321_022300_correxion_llaves_foraneas cannot be reverted.\n";

        return false;
    }
    */
}
