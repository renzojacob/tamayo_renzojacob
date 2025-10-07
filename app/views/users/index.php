<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">

  <!-- Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    body {
      background: url('https://i.pinimg.com/originals/0e/68/f9/0e68f9c5a9f2b09902f7cda06b2e7fcb.gif') no-repeat center center fixed;
      background-size: cover;
    }
    .glass {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.25);
    }
    .pagination {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 1.5rem;
    }
    .pagination a {
      display: inline-block;
      padding: 0.5rem 1rem;
      background-color: #ec4899;
      color: white;
      border-radius: 0.5rem;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .pagination a:hover {
      background-color: #db2777;
      transform: scale(1.05);
    }
    .pagination strong {
      display: inline-block;
      padding: 0.5rem 1rem;
      background-color: #06b6d4;
      color: white;
      border-radius: 0.5rem;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }
  </style>
</head>

<body class="font-[Poppins] text-gray-800 min-h-screen flex flex-col">

  <!-- Navbar -->
  <nav class="glass shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="#" class="text-white font-bold text-2xl flex items-center gap-2">
        <i class="fas fa-users-cog text-pink-300"></i> User Management
      </a>
      <a href="<?=site_url('reg/logout');?>"
         class="bg-gradient-to-r from-pink-400 to-pink-600 text-white font-semibold px-5 py-2 rounded-xl shadow hover:scale-105 hover:shadow-lg transition-all duration-200">
         <i class="fas fa-sign-out-alt mr-2"></i>Logout
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="flex-grow flex items-center justify-center py-10 px-4">
    <div class="glass max-w-6xl w-full rounded-3xl p-8 shadow-2xl text-white">

      <!-- Logged In User Display -->
      <?php if(!empty($logged_in_user)): ?>
        <div class="mb-10 text-center">
          <h2 class="text-4xl font-extrabold mb-2 tracking-wide text-pink-300 animate-pulse">
            Welcome, <?= html_escape($logged_in_user['username']); ?> 🎉
          </h2>
          <p class="text-xl text-blue-200">
            <i class="fas fa-user-tag mr-2"></i>Role: 
            <span class="font-semibold"><?= html_escape($logged_in_user['role']); ?></span>
          </p>
        </div>
      <?php else: ?>
        <div class="mb-6 bg-red-500/30 text-white px-4 py-3 rounded-xl text-center shadow-md">
          <i class="fas fa-exclamation-triangle mr-2"></i> Logged in user not found
        </div>
      <?php endif; ?>

      <!-- Header -->
      <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
        <h1 class="text-3xl font-semibold text-pink-300 flex items-center gap-2">
          <i class="fas fa-address-book"></i> User Directory
        </h1>

        <!-- Search Bar -->
        <form method="get" action="<?=site_url('users');?>" class="flex w-full md:w-auto">
          <input 
            type="text" 
            name="q" 
            value="<?=html_escape($_GET['q'] ?? '')?>" 
            placeholder="Search user..." 
            class="w-full md:w-64 border border-pink-300 bg-white/20 text-white placeholder-gray-200 rounded-l-xl px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400">
          <button type="submit" class="bg-pink-500 hover:bg-pink-600 px-4 rounded-r-xl transition">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>
      
      <!-- Table -->
      <div class="overflow-x-auto rounded-2xl border border-white/30">
        <table class="w-full text-center border-collapse text-white">
          <thead>
            <tr class="bg-gradient-to-r from-pink-500 to-pink-700 text-white uppercase text-sm tracking-wide">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Username</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4">Role</th>
              <th class="py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/20">
            <?php foreach(html_escape($users) as $user): ?>
              <tr class="hover:bg-white/10 transition duration-300">
                <td class="py-3 px-4"><?=($user['id']);?></td>
                <td class="py-3 px-4 font-medium"><?=($user['username']);?></td>
                <td class="py-3 px-4">
                  <span class="bg-white/20 text-white text-sm px-3 py-1 rounded-full">
                    <?=($user['email']);?>
                  </span>
                </td>
                <td class="py-3 px-4"><?=($user['role']);?></td>
                <td class="py-3 px-4 space-x-3">
                  <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                    <a href="<?=site_url('users/update/'.$user['id']);?>"
                       class="px-3 py-2 text-sm rounded-lg bg-blue-500 hover:bg-blue-600 text-white shadow-md hover:scale-105 transition duration-200">
                      <i class="fas fa-edit"></i> Update
                    </a>
                  <?php endif; ?>

                  <?php if($logged_in_user['role'] === 'admin'): ?>
                    <a href="<?=site_url('users/delete/'.$user['id']);?>"
                       onclick="return confirm('Are you sure you want to delete this record?');"
                       class="px-3 py-2 text-sm rounded-lg bg-red-500 hover:bg-red-600 text-white shadow-md hover:scale-105 transition duration-200">
                      <i class="fas fa-trash-alt"></i> Delete
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
           class="inline-block bg-gradient-to-r from-pink-500 to-pink-700 hover:scale-105 hover:shadow-lg text-white font-medium px-8 py-3 rounded-full shadow-md transition duration-300">
          <i class="fas fa-user-plus mr-2"></i>Create New User
        </a>
      </div>

    </div>
  </main>
</body>
</html>
