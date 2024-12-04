<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes y Cursos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Clientes y Cursos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Cursos</th>
                <th>Fecha de Creación</th>
                <th>Última Actualización</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($clientes)): ?>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= esc($cliente['id']); ?></td>
                        <td><?= esc($cliente['name']); ?></td>
                        <td><?= esc($cliente['phone']); ?></td>
                        <td><?= esc($cliente['email']); ?></td>
                        <td>
                            <?php if (!empty($cliente['cursos'])): ?>
                                <ul>
                                    <?php foreach ($cliente['cursos'] as $curso): ?>
                                        <li><?= esc($curso['nombre']); ?>: <?= esc($curso['descripcion']); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                No tiene cursos asociados.
                            <?php endif; ?>
                        </td>
                        <td><?= esc($cliente['created_at']); ?></td>
                        <td><?= esc($cliente['updated_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No hay clientes disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
