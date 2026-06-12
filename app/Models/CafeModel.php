<?php

namespace App\Models;

use CodeIgniter\Model;

class CafeModel extends Model
{
    protected $table = 'cafes';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome',
        'origem',
        'descricao',
        'perfil',
        'torra',
        'forma_envio',
        'moagem',
        'disponivel',
    ];

    protected $returnType = 'array';
}
