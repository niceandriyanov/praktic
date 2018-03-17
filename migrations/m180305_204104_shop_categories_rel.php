<?php

use yii\db\Migration;

/**
 * Class m180305_204104_shop_categories_rel
 */
class m180305_204104_shop_categories_rel extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category_rel', [
            'id' => $this->primaryKey(),
            'element_id' => $this->integer(11),
            'cat_id' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_204104_shop_categories_rel cannot be reverted.\n";
        $this->dropTable('category_rel');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_204104_shop_categories_rel cannot be reverted.\n";

        return false;
    }
    */
}
