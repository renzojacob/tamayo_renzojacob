<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>STUDENT'S LIST</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-tr from-emerald-100 via-sky-100 to-indigo-100 flex items-center justify-center p-6">

  <div id="app" class="relative w-full max-w-6xl bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl p-10 flex flex-col gap-8 border border-gray-200">
    <!-- HEADER -->
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-800 tracking-tight">
        📋 Student Records
      </h1>
    <form method="get" action="<?=site_url()?>" class="mb-4 flex justify-end">
    <input 
      type="text" 
      name="q" 
      value="<?=html_escape($_GET['q'] ?? '')?>" 
      placeholder="Search student..." 
      class="px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500 w-64">
    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r-lg shadow transition-all duration-300">
      <i class="fa fa-search"></i>
    </button>
    </form>
      <a href="<?=site_url('students/create');?>"
         class="inline-block bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold px-6 py-3 rounded-2xl shadow-md hover:from-emerald-600 hover:to-teal-700 transition duration-300 ease-in-out">
        + Add Student
      </a>
    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto border border-gray-300 rounded-2xl shadow-lg">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gradient-to-r from-sky-500 to-indigo-500 text-white">
          <tr>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">ID</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">First Name</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Last Name</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Email</th>
            <th class="px-6 py-4 text-sm font-semibold uppercase tracking-wider">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
          <?php foreach (html_escape($users) as $user): ?>
          <tr class="hover:bg-emerald-50 transition duration-200">
            <td class="px-6 py-4 text-sm font-medium text-slate-800"><?= $user['id']; ?></td>
            <td class="px-6 py-4 text-sm text-slate-600"><?= $user['first_name']; ?></td>
            <td class="px-6 py-4 text-sm text-slate-600"><?= $user['last_name']; ?></td>
            <td class="px-6 py-4 text-sm break-all text-sky-700"><?= $user['email']; ?></td>
            <td class="px-6 py-4 text-sm flex gap-2">
              <a href="<?=site_url('students/update/'.$user['id']);?>"
                 class="px-4 py-2 bg-sky-100 text-sky-700 rounded-xl font-semibold border border-sky-300 hover:bg-sky-200 hover:text-sky-900 transition">
                 Update
              </a>
              <a href="<?=site_url('students/delete/'.$user['id']);?>"
                 onclick="return confirm('Are you sure you want to delete this record?');"
                 class="px-4 py-2 bg-red-100 text-red-600 rounded-xl font-semibold border border-red-300 hover:bg-red-200 hover:text-red-800 transition">
                 Delete
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
          <!-- PAGINATION -->
      <div class="mt-4 flex justify-center">
        <?=$page ?? ''?>
    </div>
  </div>

</body>
</html>
