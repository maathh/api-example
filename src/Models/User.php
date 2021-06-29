<?php

namespace Src\Models;
use Src\Models\BaseModel;

class User extends BaseModel
{
    protected $table = "users";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    public function __construct($db)
    {
        $this->db = $db;
    }
}
