<?php

use yii\db\Migration;

/**
 * Class m180305_203249_shop_catalog
 */
class m180305_203249_shop_catalog extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('catalog', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'element' => "ENUM('product') NOT NULL DEFAULT 'product'",
            'article' => $this->string(),
            'cat_id' => $this->integer(11),
            'anons' => $this->text(),
            'text' => $this->text(),
            'created' => $this->integer(10),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_203249_shop_catalog cannot be reverted.\n";
        $this->dropTable('catalog');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_203249_shop_catalog cannot be reverted.\n";

        return false;
    }
    */
}
