<?php

namespace App\Models;

use CodeIgniter\Model;

class Role extends Model
{
  protected $table = 'roles';
  protected $primaryKey = 'id';

  // protected $returnType = 'array';
  // protected $useSoftDeletes = true;

  protected $allowedFields = ['title', 'description', 'level'];

  // protected $useTimestamps = false;
  // protected $createdField = 'created_at';
  // protected $updatedField = 'updated_at';
  // protected $deletedField = 'deleted_at';

  // protected $validationRules = [];
  // protected $validationMessages = [];
  // protected $skipValidation = false;
}
