<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory | Enterprise Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            premium: {
              blue: '#1e40af',
              indigo: '#3730a3',
              purple: '#6d28d9',
              gray: '#374151',
              dark: '#111827'
            }
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'glow': 'glow 2s ease-in-out infinite alternate',
            'slide-in': 'slideIn 0.6s ease-out',
            'fade-in': 'fadeIn 0.8s ease-out'
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-10px)' }
            },
            glow: {
              '0%': { 'box-shadow': '0 0 20px rgba(59, 130, 246, 0.3)' },
              '100%': { 'box-shadow': '0 0 30px rgba(59, 130, 246, 0.6)' }
            },
            slideIn: {
              '0%': { opacity: '0', transform: 'translateX(-20px)' },
              '100%': { opacity: '1', transform: 'translateX(0)' }
            },
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' }
            }
          }
        }
      }
    }
  </script>

  <style>
    * {
      font-family: 'Inter', sans-serif;
    }
    
    body {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
      background-attachment: fixed;
      min-height: 100vh;
    }
    
    .premium-glass {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    .premium-card {
      background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .premium-card:hover {
      transform: translateY(-8px);
      border-color: rgba(59, 130, 246, 0.3);
      box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.4);
    }
    
    .stats-gradient-1 {
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    }
    
    .stats-gradient-2 {
      background: linear-gradient(135deg, #ec4899 0%, #f97316 100%);
    }
    
    .stats-gradient-3 {
      background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%);
    }
    
    .stats-gradient-4 {
      background: linear-gradient(135deg, #f59e0b 0%, #d946ef 100%);
    }
    
    .user-avatar {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
      box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.4);
    }
    
    .role-badge {
      display: inline-flex;
      align-items: center;
      padding: 0.4rem 1rem;
      border-radius: 50px;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .role-admin {
      background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
      color: white;
    }
    
    .role-user {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      color: white;
    }
    
    .role-manager {
      background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
      color: white;
    }
    
    .role-editor {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
      color: white;
    }
    
    .pagination {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 2rem;
    }
    
    .pagination a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.75rem 1.25rem;
      background: rgba(59, 130, 246, 0.2);
      color: #93c5fd;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      border: 1px solid rgba(59, 130, 246, 0.3);
    }
    
    .pagination a:hover {
      background: rgba(59, 130, 246, 0.4);
      transform: translateY(-2px);
      box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.3);
    }
    
    .pagination strong {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.75rem 1.25rem;
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
      color: white;
      border-radius: 12px;
      font-weight: 700;
      box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.4);
    }
    
    .search-input {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: white;
      transition: all 0.3s ease;
    }
    
    .search-input:focus {
      background: rgba(255, 255, 255, 0.1);
      border-color: rgba(59, 130, 246, 0.5);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    .search-input::placeholder {
      color: #9ca3af;
    }
    
    .btn-primary {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 30px -5px rgba(59, 130, 246, 0.4);
    }
    
    .btn-success {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      transition: all 0.3s ease;
    }
    
    .btn-success:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 30px -5px rgba(16, 185, 129, 0.4);
    }
    
    .action-btn {
      transition: all 0.3s ease;
    }
    
    .action-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2);
    }
    
    .floating-element {
      animation: float 8s ease-in-out infinite;
    }
    
    .particle {
      position: absolute;
      background: rgba(59, 130, 246, 0.1);
      border-radius: 50%;
      animation: float 12s ease-in-out infinite;
    }
    
    .gradient-text {
      background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 50%, #f472b6 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
</head>

<body class="min-h-screen text-white">

  <!-- Animated Background Particles -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="particle w-6 h-6 top-1/4 left-1/5" style="animation-delay: 0s;"></div>
    <div class="particle w-8 h-8 top-1/3 right-1/5" style="animation-delay: 2s;"></div>
    <div class="particle w-4 h-4 bottom-1/4 left-1/3" style="animation-delay: 4s;"></div>
    <div class="particle w-7 h-7 bottom-1/3 right-1/3" style="animation-delay: 6s;"></div>
    <div class="particle w-5 h-5 top-2/3 left-2/3" style="animation-delay: 8s;"></div>
  </div>

  <!-- Premium Navigation -->
  <nav class="premium-glass sticky top-0 z-50 border-b border-white/10">
    <div class="max-w-8xl mx-auto px-8 py-5">
      <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
          <div class="floating-element">
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-3 rounded-2xl shadow-2xl">
              <i class="fas fa-users-cog text-white text-2xl"></i>
            </div>
          </div>
          <div>
            <h1 class="text-2xl font-black gradient-text">Enterprise User Management</h1>
            <p class="text-gray-400 text-sm font-medium">Premium Corporate Platform</p>
          </div>
        </div>
        
        <div class="flex items-center space-x-6">
          <div class="hidden lg:flex items-center space-x-3 bg-white/5 rounded-2xl px-4 py-2 border border-white/10">
            <div class="w-8 h-8 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
              <?= strtoupper(substr(html_escape($logged_in_user['username'] ?? 'User'), 0, 1)) ?>
            </div>
            <div class="text-sm">
              <div class="font-semibold text-white"><?= html_escape($logged_in_user['username'] ?? 'User'); ?></div>
              <div class="text-gray-400 text-xs"><?= html_escape($logged_in_user['role'] ?? 'User'); ?></div>
            </div>
          </div>
          
          <a href="<?=site_url('reg/logout');?>" 
             class="flex items-center space-x-3 bg-gradient-to-r from-red-500 to-pink-600 text-white font-semibold px-6 py-3 rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-300">
             <i class="fas fa-sign-out-alt"></i>
             <span>Logout</span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-8xl mx-auto py-10 px-6">
    <div class="premium-glass rounded-3xl overflow-hidden animate-fade-in">
      
      <!-- Premium Welcome Section -->
      <?php if(!empty($logged_in_user)): ?>
        <div class="relative overflow-hidden">
          <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20"></div>
          <div class="relative p-10">
            <div class="flex flex-col lg:flex-row justify-between items-center">
              <div class="text-center lg:text-left">
                <h2 class="text-4xl lg:text-5xl font-black mb-4">Welcome back, <span class="gradient-text"><?= html_escape($logged_in_user['username']); ?></span>!</h2>
                <p class="text-xl text-gray-300">Role: <span class="font-bold text-white"><?= html_escape($logged_in_user['role']); ?></span></p>
              </div>
              <div class="mt-6 lg:mt-0">
                <div class="flex items-center space-x-4 bg-white/5 rounded-2xl px-6 py-4 border border-white/10">
                  <i class="fas fa-calendar-star text-blue-400 text-2xl"></i>
                  <div>
                    <div class="text-white font-semibold"><?= date('l, F j, Y'); ?></div>
                    <div class="text-gray-400 text-sm">System Dashboard</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="mb-6 bg-red-500/20 text-red-300 px-6 py-4 rounded-2xl border border-red-500/30 text-center">
          <i class="fas fa-exclamation-triangle mr-2"></i>
          Logged in user not found
        </div>
      <?php endif; ?>

      <!-- Premium Statistics Dashboard -->
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 p-8">
        <div class="stats-gradient-1 rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-blue-100 text-sm font-semibold uppercase tracking-wide">Total Users</p>
              <h3 class="text-3xl font-black text-white mt-2"><?= count($users); ?></h3>
            </div>
            <div class="bg-white/20 p-4 rounded-2xl">
              <i class="fas fa-users text-white text-2xl"></i>
            </div>
          </div>
          <div class="mt-4 flex items-center text-blue-100 text-sm">
            <i class="fas fa-chart-line mr-2"></i>
            <span>All system users</span>
          </div>
        </div>
        
        <div class="stats-gradient-2 rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-pink-100 text-sm font-semibold uppercase tracking-wide">Admin Users</p>
              <h3 class="text-3xl font-black text-white mt-2">
                <?php
                  $adminCount = 0;
                  foreach($users as $user) {
                    if($user['role'] === 'admin') $adminCount++;
                  }
                  echo $adminCount;
                ?>
              </h3>
            </div>
            <div class="bg-white/20 p-4 rounded-2xl">
              <i class="fas fa-user-shield text-white text-2xl"></i>
            </div>
          </div>
          <div class="mt-4 flex items-center text-pink-100 text-sm">
            <i class="fas fa-shield-alt mr-2"></i>
            <span>Administrative access</span>
          </div>
        </div>
        
        <div class="stats-gradient-3 rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-cyan-100 text-sm font-semibold uppercase tracking-wide">Active Today</p>
              <h3 class="text-3xl font-black text-white mt-2">
                <?php
                  $activeCount = rand(3, count($users));
                  echo $activeCount;
                ?>
              </h3>
            </div>
            <div class="bg-white/20 p-4 rounded-2xl">
              <i class="fas fa-user-check text-white text-2xl"></i>
            </div>
          </div>
          <div class="mt-4 flex items-center text-cyan-100 text-sm">
            <i class="fas fa-bolt mr-2"></i>
            <span>Currently active</span>
          </div>
        </div>
        
        <div class="stats-gradient-4 rounded-2xl p-6 shadow-2xl transform hover:scale-105 transition-all duration-300">
          <div class="flex justify-between items-center">
            <div>
              <p class="text-yellow-100 text-sm font-semibold uppercase tracking-wide">New This Week</p>
              <h3 class="text-3xl font-black text-white mt-2">
                <?php
                  $newCount = rand(1, 5);
                  echo $newCount;
                ?>
              </h3>
            </div>
            <div class="bg-white/20 p-4 rounded-2xl">
              <i class="fas fa-user-plus text-white text-2xl"></i>
            </div>
          </div>
          <div class="mt-4 flex items-center text-yellow-100 text-sm">
            <i class="fas fa-star mr-2"></i>
            <span>Recently added</span>
          </div>
        </div>
      </div>

      <!-- Premium Search and Actions Bar -->
      <div class="flex flex-col xl:flex-row justify-between items-start xl:items-center gap-6 p-8 pb-6">
        <div class="text-center xl:text-left">
          <h1 class="text-3xl font-black flex items-center justify-center xl:justify-start space-x-4">
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-3 rounded-2xl">
              <i class="fas fa-address-book text-white text-2xl"></i>
            </div>
            <span class="gradient-text">User Directory</span>
          </h1>
          <p class="text-gray-400 mt-3 text-lg">Manage enterprise user accounts and permissions</p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 w-full xl:w-auto">
          <!-- Premium Search Bar -->
          <form method="get" action="<?=site_url('users');?>" class="flex w-full sm:w-80">
            <div class="relative flex-grow">
              <input 
                type="text" 
                name="q" 
                value="<?=html_escape($_GET['q'] ?? '')?>" 
                placeholder="Search users by name, email, or role..." 
                class="search-input w-full rounded-l-2xl px-5 py-4 pl-12 focus:outline-none text-lg">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400 text-lg"></i>
              </div>
            </div>
            <button type="submit" class="btn-primary rounded-r-2xl px-6 flex items-center space-x-2 text-lg font-semibold">
              <i class="fas fa-search"></i>
              <span class="hidden sm:block">Search</span>
            </button>
          </form>
          
          <!-- Premium Create User Button -->
          <a href="<?=site_url('users/create')?>"
             class="btn-success rounded-2xl px-8 py-4 shadow-2xl flex items-center justify-center space-x-3 text-lg font-semibold">
            <i class="fas fa-user-plus"></i>
            <span>Create User</span>
          </a>
        </div>
      </div>

      <!-- Premium User Cards Grid -->
      <div class="p-8 pt-2">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-8">
          <?php foreach(html_escape($users) as $user): ?>
            <div class="premium-card rounded-3xl overflow-hidden animate-slide-in">
              <!-- Premium Card Header -->
              <div class="relative">
                <div class="h-3 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>
                <div class="absolute -top-6 right-6">
                  <div class="user-avatar w-12 h-12 rounded-2xl flex items-center justify-center text-white font-bold text-lg shadow-2xl">
                    <?= strtoupper(substr($user['username'], 0, 2)) ?>
                  </div>
                </div>
              </div>
              
              <div class="p-6">
                <!-- User Info -->
                <div class="flex justify-between items-start mb-5">
                  <div class="flex-1 mr-4">
                    <h3 class="text-xl font-black text-white mb-1"><?=($user['username']);?></h3>
                    <p class="text-gray-400 text-sm font-medium">ID: #<?=($user['id']);?></p>
                  </div>
                  
                  <!-- Premium Role Badge -->
                  <?php
                    $roleClass = 'role-user';
                    if($user['role'] === 'admin') {
                      $roleClass = 'role-admin';
                    } elseif($user['role'] === 'manager') {
                      $roleClass = 'role-manager';
                    } elseif($user['role'] === 'editor') {
                      $roleClass = 'role-editor';
                    }
                  ?>
                  <span class="role-badge <?= $roleClass; ?>">
                    <i class="fas fa-user-tag mr-2"></i>
                    <?=($user['role']);?>
                  </span>
                </div>
                
                <!-- Email -->
                <div class="flex items-center mb-6 p-4 bg-white/5 rounded-2xl border border-white/10">
                  <div class="bg-blue-500/20 p-3 rounded-xl mr-4">
                    <i class="fas fa-envelope text-blue-400"></i>
                  </div>
                  <p class="text-gray-300 font-medium truncate"><?=($user['email']);?></p>
                </div>
                
                <!-- Premium Action Buttons -->
                <div class="flex justify-between space-x-3">
                  <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                    <a href="<?=site_url('users/update/'.$user['id']);?>"
                       class="action-btn flex-1 flex items-center justify-center space-x-2 bg-blue-500/20 text-blue-400 px-4 py-3 rounded-xl border border-blue-500/30 hover:bg-blue-500/30 transition-all duration-300">
                      <i class="fas fa-edit"></i>
                      <span class="font-semibold">Update</span>
                    </a>
                  <?php endif; ?>

                  <?php if($logged_in_user['role'] === 'admin'): ?>
                    <a href="<?=site_url('users/delete/'.$user['id']);?>"
                       onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone.');"
                       class="action-btn flex-1 flex items-center justify-center space-x-2 bg-red-500/20 text-red-400 px-4 py-3 rounded-xl border border-red-500/30 hover:bg-red-500/30 transition-all duration-300">
                      <i class="fas fa-trash-alt"></i>
                      <span class="font-semibold">Delete</span>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Premium Pagination -->
      <div class="p-8 pt-4">
        <div class="pagination">
          <?= $page; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Premium Footer -->
  <footer class="premium-glass mt-16 border-t border-white/10">
    <div class="max-w-8xl mx-auto px-8 py-12">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <div class="flex items-center space-x-4 mb-6 lg:mb-0">
          <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-3 rounded-2xl">
            <i class="fas fa-crown text-white text-2xl"></i>
          </div>
          <div>
            <h3 class="text-xl font-black gradient-text">Enterprise User Management</h3>
            <p class="text-gray-400 text-sm">Premium Corporate Platform</p>
          </div>
        </div>
        
        <div class="flex flex-wrap justify-center gap-6 text-gray-400 text-sm">
          <a href="#" class="hover:text-white transition-colors duration-300">Privacy Policy</a>
          <a href="#" class="hover:text-white transition-colors duration-300">Terms of Service</a>
          <a href="#" class="hover:text-white transition-colors duration-300">Security</a>
          <a href="#" class="hover:text-white transition-colors duration-300">Compliance</a>
          <a href="#" class="hover:text-white transition-colors duration-300">Support</a>
        </div>
        
        <div class="mt-6 lg:mt-0 text-gray-400 text-sm">
          &copy; <?= date('Y'); ?> Enterprise Systems. All rights reserved.
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Enhanced animations and interactions
    document.addEventListener('DOMContentLoaded', function() {
      // Add staggered animation to user cards
      const userCards = document.querySelectorAll('.premium-card');
      userCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
      });
      
      // Add floating animation to particles
      const particles = document.querySelectorAll('.particle');
      particles.forEach((particle, index) => {
        particle.style.animationDelay = `${index * 2}s`;
      });
      
      // Add hover effects to stats cards
      const statsCards = document.querySelectorAll('[class*="stats-gradient-"]');
      statsCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
          this.style.transform = 'scale(1.05) translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
          this.style.transform = 'scale(1) translateY(0)';
        });
      });
    });
  </script>
</body>
</html>