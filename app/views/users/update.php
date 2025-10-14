<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User | Corporate Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
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
            'premium': '0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 10px 30px -10px rgba(0, 0, 0, 0.1)',
          },
          animation: {
            'fade-in': 'fadeIn 0.5s ease-in-out',
            'slide-up': 'slideUp 0.6s ease-out',
            'slide-down': 'slideDown 0.6s ease-out',
            'pulse-soft': 'pulseSoft 2s infinite',
            'float': 'float 6s ease-in-out infinite',
            'bounce-soft': 'bounceSoft 2s infinite',
            'gradient-shift': 'gradientShift 8s ease infinite',
            'glow': 'glow 3s ease-in-out infinite alternate',
            'slide-in-right': 'slideInRight 0.8s ease-out',
            'scale-in': 'scaleIn 0.6s ease-out',
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
            },
            bounceSoft: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-5px)' },
            },
            gradientShift: {
              '0%, 100%': { backgroundPosition: '0% 50%' },
              '50%': { backgroundPosition: '100% 50%' },
            },
            glow: {
              '0%': { boxShadow: '0 0 5px rgba(14, 165, 233, 0.5)' },
              '100%': { boxShadow: '0 0 20px rgba(14, 165, 233, 0.8), 0 0 30px rgba(217, 70, 239, 0.6)' },
            },
            slideInRight: {
              '0%': { opacity: '0', transform: 'translateX(30px)' },
              '100%': { opacity: '1', transform: 'translateX(0)' },
            },
            scaleIn: {
              '0%': { opacity: '0', transform: 'scale(0.9)' },
              '100%': { opacity: '1', transform: 'scale(1)' },
            }
          },
          backgroundImage: {
            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
            'gradient-corporate': 'linear-gradient(135deg, rgba(14, 165, 233, 0.1) 0%, rgba(217, 70, 239, 0.05) 100%)',
            'gradient-hero': 'linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 50%, #d946ef 100%)',
            'gradient-premium': 'linear-gradient(135deg, #0ea5e9 0%, #3b82f6 25%, #8b5cf6 50%, #d946ef 75%, #ec4899 100%)',
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
      backdrop-filter: blur(25px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .glass-effect-premium {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 250, 252, 0.95) 100%);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    
    .glass-effect-dark {
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }
    
    .premium-border {
      position: relative;
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 50%, #d946ef 100%);
      padding: 3px;
      border-radius: 24px;
      box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.25);
    }
    
    .premium-border::before {
      content: '';
      position: absolute;
      top: -3px;
      left: -3px;
      right: -3px;
      bottom: -3px;
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 50%, #d946ef 100%);
      border-radius: 27px;
      z-index: -1;
      opacity: 0.6;
      filter: blur(15px);
      animation: gradientShift 8s ease infinite;
    }
    
    .update-container {
      animation: slideInUp 1s ease-out;
    }
    
    .input-field {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      background: rgba(255, 255, 255, 0.9);
      border: 1.5px solid #e2e8f0;
    }
    
    .input-field:focus {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(14, 165, 233, 0.15);
      border-color: #0ea5e9;
    }
    
    .btn-update {
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    
    .btn-update::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }
    
    .btn-update:hover::before {
      left: 100%;
    }
    
    .btn-update:hover {
      transform: translateY(-3px);
      box-shadow: 0 20px 40px rgba(14, 165, 233, 0.4);
    }
    
    .btn-secondary {
      background: linear-gradient(135deg, #4b5563 0%, #6b7280 100%);
      transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(75, 85, 99, 0.3);
    }
    
    .floating-element {
      animation: float 8s ease-in-out infinite;
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
    
    .corporate-pattern {
      background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%230ea5e9' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
    
    .hover-lift {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-lift:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .glowing-border {
      position: relative;
    }
    
    .glowing-border::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, #0ea5e9, #8b5cf6, #d946ef, #0ea5e9);
      background-size: 400% 400%;
      border-radius: inherit;
      z-index: -1;
      animation: gradientShift 8s ease infinite;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .glowing-border:hover::before {
      opacity: 1;
    }
    
    .premium-card {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 250, 252, 0.95) 100%);
      border: 1px solid rgba(226, 232, 240, 0.6);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
      position: relative;
      overflow: hidden;
    }
    
    .premium-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #0ea5e9 0%, #8b5cf6 50%, #d946ef 100%);
      background-size: 200% 200%;
      animation: gradientShift 8s ease infinite;
    }
    
    .hero-gradient {
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 50%, #d946ef 100%);
      background-size: 200% 200%;
      animation: gradientShift 8s ease infinite;
    }
    
    .gradient-text {
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .particle {
      position: absolute;
      background: rgba(14, 165, 233, 0.1);
      border-radius: 50%;
      animation: float 10s ease-in-out infinite;
    }
    
    .user-avatar {
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
      box-shadow: 0 15px 35px rgba(14, 165, 233, 0.3);
    }
    
    .role-badge {
      display: inline-flex;
      align-items: center;
      padding: 0.5rem 1rem;
      border-radius: 50px;
      font-size: 0.875rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    .role-badge.user {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      color: white;
    }
    
    .role-badge.admin {
      background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
      color: white;
    }
    
    .security-indicator {
      height: 6px;
      background: #e2e8f0;
      border-radius: 3px;
      overflow: hidden;
      margin-top: 8px;
    }
    
    .security-indicator-fill {
      height: 100%;
      width: 0%;
      background: linear-gradient(90deg, #ef4444, #f59e0b, #10b981);
      transition: width 0.5s ease;
    }
    
    .info-card {
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
      border: 1px solid #e2e8f0;
      transition: all 0.3s ease;
    }
    
    .info-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center p-6 corporate-pattern">

  <!-- Floating Background Shapes -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="floating-shape floating-shape-1"></div>
    <div class="floating-shape floating-shape-2"></div>
    <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-gradient-to-br from-primary-200/10 to-accent-200/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-br from-accent-200/10 to-primary-200/10 rounded-full blur-3xl"></div>
  </div>

  <!-- Background Particles -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="particle w-6 h-6 top-1/4 left-1/5" style="animation-delay: 0s;"></div>
    <div class="particle w-8 h-8 top-1/3 right-1/5" style="animation-delay: 2s;"></div>
    <div class="particle w-4 h-4 bottom-1/4 left-1/3" style="animation-delay: 4s;"></div>
    <div class="particle w-7 h-7 bottom-1/3 right-1/3" style="animation-delay: 6s;"></div>
    <div class="particle w-5 h-5 top-2/3 left-2/3" style="animation-delay: 8s;"></div>
  </div>

  <!-- Main Content -->
  <div class="w-full max-w-7xl flex flex-col lg:flex-row items-center justify-between gap-16 update-container z-10">
    
    <!-- Left Side - User Information & Details -->
    <div class="w-full lg:w-2/5">
      <div class="floating-element">
        <!-- User Profile Header -->
        <div class="glass-effect-premium rounded-3xl p-8 shadow-2xl mb-8">
          <div class="flex items-center space-x-6 mb-6">
            <div class="user-avatar w-20 h-20 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
              <?= strtoupper(substr(html_escape($user['username']), 0, 2)) ?>
            </div>
            <div>
              <h1 class="text-3xl font-black text-neutral-800"><?= html_escape($user['username']) ?></h1>
              <div class="flex items-center space-x-3 mt-2">
                <span class="role-badge <?= $user['role'] ?>">
                  <i class="fas fa-user-tag mr-2"></i>
                  <?= $user['role'] ?>
                </span>
                <span class="text-neutral-500 text-sm font-medium">ID: #<?= $user['id'] ?></span>
              </div>
            </div>
          </div>
          
          <!-- User Stats -->
          <div class="grid grid-cols-2 gap-4">
            <div class="info-card rounded-2xl p-4 text-center">
              <div class="text-primary-600 text-lg font-semibold">Active</div>
              <div class="text-neutral-700 text-sm">Status</div>
            </div>
            <div class="info-card rounded-2xl p-4 text-center">
              <div class="text-emerald-600 text-lg font-semibold">Verified</div>
              <div class="text-neutral-700 text-sm">Email</div>
            </div>
          </div>
        </div>
        
        <!-- Security Information -->
        <div class="glass-effect-premium rounded-3xl p-8 shadow-2xl">
          <h3 class="text-xl font-bold text-neutral-800 mb-6 flex items-center">
            <i class="fas fa-shield-alt text-primary-600 mr-3"></i>
            Security Overview
          </h3>
          
          <div class="space-y-6">
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-neutral-700 font-medium">Password Strength</span>
                <span class="text-primary-600 font-semibold">Strong</span>
              </div>
              <div class="security-indicator">
                <div class="security-indicator-fill" style="width: 85%"></div>
              </div>
            </div>
            
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-neutral-700 font-medium">Last Updated</span>
                <span class="text-neutral-500 text-sm">2 days ago</span>
              </div>
            </div>
            
            <div class="bg-primary-50 rounded-2xl p-4 border border-primary-200">
              <div class="flex items-start space-x-3">
                <i class="fas fa-info-circle text-primary-600 mt-1"></i>
                <div>
                  <p class="text-primary-800 font-medium">Administrative Access</p>
                  <p class="text-primary-600 text-sm mt-1">You are updating user profile information. Changes will be logged for security purposes.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Update Form -->
    <div class="w-full lg:w-3/5 flex justify-center">
      <div class="premium-border w-full max-w-2xl">
        <div class="glass-effect-premium rounded-2xl p-10 shadow-2xl">
          <!-- Header -->
          <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-primary-600 to-accent-500 rounded-3xl mb-6 shadow-2xl glowing-border">
              <i class="fas fa-user-edit text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl font-black text-neutral-800">Update User Profile</h2>
            <p class="text-neutral-600 mt-3 text-lg">Modify user information and permissions</p>
          </div>

          <!-- Update Form -->
          <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-8">
            <!-- Username Field -->
            <div>
              <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                <i class="fas fa-user mr-3 text-primary-500 text-lg"></i>
                Username
              </label>
              <div class="relative">
                <input type="text" 
                       name="username" 
                       value="<?= html_escape($user['username'])?>" 
                       required
                       class="input-field w-full pl-12 pr-6 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-id-card text-primary-500 text-lg"></i>
                </div>
              </div>
            </div>

            <!-- Email Field -->
            <div>
              <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                <i class="fas fa-envelope mr-3 text-primary-500 text-lg"></i>
                Email Address
              </label>
              <div class="relative">
                <input type="email" 
                       name="email" 
                       value="<?= html_escape($user['email'])?>" 
                       required
                       class="input-field w-full pl-12 pr-6 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-at text-primary-500 text-lg"></i>
                </div>
              </div>
            </div>

            <?php if(!empty($logged_in_user) && $logged_in_user['role'] === 'admin'): ?>
              <!-- Role Dropdown for Admins -->
              <div>
                <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                  <i class="fas fa-user-tag mr-3 text-primary-500 text-lg"></i>
                  User Role
                </label>
                <div class="relative">
                  <select name="role" 
                          required
                          class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium appearance-none">
                    <option value="user" <?= $user['role'] === 'user' ? 'selected' : ''; ?>>Standard User</option>
                    <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : ''; ?>>Administrator</option>
                  </select>
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-user-shield text-primary-500 text-lg"></i>
                  </div>
                  <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                    <i class="fas fa-chevron-down text-primary-500 text-lg"></i>
                  </div>
                </div>
              </div>

              <!-- Password Field for Admins -->
              <div>
                <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                  <i class="fas fa-lock mr-3 text-primary-500 text-lg"></i>
                  Update Password
                </label>
                <div class="relative">
                  <input type="password" 
                         name="password" 
                         id="password"
                         placeholder="Leave blank to keep current password"
                         class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-key text-primary-500 text-lg"></i>
                  </div>
                  <i class="fas fa-eye absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-neutral-400 hover:text-primary-600 transition-colors text-lg" id="togglePassword"></i>
                </div>
                <p class="text-neutral-500 text-sm mt-2 ml-12">
                  <i class="fas fa-info-circle mr-1"></i>
                  Only enter a new password if you want to change it
                </p>
              </div>
            <?php endif; ?>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-6">
              <button type="submit"
                      class="btn-update flex-1 text-white font-bold py-5 rounded-2xl text-lg flex items-center justify-center space-x-3 glowing-border">
                <i class="fas fa-save"></i>
                <span>Update User Profile</span>
              </button>
              
              <a href="<?=site_url('/users');?>" 
                 class="btn-secondary flex items-center justify-center space-x-3 text-white font-bold py-5 rounded-2xl text-lg px-8">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Users</span>
              </a>
            </div>
          </form>

          <!-- Security Notice -->
          <div class="mt-10 p-6 bg-gradient-to-r from-primary-50 to-accent-50 rounded-2xl border border-primary-200">
            <div class="flex items-start space-x-4">
              <div class="bg-primary-100 p-3 rounded-xl">
                <i class="fas fa-shield-check text-primary-600 text-xl"></i>
              </div>
              <div>
                <p class="text-primary-800 font-semibold text-lg">Security & Compliance</p>
                <p class="text-primary-600 text-sm mt-2">All changes are logged and monitored. User profile updates require proper authorization and follow enterprise security protocols.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="fixed bottom-0 left-0 right-0 py-6 text-center glass-effect-dark border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4">
      <p class="text-neutral-400 text-sm">
        &copy; 2024 Corporate Portal Enterprise. All rights reserved. 
        <span class="mx-3">•</span>
        <a href="#" class="text-primary-400 hover:text-primary-300 font-medium transition-colors duration-300">Privacy Policy</a>
        <span class="mx-3">•</span>
        <a href="#" class="text-primary-400 hover:text-primary-300 font-medium transition-colors duration-300">User Management</a>
        <span class="mx-3">•</span>
        <a href="#" class="text-primary-400 hover:text-primary-300 font-medium transition-colors duration-300">Security</a>
      </p>
    </div>
  </footer>

  <!-- Password Toggle Script -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');

      if (togglePassword && password) {
        togglePassword.addEventListener('click', function() {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);

          this.classList.toggle('fa-eye');
          this.classList.toggle('fa-eye-slash');
        });
      }

      // Add floating animation to particles
      const particles = document.querySelectorAll('.particle');
      particles.forEach((particle, index) => {
        particle.style.animationDelay = `${index * 2}s`;
      });
      
      // Add input focus effects
      const inputs = document.querySelectorAll('input, select');
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.parentElement.classList.add('ring-4', 'ring-primary-100');
        });
        
        input.addEventListener('blur', function() {
          this.parentElement.classList.remove('ring-4', 'ring-primary-100');
        });
      });
    });
  </script>
</body>
</html>