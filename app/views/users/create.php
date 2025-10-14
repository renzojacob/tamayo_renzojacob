<?php
// Ensure $logged_in_user is defined to avoid undefined variable error
if (!isset($logged_in_user)) {
    $logged_in_user = ['role' => 'user']; // default to normal user if not set
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create User | Corporate Portal</title>
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
    
    .create-container {
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
    
    .btn-create {
      background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    
    .btn-create::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }
    
    .btn-create:hover::before {
      left: 100%;
    }
    
    .btn-create:hover {
      transform: translateY(-3px);
      box-shadow: 0 20px 40px rgba(14, 165, 233, 0.4);
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
  </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4 corporate-pattern">

  <!-- Floating Background Shapes -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="floating-shape floating-shape-1"></div>
    <div class="floating-shape floating-shape-2"></div>
    <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-gradient-to-br from-primary-200/10 to-accent-200/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-br from-accent-200/10 to-primary-200/10 rounded-full blur-3xl"></div>
  </div>

  <!-- Background Particles -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="particle w-4 h-4 top-1/4 left-1/4" style="animation-delay: 0s;"></div>
    <div class="particle w-6 h-6 top-1/3 right-1/4" style="animation-delay: 1s;"></div>
    <div class="particle w-3 h-3 bottom-1/4 left-1/3" style="animation-delay: 2s;"></div>
    <div class="particle w-5 h-5 bottom-1/3 right-1/3" style="animation-delay: 3s;"></div>
    <div class="particle w-4 h-4 top-2/3 left-2/3" style="animation-delay: 4s;"></div>
  </div>

  <!-- Main Content -->
  <div class="w-full max-w-5xl flex flex-col lg:flex-row items-center justify-between gap-16 create-container z-10">
    
    <!-- Left Side - Branding & Info -->
    <div class="w-full lg:w-1/2 text-center lg:text-left">
      <div class="floating-element">
        <!-- Logo & Brand -->
        <div class="flex items-center justify-center lg:justify-start space-x-4 mb-8">
          <div class="bg-gradient-to-br from-primary-600 to-accent-500 p-5 rounded-3xl shadow-2xl glowing-border">
            <i class="fas fa-user-plus text-white text-4xl"></i>
          </div>
          <div>
            <h1 class="text-5xl lg:text-6xl font-black text-gray-900 bg-gradient-to-r from-primary-600 to-accent-500 bg-clip-text text-transparent">
              Corporate Portal
            </h1>
            <p class="text-neutral-600 mt-3 text-xl font-medium">User Management System</p>
          </div>
        </div>
        
        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
          <div class="premium-card rounded-2xl p-6 shadow-soft card-hover">
            <div class="flex items-center space-x-4">
              <div class="bg-primary-100 p-3 rounded-xl">
                <i class="fas fa-shield-alt text-primary-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-neutral-800">Role-Based Access</h3>
                <p class="text-neutral-600 text-sm mt-1">Granular permission control</p>
              </div>
            </div>
          </div>
          
          <div class="premium-card rounded-2xl p-6 shadow-soft card-hover">
            <div class="flex items-center space-x-4">
              <div class="bg-emerald-100 p-3 rounded-xl">
                <i class="fas fa-user-check text-emerald-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-neutral-800">User Validation</h3>
                <p class="text-neutral-600 text-sm mt-1">Secure account creation</p>
              </div>
            </div>
          </div>
          
          <div class="premium-card rounded-2xl p-6 shadow-soft card-hover">
            <div class="flex items-center space-x-4">
              <div class="bg-purple-100 p-3 rounded-xl">
                <i class="fas fa-cogs text-purple-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-neutral-800">Admin Controls</h3>
                <p class="text-neutral-600 text-sm mt-1">Advanced user management</p>
              </div>
            </div>
          </div>
          
          <div class="premium-card rounded-2xl p-6 shadow-soft card-hover">
            <div class="flex items-center space-x-4">
              <div class="bg-amber-100 p-3 rounded-xl">
                <i class="fas fa-database text-amber-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-neutral-800">Secure Storage</h3>
                <p class="text-neutral-600 text-sm mt-1">Encrypted user data</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- User Stats -->
        <div class="bg-gradient-to-r from-primary-50 to-accent-50 rounded-2xl p-8 mt-8 border border-primary-100">
          <div class="grid grid-cols-2 gap-6 text-center">
            <div>
              <p class="text-3xl font-bold text-primary-600"><?= isset($total_users) ? $total_users : '150+' ?></p>
              <p class="text-neutral-600 text-sm mt-1">Active Users</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-accent-600">99.9%</p>
              <p class="text-neutral-600 text-sm mt-1">System Uptime</p>
            </div>
          </div>
          <div class="mt-6">
            <p class="text-neutral-700 text-sm text-center">
              <i class="fas fa-info-circle text-primary-500 mr-2"></i>
              Creating a new user will grant them access to the corporate portal with appropriate permissions.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Create User Form -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <div class="premium-border w-full max-w-lg">
        <div class="glass-effect-premium rounded-2xl p-10 shadow-2xl">
          <!-- Header -->
          <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-primary-600 to-accent-500 rounded-3xl mb-6 shadow-2xl glowing-border">
              <i class="fas fa-user-plus text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl font-black text-neutral-800">Create New User</h2>
            <p class="text-neutral-600 mt-3 text-lg">Add a new user to the corporate system</p>
          </div>

          <!-- Create User Form -->
          <form id="user-form" action="<?=site_url('users/create/')?>" method="POST" class="space-y-8">

            <!-- Username -->
            <div>
              <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                <i class="fas fa-user mr-2 text-primary-500"></i>
                Username
              </label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-id-card text-primary-500 text-lg"></i>
                </div>
                <input type="text" name="username" placeholder="Enter corporate username" required
                       value="<?= isset($username) ? html_escape($username) : '' ?>"
                       class="input-field w-full pl-12 pr-6 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium">
              </div>
            </div>

            <!-- Email -->
            <div>
              <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                <i class="fas fa-envelope mr-2 text-primary-500"></i>
                Email Address
              </label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-at text-primary-500 text-lg"></i>
                </div>
                <input type="email" name="email" placeholder="user@company.com" required
                       value="<?= isset($email) ? html_escape($email) : '' ?>"
                       class="input-field w-full pl-12 pr-6 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium">
              </div>
            </div>

            <!-- Password with toggle -->
            <div>
              <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                <i class="fas fa-lock mr-2 text-primary-500"></i>
                Password
              </label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-key text-primary-500 text-lg"></i>
                </div>
                <input type="password" name="password" id="password" placeholder="Create secure password" required
                       class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium">
                <i class="fas fa-eye absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-neutral-400 hover:text-primary-600 transition-colors text-lg" id="togglePassword"></i>
              </div>
            </div>

            <!-- Role -->
            <?php if($logged_in_user['role'] === 'admin'): ?>
              <div>
                <label class="block text-sm font-semibold text-neutral-700 mb-3 flex items-center">
                  <i class="fas fa-user-tag mr-2 text-primary-500"></i>
                  User Role
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-user-shield text-primary-500 text-lg"></i>
                  </div>
                  <select name="role" required
                          class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-primary-200 focus:outline-none text-neutral-800 text-lg font-medium appearance-none">
                    <option value="" disabled selected>Select User Role</option>
                    <option value="user">Standard User</option>
                    <option value="admin">Administrator</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                    <i class="fas fa-chevron-down text-primary-500 text-lg"></i>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <!-- Normal users can only create a user account -->
              <input type="hidden" name="role" value="user">
            <?php endif; ?>

            <!-- Submit -->
            <button type="submit"
                    class="btn-create w-full text-white font-bold py-5 rounded-2xl text-lg flex items-center justify-center space-x-3 glowing-border">
              <i class="fas fa-user-plus"></i>
              <span>Create Corporate User</span>
            </button>
          </form>

          <!-- Divider -->
          <div class="flex items-center my-8">
            <div class="flex-1 border-t border-neutral-200"></div>
            <div class="px-4 text-sm text-neutral-500 font-medium">Need to go back?</div>
            <div class="flex-1 border-t border-neutral-200"></div>
          </div>

          <!-- Return to Home -->
          <div class="text-center">
            <a href="<?=site_url('/users'); ?>" 
               class="inline-flex items-center space-x-3 bg-neutral-100 hover:bg-neutral-200 text-neutral-700 font-semibold py-4 px-8 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl hover-lift">
              <i class="fas fa-arrow-left"></i>
              <span>Return to User Directory</span>
            </a>
          </div>

          <!-- Security Notice -->
          <div class="mt-8 p-5 bg-gradient-to-r from-primary-50 to-accent-50 rounded-2xl border border-primary-200">
            <div class="flex items-start space-x-4">
              <div class="bg-primary-100 p-3 rounded-xl">
                <i class="fas fa-shield-check text-primary-600 text-xl"></i>
              </div>
              <div>
                <p class="text-primary-800 font-semibold">Enterprise Security Protocols</p>
                <p class="text-primary-600 text-sm mt-2">All user data is encrypted and protected by corporate security standards.</p>
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
        <a href="#" class="text-primary-400 hover:text-primary-300 font-medium transition-colors duration-300">Terms of Service</a>
        <span class="mx-3">•</span>
        <a href="#" class="text-primary-400 hover:text-primary-300 font-medium transition-colors duration-300">Compliance</a>
      </p>
    </div>
  </footer>

  <!-- Password Toggle -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');

      if (togglePassword && password) {
        togglePassword.addEventListener('click', function () {
          const type = password.type === 'password' ? 'text' : 'password';
          password.type = type;
          this.classList.toggle('fa-eye');
          this.classList.toggle('fa-eye-slash');
        });
      }

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

      // Add floating animation to particles
      const particles = document.querySelectorAll('.particle');
      particles.forEach((particle, index) => {
        particle.style.animationDelay = `${index * 2}s`;
      });
    });
  </script>

</body>
</html>