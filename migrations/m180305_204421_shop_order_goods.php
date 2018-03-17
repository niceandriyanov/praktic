<?php

use yii\db\Migration;

/**
 * Class m180305_204421_shop_order_goods
 */
class m180305_204421_shop_order_goods extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('order_goods', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(11)->defaultValue(0),
            'good_id' => $this->integer(11)->defaultValue(0),
            'discount_id' => $this->integer(11)->defaultValue(0),
            'count_goods' => $this->double(),
            'price' => $this->double(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_204421_shop_order_goods cannot be reverted.\n";
        $this->dropTable('order_goods');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_204421_shop_order_goods cannot be reverted.\n";

        return false;
    }
    */
}
