<?php

use yii\db\Migration;

/**
 * Class m180305_203832_shop_catalog_categories
 */
class m180305_203832_shop_catalog_categories extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'element' => "ENUM('category') NOT NULL DEFAULT 'category'",
            'parent_id' => $this->integer(11),
            'anons' => $this->text(),
            'text' => $this->text(),
            'import_id' => $this->text(),
            'sort' => $this->integer(11),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_203832_shop_catalog_categories cannot be reverted.\n";
        $this->dropTable('category');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_203832_shop_catalog_categories cannot be reverted.\n";

        return false;
    }
    */
}
