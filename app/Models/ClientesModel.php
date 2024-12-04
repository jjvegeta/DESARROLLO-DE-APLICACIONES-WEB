<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table = 'clientes';  // Nombre de la tabla
    protected $primaryKey = 'id';  // Clave primaria

    protected $returnType = 'array';  // Devuelve un array
    protected $allowedFields = ['name', 'phone', 'email', 'created_at', 'updated_at'];  // Campos permitidos

    // Método para obtener los cursos de un cliente
    public function getCursos($clienteId)
    {
        return $this->db->table('cursos')
            ->where('cliente_id', $clienteId)
            ->get()->getResultArray();
    }
}
