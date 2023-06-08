<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Management</title>
  {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
</head>

<body>
  <div class="flex m-1 h-3/6 shadow-2xl rounded">

    <div class="flex-1">
      <!-- Main Content -->
      <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Tasks</h1>
        <div class="flex items-center mb-4">
          <input type="text" placeholder="Enter task name" class="px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none">
          <button class="px-4 py-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">Add Task</button>
        </div>
        <ul class="space-y-2">
          <li class="flex items-center">
            <input type="checkbox" class="mr-2">
            <span class="line-through">Task 1</span>
          </li>
          <li class="flex items-center">
            <input type="checkbox" class="mr-2">
            <span>Task 2</span>
          </li>
          <li class="flex items-center">
            <input type="checkbox" class="mr-2">
            <span>Task 3</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>
