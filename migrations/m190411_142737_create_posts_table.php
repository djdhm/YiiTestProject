<?php

use yii\db\Migration;
use \yii\db\Schema;
/**
 * Handles the creation of table `{{%posts}}`.
 */
class m190411_142737_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%posts}}', [
            'id' => $this->primaryKey(),
            'firstname'=> Schema::TYPE_STRING." NOT NULL",
            'lastname'=> Schema::TYPE_STRING." NOT NULL",
            'picture'=> Schema::TYPE_STRING,


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%posts}}');
    }
}
