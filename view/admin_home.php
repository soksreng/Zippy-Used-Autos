<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" href="/css/tailwind.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <div class="max-w-5xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">Admin - Vehicle Inventory</h1>

    <!-- Management Links -->
    <div class="flex flex-wrap gap-4 justify-center mb-8">
      <a href="../admin/manage_makes.php" class="bg-blue-500 text-white px-5 py-2 rounded hover:bg-blue-600 transition">
        Manage Makes
      </a>
      <a href="../admin/manage_types.php" class="bg-green-500 text-white px-5 py-2 rounded hover:bg-green-600 transition">
        Manage Types
      </a>
      <a href="../admin/manage_classes.php" class="bg-purple-500 text-white px-5 py-2 rounded hover:bg-purple-600 transition">
        Manage Classes
      </a>
      <a href="../admin/add_vehicle.php" class="bg-gray-700 text-white px-5 py-2 rounded hover:bg-gray-800 transition">
        Add New Vehicle
      </a>
    </div>
    <!-- Success Message -->
    <?php
      $success_message = null;
      if (isset($_GET['success'])) {
        if ($_GET['success'] === 'vehicle_added') {
            $success_message = "Vehicle added successfully!";
        } elseif ($_GET['success'] === 'vehicle_deleted') {
            $success_message = "Vehicle deleted successfully!";
        }
      }
    ?>  
    <!-- Display success message if it exists -->
    <?php if (!empty($success_message)) : ?>
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4 text-center max-w-xl mx-auto">
        <?= htmlspecialchars($success_message) ?>
      </div>
    <?php endif; ?>
    <!-- Vehicle Table -->
    <table class="w-full border bg-white shadow rounded">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-2 text-left">Model</th>
          <th class="p-2 text-left">Year</th>
          <th class="p-2 text-left">Price</th>
          <th class="p-2 text-left">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($vehicles as $v): ?>
          <!-- Each vehicle row -->
        <tr class="border-t">
          <td class="p-2"><?= $v['model'] ?></td>
          <td class="p-2"><?= $v['year'] ?></td>
          <td class="p-2">$<?= $v['price'] ?></td>
          <td class="p-2">
            <!-- Form to delete a vehicle -->
            <form method="post" action="delete_vehicle.php">
              <input type="hidden" name="vehicle_id" value="<?= $v['vehicle_id'] ?>">
              <button class="text-red-500 hover:underline">Delete</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>