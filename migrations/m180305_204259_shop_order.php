<?php

use yii\db\Migration;

/**
 * Class m180305_204259_shop_order
 */
class m180305_204259_shop_order extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'status' => "ENUM('0','1','2','3','4') NOT NULL DEFAULT '0'",
            'name' => $this->string()->notNull(),
            'status_id' => $this->integer(11),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_204259_shop_order cannot be reverted.\n";
        $this->dropTable('order');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_204259_shop_order cannot be reverted.\n";

        return false;
    }
    */
}
