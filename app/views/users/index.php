<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory | Corporate Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    * {
      font-family: 'Inter', sans-serif;
    }
    
    body {
      background-image: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    
    .glass-effect {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .card-hover {
      transition: all 0.3s ease;
    }
    
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .role-badge {
      display: inline-flex;
      align-items: center;
      padding: 0.25rem 0.75rem;
      border-radius: 50px;
      font-size: 0.75rem;
      font-weight: 600;
    }
    
    .pagination {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 1.5rem;
    }
    
    .pagination a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.5rem 1rem;
      background-color: #3b82f6;
      color: white;
      border-radius: 0.5rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s ease-in-out;
    }
    
    .pagination a:hover {
      background-color: #2563eb;
      transform: translateY(-2px);
    }
    
    .pagination strong {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.5rem 1rem;
      background-color: #1d4ed8;
      color: white;
      border-radius: 0.5rem;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .fade-in {
      animation: fadeIn 0.5s ease-in-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .user-card {
      animation: fadeIn 0.5s ease-in-out;
    }
    
    .stats-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }
    
    .stats-card:nth-child(2) {
      background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    
    .stats-card:nth-child(3) {
      background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .stats-card:nth-child(4) {
      background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    }
  </style>
</head>

<body class="min-h-screen text-gray-800">

  <!-- Navbar -->
  <nav class="glass-effect shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <div class="bg-blue-600 p-2 rounded-lg">
          <i class="fas fa-users text-white text-xl"></i>
        </div>
        <a href="#" class="text-xl font-bold text-gray-800">Corporate User Management</a>
      </div>
      
      <div class="flex items-center space-x-4">
        <div class="hidden md:flex items-center space-x-1 text-gray-600">
          <i class="fas fa-user-circle"></i>
          <span><?= html_escape($logged_in_user['username'] ?? 'User'); ?></span>
        </div>
        <a href="<?=site_url('reg/logout');?>" 
           class="flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium px-4 py-2 rounded-lg shadow hover:shadow-lg transition-all duration-300">
           <i class="fas fa-sign-out-alt"></i>
           <span>Logout</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto py-8 px-4">
    <div class="glass-effect rounded-2xl shadow-xl overflow-hidden fade-in">
      
      <!-- Welcome Section -->
      <?php if(!empty($logged_in_user)): ?>
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-8">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
              <h2 class="text-3xl font-bold mb-2">Welcome back, <?= html_escape($logged_in_user['username']); ?>!</h2>
              <p class="text-blue-100 text-lg">Role: <span class="font-semibold"><?= html_escape($logged_in_user['role']); ?></span></p>
            </div>
            <div class="mt-4 md:mt-0">
              <div class="flex items-center space-x-2 bg-white bg-opacity-20 rounded-lg px-4 py-2">
                <i class="fas fa-calendar-day"></i>
                <span><?= date('l, F j, Y'); ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded-lg shadow text-center">
          Logged in user not found
        </div>
      <?php endif; ?>

      <!-- Statistics Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-8">
        <div class="stats-card rounded-xl p-6 shadow-lg">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-blue-100 text-sm font-medium">Total Users</p>
              <h3 class="text-2xl font-bold mt-1"><?= count($users); ?></h3>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
              <i class="fas fa-users text-white text-xl"></i>
            </div>
          </div>
        </div>
        
        <div class="stats-card rounded-xl p-6 shadow-lg">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-pink-100 text-sm font-medium">Admin Users</p>
              <h3 class="text-2xl font-bold mt-1">
                <?php
                  $adminCount = 0;
                  foreach($users as $user) {
                    if($user['role'] === 'admin') $adminCount++;
                  }
                  echo $adminCount;
                ?>
              </h3>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
              <i class="fas fa-user-shield text-white text-xl"></i>
            </div>
          </div>
        </div>
        
        <div class="stats-card rounded-xl p-6 shadow-lg">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-cyan-100 text-sm font-medium">Active Today</p>
              <h3 class="text-2xl font-bold mt-1">
                <?php
                  $activeCount = rand(3, count($users));
                  echo $activeCount;
                ?>
              </h3>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
              <i class="fas fa-user-check text-white text-xl"></i>
            </div>
          </div>
        </div>
        
        <div class="stats-card rounded-xl p-6 shadow-lg">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-green-100 text-sm font-medium">New This Week</p>
              <h3 class="text-2xl font-bold mt-1">
                <?php
                  $newCount = rand(1, 5);
                  echo $newCount;
                ?>
              </h3>
            </div>
            <div class="bg-white bg-opacity-20 p-3 rounded-full">
              <i class="fas fa-user-plus text-white text-xl"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Search and Actions Bar -->
      <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 p-8 pb-4">
        <div>
          <h1 class="text-2xl font-bold text-gray-800 flex items-center">
            <i class="fas fa-address-book mr-3 text-blue-500"></i>
            User Directory
          </h1>
          <p class="text-gray-600 mt-1">Manage all users in your organization</p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
          <!-- Search Bar -->
          <form method="get" action="<?=site_url('users');?>" class="flex w-full sm:w-64">
            <div class="relative flex-grow">
              <input 
                type="text" 
                name="q" 
                value="<?=html_escape($_GET['q'] ?? '')?>" 
                placeholder="Search users..." 
                class="w-full border border-gray-300 bg-white rounded-l-xl px-4 py-3 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-800">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400"></i>
              </div>
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 rounded-r-xl transition-all duration-300 flex items-center">
              <i class="fas fa-search"></i>
            </button>
          </form>
          
          <!-- Create User Button -->
          <a href="<?=site_url('users/create')?>"
             class="bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-medium px-5 py-3 rounded-xl shadow-md transition-all duration-300 flex items-center justify-center space-x-2">
            <i class="fas fa-user-plus"></i>
            <span>Create User</span>
          </a>
        </div>
      </div>

      <!-- User Cards Grid -->
      <div class="p-8 pt-4">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
          <?php foreach(html_escape($users) as $user): ?>
            <div class="user-card bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden card-hover">
              <!-- Card Header with Gradient -->
              <div class="h-2 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
              
              <div class="p-6">
                <!-- User Info -->
                <div class="flex justify-between items-start mb-4">
                  <div>
                    <h3 class="text-xl font-bold text-gray-800"><?=($user['username']);?></h3>
                    <p class="text-gray-500 text-sm mt-1">ID: #<?=($user['id']);?></p>
                  </div>
                  
                  <!-- Role Badge -->
                  <?php
                    $roleColor = 'bg-gray-100 text-gray-800';
                    if($user['role'] === 'admin') {
                      $roleColor = 'bg-red-100 text-red-800';
                    } elseif($user['role'] === 'manager') {
                      $roleColor = 'bg-purple-100 text-purple-800';
                    } elseif($user['role'] === 'editor') {
                      $roleColor = 'bg-blue-100 text-blue-800';
                    }
                  ?>
                  <span class="role-badge <?= $roleColor; ?>">
                    <i class="fas fa-user-tag mr-1"></i>
                    <?=($user['role']);?>
                  </span>
                </div>
                
                <!-- Email -->
                <div class="flex items-center mb-6">
                  <div class="bg-blue-50 p-2 rounded-lg mr-3">
                    <i class="fas fa-envelope text-blue-500"></i>
                  </div>
                  <p class="text-gray-700"><?=($user['email']);?></p>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex justify-between">
                  <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                    <a href="<?=site_url('users/update/'.$user['id']);?>"
                       class="flex items-center space-x-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-lg hover:bg-blue-200 transition-all duration-300">
                      <i class="fas fa-edit"></i>
                      <span>Update</span>
                    </a>
                  <?php endif; ?>

                  <?php if($logged_in_user['role'] === 'admin'): ?>
                    <a href="<?=site_url('users/delete/'.$user['id']);?>"
                       onclick="return confirm('Are you sure you want to delete this user?');"
                       class="flex items-center space-x-2 bg-red-100 text-red-700 px-4 py-2 rounded-lg hover:bg-red-200 transition-all duration-300">
                      <i class="fas fa-trash-alt"></i>
                      <span>Delete</span>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Pagination -->
      <div class="p-8 pt-4">
        <div class="pagination">
          <?= $page; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white mt-12">
    <div class="max-w-7xl mx-auto px-6 py-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center space-x-2 mb-4 md:mb-0">
          <div class="bg-blue-600 p-2 rounded-lg">
            <i class="fas fa-users text-white"></i>
          </div>
          <span class="text-lg font-semibold">Corporate User Management</span>
        </div>
        <div class="text-gray-400 text-sm">
          &copy; <?= date('Y'); ?> All rights reserved.
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Add fade-in animation to user cards
    document.addEventListener('DOMContentLoaded', function() {
      const userCards = document.querySelectorAll('.user-card');
      userCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
      });
    });
  </script>
</body>
</html>