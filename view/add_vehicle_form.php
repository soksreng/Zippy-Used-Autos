<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/tailwind.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Add Vehicle</title>
</head>
<body>
  <!-- Header/Add new vehicle -->
  <form method="POST" class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-lg mt-10 border border-gray-200">
    <h2 class="text-2xl font-bold mb-6 text-blue-700 text-center">Add a New Vehicle</h2>

    <!-- Model -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Model</label>
      <input type="text" name="model" placeholder="e.g. Corolla" 
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <!-- Year -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Year</label>
      <input type="number" name="year" placeholder="e.g. 2020" 
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <!-- Price -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Price</label>
      <input type="number" name="price" placeholder="e.g. 15000" 
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    </div>

    <!-- Make -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Make</label>
      <select name="make_id" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <?php foreach ($makes as $make): ?>
          <option value="<?= $make['make_id'] ?>"><?= $make['make'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- Type -->
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
      <select name="type_id" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <?php foreach ($types as $type): ?>
          <option value="<?= $type['type_id'] ?>"><?= $type['type'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- Class -->
    <div class="mb-6">
      <label class="block text-sm font-medium text-gray-700 mb-1">Class</label>
      <select name="class_id" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <?php foreach ($classes as $class): ?>
          <option value="<?= $class['class_id'] ?>"><?= $class['class'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- Submit Button -->
    <button type="submit" 
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow-md transition-all duration-200">
      Add Vehicle
    </button>
  </form> 
</body>
</html>