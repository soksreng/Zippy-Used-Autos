<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" href= "/admin/css/tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">

<!-- Header -->
  <header class="bg-red-300 shadow-sm p-4 mb-6">
      <h1 class="text-3xl font-bold text-center text-blue-700">Zippy Used Autos</h1>
  </header>
  <main class="max-w-6xl mx-auto px-4">

    <!-- Filters -->
    <form method="get" class="bg-white p-4 rounded shadow-md mb-6 flex flex-wrap gap-4 justify-center items-end">
      <div>
        <label class="block text-sm font-semibold mb-1">Make</label>
        <select name="make_id" class="p-2 rounded border w-40">
          <option value="">All</option>
          <?php foreach ($makes as $make): ?>
            <option value="<?= $make['make_id'] ?>" <?= $make_id == $make['make_id'] ? 'selected' : '' ?>>
              <?= $make['make'] ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div>
        <label class="block text-sm font-semibold mb-1">Type</label>
        <select name="type_id" class="p-2 rounded border w-40">
          <option value="">All</option>
          <?php foreach ($types as $type): ?>
            <option value="<?= $type['type_id'] ?>" <?= $type_id == $type['type_id'] ? 'selected' : '' ?>>
              <?= $type['type'] ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div>
        <label class="block text-sm font-semibold mb-1">Class</label>
        <select name="class_id" class="p-2 rounded border w-40">
          <option value="">All</option>
          <?php foreach ($classes as $class): ?>
            <option value="<?= $class['class_id'] ?>" <?= $class_id == $class['class_id'] ? 'selected' : '' ?>>
              <?= $class['class'] ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div>
        <label class="block text-sm font-semibold mb-1">Sort by</label>
        <select name="sort" class="p-2 rounded border w-40">
          <option value="price" <?= $sort_by === 'price' ? 'selected' : '' ?>>Price</option>
          <option value="year" <?= $sort_by === 'year' ? 'selected' : '' ?>>Year</option>
        </select>
      </div>

      <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
        Apply
      </button>
    </form>

    <!-- Vehicle Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($vehicles as $v): ?>
        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
          <h2 class="text-xl font-bold text-blue-700 mb-1">
            <?= htmlspecialchars($v['year'] . ' ' . $v['make'] . ' ' . $v['model']) ?>
          </h2>
          <p class="text-sm text-gray-600 mb-1">Type: <?= $v['type'] ?> | Class: <?= $v['class'] ?></p>
          <p class="text-green-600 text-lg font-semibold">$<?= number_format($v['price'], 2) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <footer class="text-center text-sm text-gray-500 mt-12 mb-4">
    &copy; <?= date('Y') ?> Zippy Used Autos. All rights reserved.
  </footer>

</body>
</html>