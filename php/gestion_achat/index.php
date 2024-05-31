<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article Manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body class="bg-gray-100 p-10 h-screen w-screen">
  <div class="container mx-auto flex justify-center gap-5 h-full">
      <div class="bg-white p-6 rounded shadow w-[50%]">
        <h2 class="text-2xl font-bold mb-4">Add New Article</h2>
        <form id="articleForm">
          <div class="mb-4">
            <label for="articleTitle" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <select id="articleSelect" class="block w-full h-12 p-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option value="">Select an article</option>
              <option value="Article 1">Article 1</option>
              <option value="Article 2">Article 2</option>
            </select>
            <input type="text" id="articleInput" class="hidden w-full h-12 p-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter article title">
            <button type="button" id="addButton" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Add New</button>
          </div>
          <div class="mb-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
            <input type="number" id="quantity" class="block w-full h-12 p-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter quantity">
          </div>
          <div class="mb-4">
            <label for="category" class="block text-sm font-medium p-2 text-gray-700 mb-1">Category</label>
            <select id="category" class="block w-full h-12 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option value="Category 1">Category 1</option>
              <option value="Category 2">Category 2</option>
            </select>
          </div>
          <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Add Article</button>
        </form>
      </div>

    <!-- Product Display -->
    <div id="productList" class="bg-white p-6 rounded shadow w-[50%]">
      <h2 class="text-2xl font-bold mb-4">All Products</h2>
      <!-- card -->
      <div class="p-4 bg-gray-100 rounded shadow">
        <h3 class="text-xl font-bold mb-2">Article 1</h3>
        <p class="mb-2">Quantity: 10</p>
        <p class="mb-4">Category: Category 1</p>
        <button class="px-4 py-2 bg-indigo-500 text-white rounded hover:bg-indigo-700">Acheter</button>
      </div>
      <!---->
    </div>
  </div>

  <script>
    document.getElementById('addButton').addEventListener('click', function() {
      document.getElementById('articleSelect').classList.toggle('hidden');
      document.getElementById('articleInput').classList.toggle('hidden');
    });
  </script>
</body>
</html>
