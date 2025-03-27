<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href= "/admin/css/tailwind.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Manage Class</title>
</head>
<body>
<div class="max-w-md mx-auto mt-10">
  <h2 class="text-xl font-bold mb-4">Manage Classes</h2>
  <!-- Success message handling -->
  <?php
    $success_message = null;
    if (isset($_GET['success'])) {
      if ($_GET['success'] === 'class_deleted') {
          $success_message = "Class deleted successfully!";
      } elseif ($_GET['success'] === 'class_added') {
          $success_message = "Class added successfully!";
      }
  }
  ?>  
  <!-- Display success message if it exists -->
  <?php if (!empty($success_message)) : ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4 text-center max-w-xl mx-auto">
      <?= htmlspecialchars($success_message) ?>
    </div>
  <?php endif; ?>
  <!-- Form to add a new class -->
  <form method="post" class="flex gap-2 mb-4">
    <input type="text" name="class" class="border p-2 w-full" placeholder="New class" required>
    <input type="hidden" name="action" value="add">
    <button class="bg-blue-500 text-white px-4 py-2 rounded">Add</button>
  </form>
  <!-- List of existing classes -->
  <ul class="space-y-2">
    <?php foreach ($classes as $c): ?>
    <li class="flex justify-between items-center bg-white p-2 border rounded">
      <span><?= $c['class'] ?></span>
      <!-- Form to delete a class -->
      <form method="post">
        <input type="hidden" name="class_id" value="<?= $c['class_id'] ?>">
        <input type="hidden" name="action" value="delete">
        <button class="text-red-500">Delete</button>
      </form>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
</body>
</html>
