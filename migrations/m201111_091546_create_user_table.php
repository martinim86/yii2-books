<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%user}}`.
 */
class m201111_091546_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_TEXT . ' NOT NULL',
            'password' => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
