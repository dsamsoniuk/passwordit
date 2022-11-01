<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m221101_180403_news
 */
class m221101_180403_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221101_180403_news cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('news', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);

        $this->insert('news', [
            'title' => 'test 1',
            'content' => 'content 1',
        ]);
    }

    public function down()
    {
        // echo "m221101_180403_news cannot be reverted.\n";
        // $this->delete('news', ['id' => 1]);
        $this->dropTable('news');
        // return false;
    }
    
}
