<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table      = 'profile';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['source', 'benefits','lid'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    //protected $validationRules    = ["email"=>"is_unique[user.email]"];
    //protected $validationMessages = ["email"=>["is_unique"=>"This Email already exists"]];
    //protected $skipValidation     = false;

    

}