<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($post) ? 'Editar' : 'Nuevo' ?> Post</title>
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
</head>
<body class="bg-gray-50 p-6">

  <h1 class="text-2xl font-bold mb-6"><?= isset($post) ? 'Editar' : 'Nuevo' ?> Post</h1>

  <form method="post" enctype="multipart/form-data"
        action="<?= isset($post) ? '/admin/update/'.$post['id'] : '/admin/store' ?>"
        class="space-y-4 bg-white p-6 rounded shadow-md max-w-xl">

    <div>
      <label class="block font-semibold">Título</label>
      <input type="text" name="title" class="w-full border p-2 rounded" value="<?= $post['title'] ?? '' ?>" required>
    </div>

    <!-- Nuevo atributo descripción -->
    <div>
      <label class="block font-semibold">Descripción</label>
      <input type="text" name="content" class="w-full border p-2 rounded" value="<?= $post['content'] ?? '' ?>" required>
    </div>

    <div>
      <label class="block font-semibold">Fecha de Creación</label>
      <input type="date" name="created_at" class="w-full border p-2 rounded"
             value="<?= isset($post) ? date('Y-m-d', strtotime($post['created_at'])) : date('Y-m-d') ?>">
    </div>

    <div>
      <label class="block font-semibold">Categoría</label>
      <input type="text" name="category" class="w-full border p-2 rounded" value="<?= $post['category'] ?? '' ?>">
    </div>

    <div>
      <label class="block font-semibold">Imagen</label>
      <input type="file" name="image" class="w-full border p-2 rounded">
      <?php if (isset($post['image'])): ?>
        <input type="hidden" name="current_image" value="<?= $post['image'] ?>">
        <p class="mt-2">Imagen actual:</p>
        <img src="<?= base_url('uploads/' . $post['image']) ?>" class="h-24 mt-1">
      <?php endif; ?>
    </div>

    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
      <?= isset($post) ? 'Actualizar' : 'Crear' ?>
    </button>
  </form>

</body>
</html>