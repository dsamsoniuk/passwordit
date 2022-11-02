<?php

use yii\db\Migration;

/**
 * Class m221102_070717_news_add_col_date_add
 */
class m221102_070717_news_add_col_date_add extends Migration
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
        echo "m221102_070717_news_add_col_date_add cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('news', 'date_add', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('news', 'date_add');
    }
    
}
