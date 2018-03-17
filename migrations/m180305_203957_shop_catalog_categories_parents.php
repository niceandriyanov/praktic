<?php

use yii\db\Migration;

/**
 * Class m180305_203957_shop_catalog_categories_parents
 */
class m180305_203957_shop_catalog_categories_parents extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category_parents', [
            'id' => $this->primaryKey(),
            'element_id' => $this->integer(11),
            'parent_id' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_203957_shop_catalog_categories_parents cannot be reverted.\n";
        $this->dropTable('category_parents');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_203957_shop_catalog_categories_parents cannot be reverted.\n";

        return false;
    }
    */
}
