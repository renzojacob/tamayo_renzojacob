<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User | Corporate Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
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
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(30px);
      border: 1px solid rgba(255, 255, 255, 0.4);
    }
    
    .gradient-border {
      position: relative;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #4c51bf 100%);
      padding: 3px;
      border-radius: 24px;
      box-shadow: 0 25px 60px -12px rgba(102, 126, 234, 0.3);
    }
    
    .gradient-border::before {
      content: '';
      position: absolute;
      top: -3px;
      left: -3px;
      right: -3px;
      bottom: -3px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #4c51bf 100%);
      border-radius: 27px;
      z-index: -1;
      opacity: 0.7;
      filter: blur(20px);
      animation: gradientShift 10s ease infinite;
    }
    
    @keyframes gradientShift {
      0%, 100% { opacity: 0.7; }
      50% { opacity: 0.9; }
    }
    
    .update-container {
      animation: slideInUp 1s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(50px) scale(0.95);
      }
      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }
    
    .input-field {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      background: rgba(255, 255, 255, 0.9);
      border: 2px solid #e2e8f0;
    }
    
    .input-field:focus {
      transform: translateY(-3px);
      box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
      border-color: #667eea;
    }
    
    .btn-update {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.6s;
    }
    
    .btn-update:hover::before {
      left: 100%;
    }
    
    .btn-update:hover {
      transform: translateY(-3px);
      box-shadow: 0 25px 50px rgba(102, 126, 234, 0.4);
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
    
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      33% { transform: translateY(-12px) rotate(1deg); }
      66% { transform: translateY(-6px) rotate(-1deg); }
    }
    
    .particle {
      position: absolute;
      background: rgba(102, 126, 234, 0.1);
      border-radius: 50%;
      animation: float 12s ease-in-out infinite;
    }
    
    .user-avatar {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
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
    
    .progress-ring {
      transform: rotate(-90deg);
    }
    
    .progress-ring-circle {
      transition: stroke-dashoffset 0.5s ease;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6">
  <!-- Background Particles -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="particle w-6 h-6 top-1/4 left-1/5" style="animation-delay: 0s;"></div>
    <div class="particle w-8 h-8 top-1/3 right-1/5" style="animation-delay: 2s;"></div>
    <div class="particle w-4 h-4 bottom-1/4 left-1/3" style="animation-delay: 4s;"></div>
    <div class="particle w-7 h-7 bottom-1/3 right-1/3" style="animation-delay: 6s;"></div>
    <div class="particle w-5 h-5 top-2/3 left-2/3" style="animation-delay: 8s;"></div>
  </div>

  <!-- Main Content -->
  <div class="w-full max-w-6xl flex flex-col lg:flex-row items-center justify-between gap-16 update-container">
    
    <!-- Left Side - User Information & Details -->
    <div class="w-full lg:w-2/5">
      <div class="floating-element">
        <!-- User Profile Header -->
        <div class="glass-effect rounded-3xl p-8 shadow-2xl mb-8">
          <div class="flex items-center space-x-6 mb-6">
            <div class="user-avatar w-20 h-20 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
              <?= strtoupper(substr(html_escape($user['username']), 0, 2)) ?>
            </div>
            <div>
              <h1 class="text-3xl font-black text-gray-900"><?= html_escape($user['username']) ?></h1>
              <div class="flex items-center space-x-3 mt-2">
                <span class="role-badge <?= $user['role'] ?>">
                  <i class="fas fa-user-tag mr-2"></i>
                  <?= $user['role'] ?>
                </span>
                <span class="text-gray-500 text-sm font-medium">ID: #<?= $user['id'] ?></span>
              </div>
            </div>
          </div>
          
          <!-- User Stats -->
          <div class="grid grid-cols-2 gap-4">
            <div class="info-card rounded-2xl p-4 text-center">
              <div class="text-blue-600 text-lg font-semibold">Active</div>
              <div class="text-gray-700 text-sm">Status</div>
            </div>
            <div class="info-card rounded-2xl p-4 text-center">
              <div class="text-green-600 text-lg font-semibold">Verified</div>
              <div class="text-gray-700 text-sm">Email</div>
            </div>
          </div>
        </div>
        
        <!-- Security Information -->
        <div class="glass-effect rounded-3xl p-8 shadow-2xl">
          <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
            <i class="fas fa-shield-alt text-blue-600 mr-3"></i>
            Security Overview
          </h3>
          
          <div class="space-y-6">
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-gray-700 font-medium">Password Strength</span>
                <span class="text-blue-600 font-semibold">Strong</span>
              </div>
              <div class="security-indicator">
                <div class="security-indicator-fill" style="width: 85%"></div>
              </div>
            </div>
            
            <div>
              <div class="flex justify-between items-center mb-2">
                <span class="text-gray-700 font-medium">Last Updated</span>
                <span class="text-gray-500 text-sm">2 days ago</span>
              </div>
            </div>
            
            <div class="bg-blue-50 rounded-2xl p-4 border border-blue-200">
              <div class="flex items-start space-x-3">
                <i class="fas fa-info-circle text-blue-600 mt-1"></i>
                <div>
                  <p class="text-blue-800 font-medium">Administrative Access</p>
                  <p class="text-blue-600 text-sm mt-1">You are updating user profile information. Changes will be logged for security purposes.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Update Form -->
    <div class="w-full lg:w-3/5 flex justify-center">
      <div class="gradient-border w-full max-w-2xl">
        <div class="glass-effect rounded-2xl p-10 shadow-2xl">
          <!-- Header -->
          <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl mb-6 shadow-2xl">
              <i class="fas fa-user-edit text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl font-black text-gray-900">Update User Profile</h2>
            <p class="text-gray-600 mt-3 text-lg">Modify user information and permissions</p>
          </div>

          <!-- Update Form -->
          <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-8">
            <!-- Username Field -->
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                <i class="fas fa-user mr-3 text-blue-500 text-lg"></i>
                Username
              </label>
              <div class="relative">
                <input type="text" 
                       name="username" 
                       value="<?= html_escape($user['username'])?>" 
                       required
                       class="input-field w-full pl-12 pr-6 py-5 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:outline-none text-gray-800 text-lg font-medium">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-id-card text-blue-500 text-lg"></i>
                </div>
              </div>
            </div>

            <!-- Email Field -->
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                <i class="fas fa-envelope mr-3 text-blue-500 text-lg"></i>
                Email Address
              </label>
              <div class="relative">
                <input type="email" 
                       name="email" 
                       value="<?= html_escape($user['email'])?>" 
                       required
                       class="input-field w-full pl-12 pr-6 py-5 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:outline-none text-gray-800 text-lg font-medium">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-at text-blue-500 text-lg"></i>
                </div>
              </div>
            </div>

            <?php if(!empty($logged_in_user) && $logged_in_user['role'] === 'admin'): ?>
              <!-- Role Dropdown for Admins -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                  <i class="fas fa-user-tag mr-3 text-blue-500 text-lg"></i>
                  User Role
                </label>
                <div class="relative">
                  <select name="role" 
                          required
                          class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:outline-none text-gray-800 text-lg font-medium appearance-none">
                    <option value="user" <?= $user['role'] === 'user' ? 'selected' : ''; ?>>Standard User</option>
                    <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : ''; ?>>Administrator</option>
                  </select>
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-user-shield text-blue-500 text-lg"></i>
                  </div>
                  <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                    <i class="fas fa-chevron-down text-blue-500 text-lg"></i>
                  </div>
                </div>
              </div>

              <!-- Password Field for Admins -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                  <i class="fas fa-lock mr-3 text-blue-500 text-lg"></i>
                  Update Password
                </label>
                <div class="relative">
                  <input type="password" 
                         name="password" 
                         id="password"
                         placeholder="Leave blank to keep current password"
                         class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:outline-none text-gray-800 text-lg font-medium">
                  <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-key text-blue-500 text-lg"></i>
                  </div>
                  <i class="fas fa-eye absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-400 hover:text-blue-600 transition-colors text-lg" id="togglePassword"></i>
                </div>
                <p class="text-gray-500 text-sm mt-2 ml-12">
                  <i class="fas fa-info-circle mr-1"></i>
                  Only enter a new password if you want to change it
                </p>
              </div>
            <?php endif; ?>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 pt-6">
              <button type="submit"
                      class="btn-update flex-1 text-white font-bold py-5 rounded-2xl text-lg flex items-center justify-center space-x-3">
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
          <div class="mt-10 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border border-blue-200">
            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 p-3 rounded-xl">
                <i class="fas fa-shield-check text-blue-600 text-xl"></i>
              </div>
              <div>
                <p class="text-blue-800 font-semibold text-lg">Security & Compliance</p>
                <p class="text-blue-600 text-sm mt-2">All changes are logged and monitored. User profile updates require proper authorization and follow enterprise security protocols.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="fixed bottom-0 left-0 right-0 py-6 text-center bg-white bg-opacity-90 backdrop-blur-sm border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4">
      <p class="text-gray-600 text-sm">
        &copy; 2024 Corporate Portal Enterprise. All rights reserved. 
        <span class="mx-3">•</span>
        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">Privacy Policy</a>
        <span class="mx-3">•</span>
        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">User Management</a>
        <span class="mx-3">•</span>
        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">Security</a>
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
          this.parentElement.classList.add('ring-4', 'ring-blue-100');
        });
        
        input.addEventListener('blur', function() {
          this.parentElement.classList.remove('ring-4', 'ring-blue-100');
        });
      });
    });
  </script>
</body>
</html>