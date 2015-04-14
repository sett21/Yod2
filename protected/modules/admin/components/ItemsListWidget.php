<?php
class ItemsListWidget extends CWidget {
    public $parametrs;
    public $items;
    public $columns; // columns from this model table
    public $joinColumns; // if model table have relations with other tables use join coumns. joinField - field with foreign key. neededField - field from joined table for display
    public $model;
 
    public function run() {
        $this->parametrs['items'] = $this->items;
        $this->parametrs['columns'] = $this->columns;
        $this->parametrs['joinColumns'] = $this->joinColumns;
        $this->parametrs['model'] = $this->model;
        $this->render('itemslist/list', array('parametrs' => $this->parametrs) );
    }
}