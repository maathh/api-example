<?php

namespace Src\Models;
use Src\Models\BaseModel;

class City extends BaseModel
{
    protected $table = "cities";
    protected $fillable = ['state_id', 'title', 'iso'];
    
    public function __construct($db)
    {
        $this->db = $db;
    }
}
