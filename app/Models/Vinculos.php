<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinculos extends Model
{
    use HasFactory;

    protected $table = 'vinculos';

    protected $fillable = [
        'vinculo_id',
        'funcionario_id',
        'cargo_id',
        'empresa_id'
        ];

    protected $primaryKey = 'vinculo_id';

    public function vincular()
    {
        return [
            $this->hasOne(Funcionarios::class,'funcionario_id','vinculo_id'),
            $this->hasOne(Cargos::class, 'cargo_id','vinculo_id'),
            $this->hasOne(Empresas::class, 'empresa_id', 'vinculo_id')
        ];
    }
}

