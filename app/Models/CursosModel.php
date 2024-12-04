<?php

namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model
{
    protected $table = 'cursos';  // Nombre de la tabla
    protected $primaryKey = 'id';  // Clave primaria

    protected $returnType = 'array';  // Devuelve un array
    protected $allowedFields = ['nombre', 'descripcion', 'cliente_id', 'creado_en', 'actualizado_en'];  // Campos permitidos
}
