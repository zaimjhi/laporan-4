<?php

use yii\db\Migration;

/**
 * Class m230531_012326_mahasiswa007
 */
class m230531_012326_mahasiswa007 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa007}}',[
            'Id007'=> $this->primaryKey(),
            'Nim007'=> $this->string(80)->notNull()->unique(),
            'Nama007'=> $this->string(80)->notNull(),
            'Kelas007'=> $this->string(80)->notNull(),
            'status007'=> $this->string(80)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('{{%mahasiswa007}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230531_012326_mahasiswa007 cannot be reverted.\n";

        return false;
    }
    */
}
