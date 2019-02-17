<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    protected $table = 'todos';
    public function getData()
    {
        return $this->id . ': ' . $this->item;
    }
}
