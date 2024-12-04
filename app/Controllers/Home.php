<?php

namespace App\Controllers;

use App\Models\ClientesModel;
use App\Models\CursosModel;

class Home extends BaseController
{
    public function index()
    {
        $clientesModel = new ClientesModel();
        $cursosModel = new CursosModel();

        // Obtener todos los clientes
        $clientes = $clientesModel->findAll();

        // Obtener los cursos asociados a cada cliente
        foreach ($clientes as &$cliente) {
            $cliente['cursos'] = $cursosModel->where('cliente_id', $cliente['id'])->findAll();
        }

        // Retornar los datos en formato JSON
        return $this->response->setJSON($clientes);
    }
}
