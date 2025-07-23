<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="fixed top-4 left-1/2 transform -translate-x-1/2 w-11/12 max-w-5xl 
                 bg-gray-800 text-white rounded shadow-lg flex justify-between items-center px-6 py-3 z-50">
    <div class="text-2xl font">BlogLogo</div>
    <div class="text-sm">+1234 567 8900</div>
  </header>

  <!-- Hero -->
  <section class="text-center pt-32 pb-12">
    <h1 class="text-7xl md:text-6xl font-bold max-w-3xl mx-auto">
      Insights & stories from the digital world
    </h1>
  </section>

  <!-- Artículos Grid -->
  <section class="px-4 md:px-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
          <img src="<?= base_url('uploads/' . $post['image']) ?>" alt="<?= esc($post['title']) ?>"
               class="rounded-md mb-3 w-full h-40 object-cover">
          <h3 class="text-lg font-semibold"><?= esc($post['title']) ?></h3>
          <p class="text-gray-500 text-sm mt-1">
            <?= esc($post['category']) ?><br>
            <?= date('F d, Y', strtotime($post['created_at'])) ?>
          </p>
        </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="col-span-4 text-center text-gray-500 py-8">No hay artículos todavía.</p>
      <?php endif; ?>
    </div>
  </section>

  <!-- See More Button -->
  <div class="flex justify-center py-8">
    <button class="px-6 py-3 border border-black rounded-full hover:bg-gray-300 transition">See more articles</button>
  </div>

  <!-- Footer con redes sociales -->
  <footer class="bg-white border-t mt-12 py-6">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center px-4 gap-4">
      <div class="text-lg font">BlogLogo</div>
      <div class="flex space-x-4">
        <!-- Facebook -->
        <a href="#" class="text-gray-600 hover:text-blue-500">
            <i class="fa-brands fa-square-facebook"></i>
        </a>
        <!-- Instagram -->
        <a href="#" class="text-gray-600 hover:text-pink-500">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <!-- Twitter -->
        <a href="#" class="text-gray-600 hover:text-black">
            <i class="fa-brands fa-twitter"></i>
        </a>
      </div>
    </div>
    <p class="text-center text-gray-500 text-xs mt-4">© <?= date('Y') ?> Developed por: Leydi Vásquez</p>
  </footer>

</body>
</html>