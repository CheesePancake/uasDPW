<?php

namespace App\Models;

use CodeIgniter\Model;

class crudModel extends Model
{
    protected $table      = 'posting';
    protected $primaryKey = 'id';

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useTimestamps = false;
    protected $allowedFields = ['title', 'gambar', 'textpos'];

    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
