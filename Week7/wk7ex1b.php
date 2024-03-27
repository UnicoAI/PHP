<?php
use Phinx\Migration\AbstractMigration;

class CreateMonstersTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('monsters');
        $table->addColumn('name', 'string')
              ->addColumn('image', 'blob')
              ->addColumn('audio', 'blob')
              ->create();
    }
}
?>