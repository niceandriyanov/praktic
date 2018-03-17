<?php

use yii\db\Migration;

/**
 * Class m180305_203026_options
 */
class m180305_203026_options extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('options', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'value' => $this->string(),
            'code' => $this->string(),
            'type' => "ENUM('text','textarea','image') NOT NULL DEFAULT 'text'",
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_203026_options cannot be reverted.\n";
        $this->dropTable('options');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_203026_options cannot be reverted.\n";

        return false;
    }
    */
}
