<?php

namespace Src\Models;

use Src\Models\BaseModel;

class State extends BaseModel
{
    protected $table = "states";
    protected $fillable = ['title', 'letter', 'iso'];

    public function __construct($db)
    {
        $this->db = $db;
    }
}
