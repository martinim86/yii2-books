<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%mail}}`.
 */
class m201111_110504_create_mail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mail}}', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_TEXT . ' NOT NULL',
            'email' => Schema::TYPE_TEXT ,
            'tel' => Schema::TYPE_TEXT . ' NOT NULL',
            'body' => Schema::TYPE_TEXT . ' NOT NULL',
            'verifyCode' => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mail}}');
    }
}
