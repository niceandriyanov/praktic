<?php

use yii\db\Migration;

/**
 * Class m180126_085401_create_news
 */
class m180126_085401_create_news extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->unique(),
            'module' => "ENUM('news') NOT NULL DEFAULT 'news'",
            'element' => "ENUM('element') NOT NULL DEFAULT 'element'",
            'anons' => $this->text(),
            'content' => $this->text(),
            'date' => $this->dateTime(),
            'user_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180126_085401_create_news cannot be reverted.\n";
        $this->dropTable('news');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180126_085401_create_news cannot be reverted.\n";

        return false;
    }
    */
}
