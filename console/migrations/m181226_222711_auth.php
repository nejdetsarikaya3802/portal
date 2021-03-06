<?php

use yii\db\Migration;

/**
 * Class m181226_222711_auth
 */
class m181226_222711_auth extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('auth', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'source' => $this->string()->notNull(),
            'source_id' => $this->string()->notNull(),
        ]);

        $this->addForeignKey('fk_auth_user_id_user', 'auth', 'user_id', 'user', 'id', 'restrict', 'restrict');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    { 
        $this->dropForeignKey('fk_auth_user_id_user','auth');
        $this-> dropTable('auth');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181226_222711_auth cannot be reverted.\n";

        return false;
    }
    */
}
