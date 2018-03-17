<?php

use yii\db\Migration;

/**
 * Class m180305_202811_attachments
 */
class m180305_202811_attachments extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('attachments', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'module_name' => $this->string(),
            'element_type' => $this->string()->defaultValue('element'),
            'element_id' => $this->integer(11),
            'alt' => $this->string(),
            'title' => $this->string(),
            'folder' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180305_202811_attachments cannot be reverted.\n";
        $this->dropTable('attachments');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_202811_attachments cannot be reverted.\n";

        return false;
    }
    */
}
