<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 p-6">
  <h1 class="text-3xl font-bold mb-6">Vista administrador</h1>
  <a href="/admin/create" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Agregar nuevo posts</a>
  <table class="mt-6 w-full border-collapse border border-gray-200 bg-white shadow">
    <thead class="bg-gray-100">
      <tr>
        <th class="border p-3">ID</th>
        <th class="border p-3">Título</th>
        <th class="border p-3">Categoría</th>
        <th class="border p-3">Fecha</th>
        <th class="border p-3">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
          <tr>
            <td class="border p-3"><?= $post['id'] ?></td>
            <td class="border p-3"><?= esc($post['title']) ?></td>
            <td class="border p-3"><?= esc($post['category']) ?></td>
            <td class="border p-3"><?= date('Y-m-d', strtotime($post['created_at'])) ?></td>
            <td class="border p-3 flex gap-2">
              <a href="/admin/edit/<?= $post['id'] ?>" class="text-blue-600 hover:underline"><i class="fa-solid fa-pen"></i></a>
              <a href="/admin/delete/<?= $post['id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('¿Eliminar este post?')"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="5" class="p-4 text-center text-gray-500">No hay posts</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
  <!-- Footer -->
  <footer class="bg-white border-t mt-12 py-6">
    <p class="text-center text-gray-500 text-xs mt-4">© <?= date('Y') ?> Developed por: Leydi Vásquez</p>
  </footer>
</body>
</html>