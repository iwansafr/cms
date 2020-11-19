<?php

namespace App\Models;

use CodeIgniter\Model;

class Image extends Model
{
  protected $table = 'images';
  protected $primaryKey = 'id';

  // protected $returnType = 'array';
  // protected $useSoftDeletes = true;

  protected $allowedFields = ['title', 'label', 'image'];

  protected $useTimestamps = true;
  // protected $createdField = 'created_at';
  // protected $updatedField = 'updated_at';
  // protected $deletedField = 'deleted_at';

  // protected $validationRules = [];
  // protected $validationMessages = [];
  // protected $skipValidation = false;
}