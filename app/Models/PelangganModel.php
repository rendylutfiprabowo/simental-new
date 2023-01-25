<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    //     protected $DBGroup          = 'default';
    protected $table            = 'pelanggans';
    protected $primaryKey       = 'id';
    //     protected $useAutoIncrement = true;
    //     protected $insertID         = 0;
    protected $returnType       = 'array';
    //     protected $useSoftDeletes   = false;
    //     protected $protectFields    = true;
    protected $allowedFields    = [
        'nomor_jastel',
        'nama',
        'contact',
        'hasil_greeting',
        'profil_kesepakatan',
        'agen_pengelola',
        'produk',
        'alamat',
        'statuscall',
        'reasoncall',
        'penerima_telpon',
        'hub_ybs',
        'kendala_pelanggan',
        'hasil_caring',
    ];

    //     // Dates
    protected $useTimestamps = true;
    //     protected $dateFormat    = 'datetime';
    //     protected $createdField  = 'created_at';
    //     protected $updatedField  = 'updated_at';
    //     protected $deletedField  = 'deleted_at';

    //     // Validation
    //     protected $validationRules      = [];
    //     protected $validationMessages   = [];
    //     protected $skipValidation       = false;
    //     protected $cleanValidationRules = true;

    //     // Callbacks
    //     protected $allowCallbacks = true;
    //     protected $beforeInsert   = [];
    //     protected $afterInsert    = [];
    //     protected $beforeUpdate   = [];
    //     protected $afterUpdate    = [];
    //     protected $beforeFind     = [];
    //     protected $afterFind      = [];
    //     protected $beforeDelete   = [];
    //     protected $afterDelete    = [];

    public function getPelanggan($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
