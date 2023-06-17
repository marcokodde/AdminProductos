<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m230615_145140_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id_producto' => $this->primaryKey(),
            'codigo' => $this->string()->notNull(),
            'sku' => $this->string()->notNull(),
            'nombre' => $this->string()->notNull(),
            'id_marca' => $this->integer()->notNull(),
            'descripcion' => $this->text(),
            'stock' => $this->integer(),
        ]);
        // creates index for column `id_marca`
        $this->createIndex(
            'idx-id_marca',
            'marca',
            'id_marca'
        );

        // add foreign key for table `marca`
        $this->addForeignKey(
            'fk-marca-id_marca',
            'marca',
            'id_marca',
            'products',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
        // drops index for column `id_marca`

        $this->dropIndex(
            'idx-products-id_marca',
            'products'
        );
    }
}
