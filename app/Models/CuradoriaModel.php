<?php

namespace App\Models;

use CodeIgniter\Model;

class CuradoriaModel extends Model
{
    protected $table = 'curadorias';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'mes_referencia',
        'perfil',
        'cafe_id',
        'ordem'
    ];
}