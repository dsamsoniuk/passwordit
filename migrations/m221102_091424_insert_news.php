<?php

use yii\db\Migration;

/**
 * Class m221102_091424_insert_news
 */
class m221102_091424_insert_news extends Migration
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
        echo "m221102_091424_insert_news cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('news', [
            'title' => 'Best news',
            'content' => 'Very important news',
            'date_add' => time(),
        ]);
    }

    // public function down()
    // {
    //     echo "m221102_091424_insert_news cannot be reverted.\n";

    //     return false;
    // }
    
}
