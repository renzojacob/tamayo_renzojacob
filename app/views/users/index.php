<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory | Admin Panel</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
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
      background-color: #6366f1;
      color: white;
      border-radius: 0.5rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s ease-in-out;
    }
    .pagination a:hover {
      background-color: #4f46e5;
      transform: translateY(-2px);
    }
    .pagination strong {
      display: inline-block;
      padding: 0.5rem 1rem;
      background-color: #10b981;
      color: white;
      border-radius: 0.5rem;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    /* Background pattern */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDM0djJoLTR2LTJoLTR2LTJoNHYtMmg0djJoNHYyaC00em0wLTE0djJoLTR2LTJoLTR2LTJoNHYtMmg0djJoNHYyaC00eiIvPjwvZz48L2c+PC9zdmc+');
      z-index: -1;
    }
    
    /* Glass morphism effect */
    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    /* Table row hover effect */
    .table-row {
      transition: all 0.2s ease;
    }
    .table-row:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>

<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen font-sans text-gray-800">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-indigo-600 to-purple-600 shadow-lg sticky top-0 z-10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <i class="fas fa-users text-white text-2xl"></i>
        <a href="#" class="text-white font-bold text-xl tracking-wide">User Management System</a>
      </div>
      <!-- Logout button in navbar -->
      <a href="<?=site_url('reg/logout');?>" 
         class="bg-white text-indigo-600 font-semibold px-4 py-2 rounded-lg shadow hover:bg-gray-100 transition flex items-center space-x-2">
         <i class="fas fa-sign-out-alt"></i>
         <span>Logout</span>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto mt-10 px-4 pb-10">

    <!-- Welcome Card -->
    <?php if(!empty($logged_in_user)): ?>
      <div class="glass-card rounded-2xl p-6 mb-8 shadow-xl border border-white">
        <div class="flex items-center justify-between">
          <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-1">
              Welcome back, <span class="text-indigo-600"><?= html_escape($logged_in_user['username']); ?></span>!
            </h2>
            <p class="text-lg text-gray-600 flex items-center">
              <i class="fas fa-user-tag mr-2 text-purple-500"></i>
              Role: <span class="font-semibold ml-1"><?= html_escape($logged_in_user['role']); ?></span>
            </p>
          </div>
          <div class="bg-gradient-to-r from-indigo-500 to-purple-500 p-4 rounded-full shadow-lg">
            <i class="fas fa-user-circle text-white text-4xl"></i>
          </div>
        </div>
      </div>
    <?php else: ?>
      <div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded-lg shadow text-center">
        Logged in user not found
      </div>
    <?php endif; ?>

    <!-- Main Card -->
    <div class="glass-card rounded-2xl shadow-2xl overflow-hidden border border-white">
      
      <!-- Card Header -->
      <div class="bg-gradient-to-r from-indigo-500 to-purple-500 p-6 text-white">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <div class="flex items-center mb-4 md:mb-0">
            <i class="fas fa-address-book text-2xl mr-3"></i>
            <h1 class="text-2xl font-bold">User Directory</h1>
          </div>

          <!-- Search Bar -->
          <form method="get" action="<?=site_url('users');?>" class="flex w-full md:w-auto">
            <div class="relative w-full">
              <input 
                type="text" 
                name="q" 
                value="<?=html_escape($_GET['q'] ?? '')?>" 
                placeholder="Search users..." 
                class="w-full pl-10 pr-4 py-3 rounded-l-xl bg-white bg-opacity-90 text-gray-800 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400"></i>
              </div>
            </div>
            <button type="submit" class="bg-indigo-700 hover:bg-indigo-800 text-white px-5 rounded-r-xl transition flex items-center">
              <span class="hidden md:inline">Search</span>
              <i class="fas fa-search ml-2"></i>
            </button>
          </form>
        </div>
      </div>
      
      <!-- Table Container -->
      <div class="p-6">
        <div class="overflow-x-auto rounded-xl border border-gray-200">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-gradient-to-r from-indigo-100 to-purple-100 text-gray-700">
                <th class="py-4 px-6 font-semibold uppercase text-sm">
                  <i class="fas fa-hashtag mr-2"></i>ID
                </th>
                <th class="py-4 px-6 font-semibold uppercase text-sm">
                  <i class="fas fa-user mr-2"></i>Username
                </th>
                <th class="py-4 px-6 font-semibold uppercase text-sm">
                  <i class="fas fa-envelope mr-2"></i>Email
                </th>
                <th class="py-4 px-6 font-semibold uppercase text-sm">
                  <i class="fas fa-user-tag mr-2"></i>Role
                </th>
                <th class="py-4 px-6 font-semibold uppercase text-sm text-center">
                  <i class="fas fa-cogs mr-2"></i>Actions
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <?php foreach(html_escape($users) as $user): ?>
                <tr class="table-row bg-white hover:bg-indigo-50 transition duration-200">
                  <td class="py-4 px-6 font-medium text-indigo-600">
                    #<?=($user['id']);?>
                  </td>
                  <td class="py-4 px-6">
                    <div class="flex items-center">
                      <div class="bg-indigo-100 p-2 rounded-full mr-3">
                        <i class="fas fa-user text-indigo-500"></i>
                      </div>
                      <span class="font-medium"><?=($user['username']);?></span>
                    </div>
                  </td>
                  <td class="py-4 px-6">
                    <div class="flex items-center">
                      <div class="bg-purple-100 p-2 rounded-full mr-3">
                        <i class="fas fa-envelope text-purple-500"></i>
                      </div>
                      <span class="text-gray-700"><?=($user['email']);?></span>
                    </div>
                  </td>
                  <td class="py-4 px-6">
                    <?php if($user['role'] === 'admin'): ?>
                      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                        <i class="fas fa-crown mr-1"></i> Admin
                      </span>
                    <?php else: ?>
                      <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        <i class="fas fa-user mr-1"></i> User
                      </span>
                    <?php endif; ?>
                  </td>
                  <td class="py-4 px-6 text-center">
                    <div class="flex justify-center space-x-2">
                      <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                        <a href="<?=site_url('users/update/'.$user['id']);?>"
                           class="px-4 py-2 text-sm font-medium rounded-lg bg-indigo-500 text-white hover:bg-indigo-600 transition duration-200 shadow flex items-center">
                          <i class="fas fa-edit mr-2"></i> Edit
                        </a>
                      <?php endif; ?>

                      <?php if($logged_in_user['role'] === 'admin'): ?>
                        <a href="<?=site_url('users/delete/'.$user['id']);?>"
                           onclick="return confirm('Are you sure you want to delete this user?');"
                           class="px-4 py-2 text-sm font-medium rounded-lg bg-red-500 text-white hover:bg-red-600 transition duration-200 shadow flex items-center">
                          <i class="fas fa-trash-alt mr-2"></i> Delete
                        </a>
                      <?php endif; ?>
                    </div>
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
        <div class="mt-8 text-center">
          <a href="<?=site_url('users/create')?>"
             class="inline-flex items-center bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-200 transform hover:-translate-y-1">
            <i class="fas fa-user-plus mr-2"></i> Create New User
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-6 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <p class="text-lg font-medium">User Management System &copy; <?= date('Y'); ?></p>
      <p class="text-indigo-200 mt-2">Built with LavaLust Framework</p>
    </div>
  </footer>

</body>
</html>