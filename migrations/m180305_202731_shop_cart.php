<?php

use yii\db\Migration;

/**
 * Class m180305_202731_shop_cart
 */
class m180305_202731_shop_cart extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('shop_cart', [
            'id' => $this->primaryKey(),
            'good_id' => $this->integer(11),
            'price_id' => $this->integer(11),
            'created' => $this->integer(10),
            'count' => $this->double(),
            'param' => $this->text(),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_202731_shop_cart cannot be reverted.\n";
        $this->dropTable('shop_cart');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_202731_shop_cart cannot be reverted.\n";

        return false;
    }
    */
}
