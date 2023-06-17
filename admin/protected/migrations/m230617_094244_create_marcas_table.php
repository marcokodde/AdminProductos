<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%marcas}}`.
 */
class m230615_194244_create_marcas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%marcas}}', [
            'id_marca' => $this->primaryKey(),
            'marca' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%marcas}}');
    }
}
