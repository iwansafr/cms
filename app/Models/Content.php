<?php

namespace App\Models;

use CodeIgniter\Model;

class Content extends Model
{
  protected $table = 'contents';
  protected $primaryKey = 'id';

  // protected $returnType = 'array';
  // protected $useSoftDeletes = true;

  protected $allowedFields = ['title', 'description', 'slug', 'content', 'image', 'content', 'publish', 'author'];

  protected $useTimestamps = true;
  // protected $createdField = 'created_at';
  // protected $updatedField = 'updated_at';
  // protected $deletedField = 'deleted_at';

  // protected $validationRules = [];
  // protected $validationMessages = [];
  // protected $skipValidation = false;
}