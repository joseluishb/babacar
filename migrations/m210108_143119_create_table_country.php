<?php

use yii\db\Migration;

/**
 * Class m210108_143119_create_table_country
 */
class m210108_143119_create_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey()->unsigned(),
            'code' => $this->string(2)->unsigned(),
            'name' => $this->string(80),
            'phonecode' => $this->integer(5),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),

        ]);

        $this->insert('country', [
            'code' => 'DE',
            'name' => 'Germany',
            'phonecode' => '49',
            'lat' => '1111111',
            'lng' => '2222222',        
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('country', ['code' => 'DE']);
        $this->dropTable('country');
    }
    
}
