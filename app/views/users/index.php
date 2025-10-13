<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory | Premium Dashboard</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    * {
      font-family: 'Inter', sans-serif;
    }
    
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
    }
    
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url('https://images.unsplash.com/photo-1558591710-4b4a1ae0f04d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80');
      background-size: cover;
      background-position: center;
      opacity: 0.15;
      z-index: -1;
    }
    
    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    }
    
    .user-card {
      transition: all 0.3s ease;
      transform: translateY(0);
    }
    
    .user-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .role-badge {
      position: relative;
      overflow: hidden;
    }
    
    .role-badge::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.5s;
    }
    
    .role-badge:hover::before {
      left: 100%;
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
      background-color: rgba(255, 255, 255, 0.2);
      color: white;
      border-radius: 0.5rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .pagination a:hover {
      background-color: rgba(255, 255, 255, 0.3);
      transform: translateY(-2px);
    }
    
    .pagination strong {
      display: inline-block;
      padding: 0.5rem 1rem;
      background-color: rgba(255, 255, 255, 0.4);
      color: white;
      border-radius: 0.5rem;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      border: 1px solid rgba(255, 255, 255, 0.5);
    }
    
    .floating-element {
      animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    
    .search-box {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .stat-card {
      transition: all 0.3s ease;
    }
    
    .stat-card:hover {
      transform: scale(1.03);
    }
    
    .fade-in {
      animation: fadeIn 0.8s ease-in;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .stagger-animation > * {
      opacity: 0;
      animation: fadeIn 0.5s ease-in forwards;
    }
    
    .stagger-animation > *:nth-child(1) { animation-delay: 0.1s; }
    .stagger-animation > *:nth-child(2) { animation-delay: 0.2s; }
    .stagger-animation > *:nth-child(3) { animation-delay: 0.3s; }
    .stagger-animation > *:nth-child(4) { animation-delay: 0.4s; }
    .stagger-animation > *:nth-child(5) { animation-delay: 0.5s; }
    .stagger-animation > *:nth-child(6) { animation-delay: 0.6s; }
    
    .gradient-text {
      background: linear-gradient(90deg, #ff7eee, #a97dff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
</head>

<body class="min-h-screen text-white">

  <!-- Animated Background Elements -->
  <div class="fixed top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute top-10 left-10 w-20 h-20 rounded-full bg-purple-400 opacity-20 floating-element"></div>
    <div class="absolute top-1/4 right-20 w-16 h-16 rounded-full bg-pink-400 opacity-30 floating-element" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-1/3 left-1/4 w-24 h-24 rounded-full bg-blue-400 opacity-20 floating-element" style="animation-delay: 2s;"></div>
    <div class="absolute bottom-20 right-1/4 w-12 h-12 rounded-full bg-indigo-400 opacity-30 floating-element" style="animation-delay: 3s;"></div>
  </div>

  <!-- Navbar -->
  <nav class="glass-card sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <div class="p-2 bg-white bg-opacity-20 rounded-lg">
          <i class="fas fa-users text-white text-xl"></i>
        </div>
        <a href="#" class="text-white font-bold text-2xl tracking-wide">UserSphere</a>
      </div>
      
      <div class="flex items-center space-x-4">
        <div class="hidden md:flex items-center space-x-2 bg-white bg-opacity-10 px-4 py-2 rounded-full">
          <i class="fas fa-user-circle text-white"></i>
          <span class="text-white font-medium"><?= html_escape($logged_in_user['username'] ?? 'Admin'); ?></span>
        </div>
        <a href="<?=site_url('reg/logout');?>" 
           class="bg-white bg-opacity-20 text-white font-semibold px-4 py-2 rounded-lg hover:bg-opacity-30 transition-all flex items-center space-x-2">
           <i class="fas fa-sign-out-alt"></i>
           <span>Logout</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 py-8 relative z-10">
    
    <!-- Welcome Section -->
    <?php if(!empty($logged_in_user)): ?>
      <div class="glass-card rounded-2xl p-8 mb-8 fade-in text-center">
        <h1 class="text-4xl font-bold mb-2 gradient-text">Welcome Back, <?= html_escape($logged_in_user['username']); ?>!</h1>
        <p class="text-xl text-white text-opacity-80">Role: <span class="font-semibold"><?= html_escape($logged_in_user['role']); ?></span></p>
      </div>
    <?php else: ?>
      <div class="glass-card rounded-2xl p-8 mb-8 text-center bg-red-500 bg-opacity-20">
        <h2 class="text-2xl font-bold">Logged in user not found</h2>
      </div>
    <?php endif; ?>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8 stagger-animation">
      <div class="stat-card glass-card rounded-2xl p-6 flex items-center justify-between">
        <div>
          <p class="text-white text-opacity-70 text-sm">Total Users</p>
          <h3 class="text-3xl font-bold"><?= count($users); ?></h3>
        </div>
        <div class="bg-white bg-opacity-20 p-3 rounded-full">
          <i class="fas fa-users text-white text-2xl"></i>
        </div>
      </div>
      
      <div class="stat-card glass-card rounded-2xl p-6 flex items-center justify-between">
        <div>
          <p class="text-white text-opacity-70 text-sm">Admins</p>
          <h3 class="text-3xl font-bold">
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
          <i class="fas fa-user-shield text-white text-2xl"></i>
        </div>
      </div>
      
      <div class="stat-card glass-card rounded-2xl p-6 flex items-center justify-between">
        <div>
          <p class="text-white text-opacity-70 text-sm">Editors</p>
          <h3 class="text-3xl font-bold">
            <?php 
              $editorCount = 0;
              foreach($users as $user) {
                if($user['role'] === 'editor') $editorCount++;
              }
              echo $editorCount;
            ?>
          </h3>
        </div>
        <div class="bg-white bg-opacity-20 p-3 rounded-full">
          <i class="fas fa-user-edit text-white text-2xl"></i>
        </div>
      </div>
      
      <div class="stat-card glass-card rounded-2xl p-6 flex items-center justify-between">
        <div>
          <p class="text-white text-opacity-70 text-sm">Viewers</p>
          <h3 class="text-3xl font-bold">
            <?php 
              $viewerCount = 0;
              foreach($users as $user) {
                if($user['role'] === 'viewer') $viewerCount++;
              }
              echo $viewerCount;
            ?>
          </h3>
        </div>
        <div class="bg-white bg-opacity-20 p-3 rounded-full">
          <i class="fas fa-user text-white text-2xl"></i>
        </div>
      </div>
    </div>

    <!-- Search and Actions -->
    <div class="glass-card rounded-2xl p-6 mb-8 fade-in">
      <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <h2 class="text-2xl font-bold flex items-center">
          <i class="fas fa-user-friends mr-3"></i>
          User Directory
        </h2>
        
        <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-4 w-full md:w-auto">
          <!-- Search Bar -->
          <form method="get" action="<?=site_url('users');?>" class="flex w-full md:w-auto">
            <div class="relative w-full">
              <input 
                type="text" 
                name="q" 
                value="<?=html_escape($_GET['q'] ?? '')?>" 
                placeholder="Search users..." 
                class="w-full search-box rounded-l-xl pl-12 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 text-white placeholder-white placeholder-opacity-70">
              <div class="absolute left-4 top-3.5 text-white text-opacity-70">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <button type="submit" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-6 rounded-r-xl transition-all flex items-center">
              <span class="hidden md:inline">Search</span>
              <i class="fas fa-arrow-right ml-2"></i>
            </button>
          </form>
          
          <!-- Create New User Button -->
          <a href="<?=site_url('users/create')?>"
             class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-medium px-6 py-3 rounded-xl transition-all flex items-center justify-center space-x-2">
            <i class="fas fa-plus"></i>
            <span>New User</span>
          </a>
        </div>
      </div>
    </div>

    <!-- User Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 stagger-animation">
      <?php foreach($users as $user): ?>
        <div class="user-card glass-card rounded-2xl overflow-hidden">
          <!-- Card Header with Gradient -->
          <div class="h-2 bg-gradient-to-r from-purple-500 to-pink-500"></div>
          
          <div class="p-6">
            <!-- User Info -->
            <div class="flex items-start justify-between mb-4">
              <div>
                <h3 class="text-xl font-bold"><?= html_escape($user['username']); ?></h3>
                <p class="text-white text-opacity-70 text-sm">ID: #<?= html_escape($user['id']); ?></p>
              </div>
              
              <!-- Role Badge -->
              <div class="role-badge px-3 py-1 rounded-full text-sm font-medium 
                <?php 
                  if($user['role'] === 'admin') echo 'bg-red-500 bg-opacity-20 text-red-200';
                  elseif($user['role'] === 'editor') echo 'bg-blue-500 bg-opacity-20 text-blue-200';
                  else echo 'bg-green-500 bg-opacity-20 text-green-200';
                ?>">
                <?= html_escape($user['role']); ?>
              </div>
            </div>
            
            <!-- Email -->
            <div class="flex items-center mb-6">
              <div class="bg-white bg-opacity-10 p-2 rounded-lg mr-3">
                <i class="fas fa-envelope text-white text-opacity-70"></i>
              </div>
              <p class="text-white text-opacity-90"><?= html_escape($user['email']); ?></p>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex justify-between">
              <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                <a href="<?=site_url('users/update/'.$user['id']);?>"
                   class="bg-white bg-opacity-10 hover:bg-opacity-20 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition-all">
                  <i class="fas fa-edit"></i>
                  <span>Update</span>
                </a>
              <?php endif; ?>

              <?php if($logged_in_user['role'] === 'admin'): ?>
                <a href="<?=site_url('users/delete/'.$user['id']);?>"
                   onclick="return confirm('Are you sure you want to delete this user?');"
                   class="bg-red-500 bg-opacity-20 hover:bg-opacity-30 text-red-200 px-4 py-2 rounded-lg flex items-center space-x-2 transition-all">
                  <i class="fas fa-trash-alt"></i>
                  <span>Delete</span>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-12 fade-in">
      <div class="pagination">
        <?= $page; ?>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-16 py-6 text-center text-white text-opacity-70">
    <p>User Management System &copy; <?= date('Y'); ?> | Premium Dashboard Design</p>
  </footer>

  <script>
    // Add staggered animation to user cards
    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.user-card');
      cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
      });
      
      // Add hover effect to stat cards
      const statCards = document.querySelectorAll('.stat-card');
      statCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
          this.style.transform = 'scale(1.03)';
        });
        
        card.addEventListener('mouseleave', function() {
          this.style.transform = 'scale(1)';
        });
      });
    });
  </script>
</body>
</html>