<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

  <style>
    body {
      background: url('https://i.pinimg.com/originals/62/85/3d/62853d6d7c85b943c03eab72d17cb48b.gif') no-repeat center center fixed;
      background-size: cover;
    }
    .glass {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.25);
    }
    .pagination a, .pagination strong {
      transition: all 0.3s ease;
    }
  </style>
</head>

<body class="min-h-screen font-[Poppins] text-gray-100">

  <!-- Navbar -->
  <nav class="glass fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="#" class="flex items-center gap-2 text-xl font-bold tracking-wide text-white">
        <i class="ri-team-fill text-pink-300 text-2xl"></i> User Management
      </a>
      <a href="<?=site_url('reg/logout');?>" 
         class="bg-gradient-to-r from-pink-400 to-pink-600 text-white px-4 py-2 rounded-lg shadow hover:scale-105 transition transform duration-200 flex items-center gap-1">
         <i class="ri-logout-box-line"></i> Logout
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-6xl mx-auto mt-28 mb-10 px-4">
    <div class="glass rounded-3xl p-8 shadow-2xl text-gray-900">

      <!-- Logged In User -->
      <?php if(!empty($logged_in_user)): ?>
        <div class="mb-10 text-center text-white">
          <h2 class="text-4xl font-extrabold drop-shadow-lg mb-2">
            👋 Welcome, <span class="text-pink-300"><?= html_escape($logged_in_user['username']); ?></span>
          </h2>
          <p class="text-lg bg-pink-500/30 inline-block px-5 py-1 rounded-full shadow-md">
            <i class="ri-user-star-fill"></i> Role: <?= html_escape($logged_in_user['role']); ?>
          </p>
        </div>
      <?php else: ?>
        <div class="mb-6 bg-red-200 text-red-800 px-4 py-3 rounded-lg shadow text-center">
          Logged in user not found.
        </div>
      <?php endif; ?>

      <!-- Header + Search -->
      <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
        <h1 class="text-3xl font-semibold text-pink-200 flex items-center gap-2">
          <i class="ri-contacts-book-2-line"></i> User Directory
        </h1>
        <form method="get" action="<?=site_url('users');?>" class="flex w-full sm:w-auto">
          <input 
            type="text" 
            name="q" 
            value="<?=html_escape($_GET['q'] ?? '')?>" 
            placeholder="Search user..." 
            class="w-full sm:w-72 bg-white/20 text-white placeholder-gray-200 rounded-l-xl px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400 border border-white/30">
          <button type="submit" class="bg-gradient-to-r from-pink-400 to-pink-600 text-white px-4 rounded-r-xl transition hover:scale-105 flex items-center">
            <i class="ri-search-line text-lg"></i>
          </button>
        </form>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto rounded-xl border border-white/30 shadow-lg">
        <table class="w-full text-center border-collapse text-white">
          <thead>
            <tr class="bg-gradient-to-r from-pink-500/60 to-blue-400/60 text-white">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Username</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4">Role</th>
              <th class="py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/20">
            <?php foreach(html_escape($users) as $user): ?>
              <tr class="hover:bg-white/20 transition duration-200">
                <td class="py-3 px-4"><?=($user['id']);?></td>
                <td class="py-3 px-4 font-semibold"><?=($user['username']);?></td>
                <td class="py-3 px-4">
                  <span class="bg-white/20 px-3 py-1 rounded-full text-sm shadow-md">
                    <?=($user['email']);?>
                  </span>
                </td>
                <td class="py-3 px-4"><?=($user['role']);?></td>
                <td class="py-3 px-4 flex justify-center gap-3">
                  <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                    <a href="<?=site_url('users/update/'.$user['id']);?>"
                       class="flex items-center gap-1 px-4 py-2 rounded-lg bg-gradient-to-r from-blue-400 to-blue-500 hover:scale-105 transition text-white shadow">
                      <i class="ri-edit-2-fill"></i> Update
                    </a>
                  <?php endif; ?>

                  <?php if($logged_in_user['role'] === 'admin'): ?>
                    <a href="<?=site_url('users/delete/'.$user['id']);?>"
                       onclick="return confirm('Are you sure you want to delete this record?');"
                       class="flex items-center gap-1 px-4 py-2 rounded-lg bg-gradient-to-r from-red-500 to-pink-600 hover:scale-105 transition text-white shadow">
                      <i class="ri-delete-bin-5-line"></i> Delete
                    </a>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-8 flex justify-center">
        <div class="pagination">
          <?= $page; ?>
        </div>
      </div>

      <!-- Create New User -->
      <div class="mt-10 text-center">
        <a href="<?=site_url('users/create')?>"
           class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-400 to-pink-600 hover:scale-105 text-white font-medium px-6 py-3 rounded-full shadow-lg transition duration-300">
          <i class="ri-user-add-fill"></i> Create New User
        </a>
      </div>
    </div>
  </div>

</body>
</html>
