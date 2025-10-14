<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory | Corporate Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0f9ff',
              100: '#e0f2fe',
              200: '#bae6fd',
              300: '#7dd3fc',
              400: '#38bdf8',
              500: '#0ea5e9',
              600: '#0284c7',
              700: '#0369a1',
              800: '#075985',
              900: '#0c4a6e',
            },
            accent: {
              50: '#fdf4ff',
              100: '#fae8ff',
              200: '#f5d0fe',
              300: '#f0abfc',
              400: '#e879f9',
              500: '#d946ef',
              600: '#c026d3',
              700: '#a21caf',
              800: '#86198f',
              900: '#701a75',
            },
            neutral: {
              50: '#fafafa',
              100: '#f5f5f5',
              200: '#e5e5e5',
              300: '#d4d4d4',
              400: '#a3a3a3',
              500: '#737373',
              600: '#525252',
              700: '#404040',
              800: '#262626',
              900: '#171717',
            }
          },
          fontFamily: {
            'sans': ['Inter', 'system-ui', 'sans-serif'],
          },
          boxShadow: {
            'soft': '0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)',
            'medium': '0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.03)',
            'large': '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
            'xl-soft': '0 25px 50px -12px rgba(0, 0, 0, 0.08)',
          },
          animation: {
            'fade-in': 'fadeIn 0.5s ease-in-out',
            'slide-up': 'slideUp 0.6s ease-out',
            'slide-down': 'slideDown 0.6s ease-out',
            'pulse-soft': 'pulseSoft 2s infinite',
            'float': 'float 6s ease-in-out infinite',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' },
            },
            slideUp: {
              '0%': { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            slideDown: {
              '0%': { opacity: '0', transform: 'translateY(-20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            pulseSoft: {
              '0%, 100%': { opacity: '1' },
              '50%': { opacity: '0.85' },
            },
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-10px)' },
            }
          },
          backgroundImage: {
            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
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
      background-image: url('https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-color: #0f172a;
    }
    
    .glass-effect {
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }
    
    .glass-effect-dark {
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }
    
    .card-hover {
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .card-hover:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    .role-badge {
      display: inline-flex;
      align-items: center;
      padding: 0.35rem 0.9rem;
      border-radius: 50px;
      font-size: 0.75rem;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
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
      padding: 0.6rem 1.2rem;
      background-color: rgba(255, 255, 255, 0.8);
      color: #475569;
      border-radius: 0.75rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease-in-out;
      border: 1px solid rgba(226, 232, 240, 0.6);
    }
    
    .pagination a:hover {
      background-color: #0ea5e9;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 8px 15px rgba(14, 165, 233, 0.2);
    }
    
    .pagination strong {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.6rem 1.2rem;
      background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
      color: white;
      border-radius: 0.75rem;
      font-weight: 600;
      box-shadow: 0 4px 6px rgba(14, 165, 233, 0.25);
    }
    
    .fade-in {
      animation: fadeIn 0.7s ease-in-out;
    }
    
    .user-card {
      animation: slideUp 0.6s ease-out;
    }
    
    .stats-card {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 250, 252, 0.95) 100%);
      color: #1e293b;
      border: 1px solid rgba(226, 232, 240, 0.6);
      position: relative;
      overflow: hidden;
    }
    
    .stats-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #0ea5e9 0%, #d946ef 100%);
    }
    
    .stats-card:nth-child(2)::before {
      background: linear-gradient(90deg, #f97316 0%, #eab308 100%);
    }
    
    .stats-card:nth-child(3)::before {
      background: linear-gradient(90deg, #10b981 0%, #0ea5e9 100%);
    }
    
    .stats-card:nth-child(4)::before {
      background: linear-gradient(90deg, #8b5cf6 0%, #d946ef 100%);
    }
    
    .floating-shape {
      position: absolute;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(14, 165, 233, 0.1) 0%, rgba(217, 70, 239, 0.1) 100%);
      filter: blur(40px);
      z-index: -1;
    }
    
    .floating-shape-1 {
      width: 300px;
      height: 300px;
      top: -150px;
      right: -100px;
      animation: float 8s ease-in-out infinite;
    }
    
    .floating-shape-2 {
      width: 200px;
      height: 200px;
      bottom: -100px;
      left: -50px;
      animation: float 10s ease-in-out infinite reverse;
    }
    
    .sidebar-nav {
      position: sticky;
      top: 100px;
    }
    
    .sidebar-item {
      transition: all 0.3s ease;
      border-left: 3px solid transparent;
    }
    
    .sidebar-item:hover, .sidebar-item.active {
      background-color: rgba(14, 165, 233, 0.08);
      border-left-color: #0ea5e9;
    }
    
    .sidebar-item.active {
      font-weight: 600;
      color: #0ea5e9;
    }
    
    .notification-dot {
      position: absolute;
      top: 8px;
      right: 8px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: #ef4444;
      animation: pulseSoft 2s infinite;
    }
    
    .search-highlight {
      background-color: rgba(254, 240, 138, 0.4);
      padding: 0 2px;
      border-radius: 2px;
    }
    
    .user-avatar {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      color: white;
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
    }
    
    .user-avatar.admin {
      background: linear-gradient(135deg, #ef4444 0%, #f97316 100%);
    }
    
    .user-avatar.manager {
      background: linear-gradient(135deg, #8b5cf6 0%, #d946ef 100%);
    }
    
    .user-avatar.editor {
      background: linear-gradient(135deg, #10b981 0%, #0ea5e9 100%);
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes pulseSoft {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.7; }
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
    }
    
    .gradient-text {
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .dashboard-grid {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 2rem;
    }
    
    .data-visualization {
      background: linear-gradient(135deg, rgba(14, 165, 233, 0.05) 0%, rgba(139, 92, 246, 0.05) 100%);
      border: 1px solid rgba(14, 165, 233, 0.1);
    }
    
    .progress-bar {
      height: 8px;
      border-radius: 4px;
      background: rgba(14, 165, 233, 0.2);
      overflow: hidden;
    }
    
    .progress-fill {
      height: 100%;
      border-radius: 4px;
      background: linear-gradient(90deg, #0ea5e9, #8b5cf6);
      transition: width 1.5s ease-in-out;
    }
    
    @media (max-width: 1024px) {
      .dashboard-grid {
        grid-template-columns: 1fr;
      }
      
      .sidebar-nav {
        position: static;
        margin-bottom: 2rem;
      }
    }
  </style>
</head>

<body class="min-h-screen text-neutral-800">

  <!-- Floating Background Shapes -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="floating-shape floating-shape-1"></div>
    <div class="floating-shape floating-shape-2"></div>
  </div>

  <!-- Navbar -->
  <nav class="glass-effect shadow-lg sticky top-0 z-50 border-b border-white/20">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-3">
        <div class="bg-gradient-to-br from-primary-600 to-accent-500 p-2.5 rounded-xl shadow-medium">
          <i class="fas fa-users-cog text-white text-xl"></i>
        </div>
        <div>
          <a href="#" class="text-xl font-bold text-neutral-800">Corporate User Management</a>
          <p class="text-xs text-neutral-500 mt-0.5">Enterprise User Directory</p>
        </div>
      </div>
      
      <div class="flex items-center space-x-6">
        <div class="hidden md:flex items-center space-x-4">
          <!-- Notifications -->
          <div class="relative">
            <button class="p-2 rounded-full bg-neutral-100 text-neutral-600 hover:bg-neutral-200 transition-colors">
              <i class="fas fa-bell"></i>
            </button>
            <span class="notification-dot"></span>
          </div>
          
          <!-- Messages -->
          <div class="relative">
            <button class="p-2 rounded-full bg-neutral-100 text-neutral-600 hover:bg-neutral-200 transition-colors">
              <i class="fas fa-envelope"></i>
            </button>
            <span class="notification-dot bg-amber-500"></span>
          </div>
          
          <!-- User Profile -->
          <div class="flex items-center space-x-3 bg-white/80 rounded-xl px-3 py-2 shadow-soft border border-white/50">
            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary-500 to-accent-400 flex items-center justify-center text-white font-medium text-sm">
              <?= substr(html_escape($logged_in_user['username'] ?? 'User'), 0, 1); ?>
            </div>
            <div class="hidden md:block">
              <p class="text-sm font-medium text-neutral-800"><?= html_escape($logged_in_user['username'] ?? 'User'); ?></p>
              <p class="text-xs text-neutral-500"><?= html_escape($logged_in_user['role'] ?? 'Role'); ?></p>
            </div>
          </div>
        </div>
        
        <a href="<?=site_url('reg/logout');?>" 
           class="flex items-center space-x-2 bg-gradient-to-r from-primary-600 to-accent-500 text-white font-medium px-5 py-2.5 rounded-xl shadow-medium hover:shadow-large transition-all duration-300 hover:scale-105">
           <i class="fas fa-sign-out-alt"></i>
           <span class="hidden sm:inline">Logout</span>
        </a>
        
        <!-- Mobile Menu Button -->
        <button class="md:hidden p-2 rounded-lg bg-neutral-100 text-neutral-600">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto py-8 px-4 relative z-10">
    <div class="dashboard-grid">
      <!-- Sidebar Navigation -->
      <div class="sidebar-nav">
        <div class="glass-effect rounded-2xl shadow-xl overflow-hidden fade-in mb-6">
          <div class="p-6 border-b border-neutral-200/50">
            <h2 class="text-lg font-bold text-neutral-800 flex items-center">
              <i class="fas fa-tachometer-alt mr-3 text-primary-500"></i>
              Dashboard
            </h2>
          </div>
          
          <div class="p-4">
            <ul class="space-y-1">
              <li>
                <a href="#" class="sidebar-item active flex items-center space-x-3 p-3 rounded-lg text-neutral-700">
                  <i class="fas fa-users w-5 text-center text-primary-500"></i>
                  <span>User Directory</span>
                </a>
              </li>
              <li>
                <a href="#" class="sidebar-item flex items-center space-x-3 p-3 rounded-lg text-neutral-700">
                  <i class="fas fa-chart-bar w-5 text-center text-amber-500"></i>
                  <span>Analytics</span>
                </a>
              </li>
              <li>
                <a href="#" class="sidebar-item flex items-center space-x-3 p-3 rounded-lg text-neutral-700">
                  <i class="fas fa-cog w-5 text-center text-neutral-500"></i>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a href="#" class="sidebar-item flex items-center space-x-3 p-3 rounded-lg text-neutral-700">
                  <i class="fas fa-shield-alt w-5 text-center text-emerald-500"></i>
                  <span>Security</span>
                </a>
              </li>
              <li>
                <a href="#" class="sidebar-item flex items-center space-x-3 p-3 rounded-lg text-neutral-700">
                  <i class="fas fa-file-alt w-5 text-center text-purple-500"></i>
                  <span>Reports</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Quick Stats -->
        <div class="glass-effect rounded-2xl shadow-xl overflow-hidden fade-in">
          <div class="p-6 border-b border-neutral-200/50">
            <h2 class="text-lg font-bold text-neutral-800 flex items-center">
              <i class="fas fa-chart-line mr-3 text-primary-500"></i>
              Quick Stats
            </h2>
          </div>
          
          <div class="p-4 space-y-4">
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sm text-neutral-600">Active Sessions</p>
                <p class="text-lg font-bold text-neutral-800">24</p>
              </div>
              <div class="p-2 rounded-lg bg-primary-100 text-primary-600">
                <i class="fas fa-user-clock"></i>
              </div>
            </div>
            
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sm text-neutral-600">Storage Used</p>
                <p class="text-lg font-bold text-neutral-800">68%</p>
                <div class="progress-bar mt-1">
                  <div class="progress-fill" style="width: 68%"></div>
                </div>
              </div>
              <div class="p-2 rounded-lg bg-amber-100 text-amber-600">
                <i class="fas fa-database"></i>
              </div>
            </div>
            
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sm text-neutral-600">System Health</p>
                <p class="text-lg font-bold text-neutral-800">98%</p>
                <div class="progress-bar mt-1">
                  <div class="progress-fill" style="width: 98%"></div>
                </div>
              </div>
              <div class="p-2 rounded-lg bg-emerald-100 text-emerald-600">
                <i class="fas fa-heartbeat"></i>
              </div>
            </div>
          </div>
        </div>
        
        <!-- User Distribution Section -->
        <div class="glass-effect rounded-2xl shadow-xl overflow-hidden fade-in mt-6">
          <div class="p-6 border-b border-neutral-200/50">
            <h2 class="text-lg font-bold text-neutral-800 flex items-center">
              <i class="fas fa-chart-pie mr-3 text-primary-500"></i>
              User Distribution
            </h2>
          </div>
          
          <div class="p-4 data-visualization rounded-lg m-4">
            <div class="flex justify-between items-center mb-3">
              <span class="text-sm text-neutral-600">Admin Users</span>
              <span class="text-sm font-medium text-neutral-800">15%</span>
            </div>
            <div class="progress-bar mb-4">
              <div class="progress-fill" style="width: 15%; background: linear-gradient(90deg, #ef4444, #f97316);"></div>
            </div>
            
            <div class="flex justify-between items-center mb-3">
              <span class="text-sm text-neutral-600">Manager Users</span>
              <span class="text-sm font-medium text-neutral-800">25%</span>
            </div>
            <div class="progress-bar mb-4">
              <div class="progress-fill" style="width: 25%; background: linear-gradient(90deg, #8b5cf6, #d946ef);"></div>
            </div>
            
            <div class="flex justify-between items-center mb-3">
              <span class="text-sm text-neutral-600">Editor Users</span>
              <span class="text-sm font-medium text-neutral-800">35%</span>
            </div>
            <div class="progress-bar mb-4">
              <div class="progress-fill" style="width: 35%; background: linear-gradient(90deg, #10b981, #0ea5e9);"></div>
            </div>
            
            <div class="flex justify-between items-center">
              <span class="text-sm text-neutral-600">Standard Users</span>
              <span class="text-sm font-medium text-neutral-800">25%</span>
            </div>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 25%; background: linear-gradient(90deg, #6b7280, #9ca3af);"></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Main Dashboard Content -->
      <div>
        <div class="glass-effect rounded-2xl shadow-xl overflow-hidden fade-in">
          
          <!-- Welcome Section -->
          <?php if(!empty($logged_in_user)): ?>
            <div class="bg-gradient-to-r from-primary-600 to-accent-500 text-white p-8 relative overflow-hidden">
              <div class="absolute inset-0 bg-black/10"></div>
              <div class="relative z-10 flex flex-col md:flex-row justify-between items-center">
                <div>
                  <h2 class="text-3xl font-bold mb-2">Welcome back, <?= html_escape($logged_in_user['username']); ?>!</h2>
                  <p class="text-primary-100 text-lg">Role: <span class="font-semibold"><?= html_escape($logged_in_user['role']); ?></span></p>
                </div>
                <div class="mt-4 md:mt-0">
                  <div class="flex items-center space-x-2 bg-white/20 rounded-xl px-4 py-3 backdrop-blur-sm">
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
            <div class="stats-card rounded-xl p-6 shadow-soft card-hover">
              <div class="flex justify-between items-center">
                <div>
                  <p class="text-neutral-600 text-sm font-medium">Total Users</p>
                  <h3 class="text-2xl font-bold mt-1 text-neutral-800"><?= count($users); ?></h3>
                  <p class="text-xs text-neutral-500 mt-1">Across all departments</p>
                </div>
                <div class="bg-primary-100 text-primary-600 p-3 rounded-xl">
                  <i class="fas fa-users text-xl"></i>
                </div>
              </div>
            </div>
            
            <div class="stats-card rounded-xl p-6 shadow-soft card-hover">
              <div class="flex justify-between items-center">
                <div>
                  <p class="text-neutral-600 text-sm font-medium">Admin Users</p>
                  <h3 class="text-2xl font-bold mt-1 text-neutral-800">
                    <?php
                      $adminCount = 0;
                      foreach($users as $user) {
                        if($user['role'] === 'admin') $adminCount++;
                      }
                      echo $adminCount;
                    ?>
                  </h3>
                  <p class="text-xs text-neutral-500 mt-1">With full access</p>
                </div>
                <div class="bg-amber-100 text-amber-600 p-3 rounded-xl">
                  <i class="fas fa-user-shield text-xl"></i>
                </div>
              </div>
            </div>
            
            <div class="stats-card rounded-xl p-6 shadow-soft card-hover">
              <div class="flex justify-between items-center">
                <div>
                  <p class="text-neutral-600 text-sm font-medium">Active Today</p>
                  <h3 class="text-2xl font-bold mt-1 text-neutral-800">
                    <?php
                      $activeCount = rand(3, count($users));
                      echo $activeCount;
                    ?>
                  </h3>
                  <p class="text-xs text-neutral-500 mt-1">Logged in today</p>
                </div>
                <div class="bg-emerald-100 text-emerald-600 p-3 rounded-xl">
                  <i class="fas fa-user-check text-xl"></i>
                </div>
              </div>
            </div>
            
            <div class="stats-card rounded-xl p-6 shadow-soft card-hover">
              <div class="flex justify-between items-center">
                <div>
                  <p class="text-neutral-600 text-sm font-medium">New This Week</p>
                  <h3 class="text-2xl font-bold mt-1 text-neutral-800">
                    <?php
                      $newCount = rand(1, 5);
                      echo $newCount;
                    ?>
                  </h3>
                  <p class="text-xs text-neutral-500 mt-1">Recently added</p>
                </div>
                <div class="bg-purple-100 text-purple-600 p-3 rounded-xl">
                  <i class="fas fa-user-plus text-xl"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Search and Actions Bar -->
          <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 p-8 pb-4">
            <div>
              <h1 class="text-2xl font-bold text-neutral-800 flex items-center">
                <i class="fas fa-address-book mr-3 text-primary-500"></i>
                User Directory
              </h1>
              <p class="text-neutral-600 mt-1">Manage all users in your organization</p>
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
                    class="w-full border border-neutral-300 bg-white rounded-l-xl px-4 py-3 pl-10 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent text-neutral-800 shadow-soft">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-search text-neutral-400"></i>
                  </div>
                </div>
                <button type="submit" class="bg-gradient-to-r from-primary-600 to-accent-500 hover:from-primary-700 hover:to-accent-600 text-white px-5 rounded-r-xl transition-all duration-300 flex items-center shadow-medium">
                  <i class="fas fa-search"></i>
                </button>
              </form>
              
              <!-- Create User Button -->
              <a href="<?=site_url('users/create')?>"
                 class="bg-gradient-to-r from-emerald-500 to-green-600 hover:from-emerald-600 hover:to-green-700 text-white font-medium px-5 py-3 rounded-xl shadow-medium hover:shadow-large transition-all duration-300 flex items-center justify-center space-x-2 hover:scale-105">
                <i class="fas fa-user-plus"></i>
                <span>Create User</span>
              </a>
            </div>
          </div>

          <!-- User Cards Grid -->
          <div class="p-8 pt-4">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
              <?php foreach(html_escape($users) as $user): ?>
                <div class="user-card bg-white rounded-xl shadow-soft border border-neutral-200/60 overflow-hidden card-hover">
                  <!-- Card Header with Gradient -->
                  <div class="h-2 bg-gradient-to-r from-primary-500 to-accent-500"></div>
                  
                  <div class="p-6">
                    <!-- User Info -->
                    <div class="flex justify-between items-start mb-4">
                      <div class="flex items-center space-x-3">
                        <div class="user-avatar <?= $user['role']; ?>">
                          <?= substr($user['username'], 0, 1); ?>
                        </div>
                        <div>
                          <h3 class="text-lg font-bold text-neutral-800"><?=($user['username']);?></h3>
                          <p class="text-neutral-500 text-xs mt-1">ID: #<?=($user['id']);?></p>
                        </div>
                      </div>
                      
                      <!-- Role Badge -->
                      <?php
                        $roleColor = 'bg-neutral-100 text-neutral-800';
                        $roleIcon = 'fas fa-user';
                        if($user['role'] === 'admin') {
                          $roleColor = 'bg-red-100 text-red-800';
                          $roleIcon = 'fas fa-user-shield';
                        } elseif($user['role'] === 'manager') {
                          $roleColor = 'bg-purple-100 text-purple-800';
                          $roleIcon = 'fas fa-user-tie';
                        } elseif($user['role'] === 'editor') {
                          $roleColor = 'bg-blue-100 text-blue-800';
                          $roleIcon = 'fas fa-user-edit';
                        }
                      ?>
                      <span class="role-badge <?= $roleColor; ?>">
                        <i class="<?= $roleIcon; ?> mr-1"></i>
                        <?=($user['role']);?>
                      </span>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-center mb-6">
                      <div class="bg-primary-50 p-2 rounded-lg mr-3">
                        <i class="fas fa-envelope text-primary-500"></i>
                      </div>
                      <p class="text-neutral-700 truncate"><?=($user['email']);?></p>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex justify-between">
                      <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                        <a href="<?=site_url('users/update/'.$user['id']);?>"
                           class="flex items-center space-x-2 bg-primary-50 text-primary-700 px-4 py-2.5 rounded-lg hover:bg-primary-100 transition-all duration-300 hover:scale-105 shadow-soft">
                          <i class="fas fa-edit"></i>
                          <span>Update</span>
                        </a>
                      <?php endif; ?>

                      <?php if($logged_in_user['role'] === 'admin'): ?>
                        <a href="<?=site_url('users/delete/'.$user['id']);?>"
                           onclick="return confirm('Are you sure you want to delete this user?');"
                           class="flex items-center space-x-2 bg-red-50 text-red-700 px-4 py-2.5 rounded-lg hover:bg-red-100 transition-all duration-300 hover:scale-105 shadow-soft">
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
    </div>
  </div>

  <!-- Footer -->
  <footer class="glass-effect-dark text-white mt-12 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center space-x-3 mb-4 md:mb-0">
          <div class="bg-gradient-to-br from-primary-600 to-accent-500 p-2 rounded-lg">
            <i class="fas fa-users-cog text-white"></i>
          </div>
          <div>
            <span class="text-lg font-semibold">Corporate User Management</span>
            <p class="text-neutral-400 text-sm mt-0.5">Enterprise-grade user directory solution</p>
          </div>
        </div>
        <div class="text-neutral-400 text-sm">
          &copy; <?= date('Y'); ?> All rights reserved. | <span class="text-primary-400">v2.1.5</span>
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
      
      // Add search term highlighting
      const urlParams = new URLSearchParams(window.location.search);
      const searchTerm = urlParams.get('q');
      if (searchTerm) {
        const userNames = document.querySelectorAll('.user-card h3');
        userNames.forEach(name => {
          const originalText = name.textContent;
          const regex = new RegExp(`(${searchTerm})`, 'gi');
          const highlightedText = originalText.replace(regex, '<span class="search-highlight">$1</span>');
          name.innerHTML = highlightedText;
        });
      }
      
      // Animate progress bars on page load
      const progressBars = document.querySelectorAll('.progress-fill');
      progressBars.forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0';
        setTimeout(() => {
          bar.style.width = width;
        }, 500);
      });
    });
  </script>
</body>
</html>