<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create User | Corporate Management System</title>
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
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    
    .form-input {
      transition: all 0.3s ease;
      border: 1px solid #e2e8f0;
    }
    
    .form-input:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    .btn-primary {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
    }
    
    .btn-secondary {
      background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
      transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(107, 114, 128, 0.3);
    }
    
    .fade-in {
      animation: fadeIn 0.8s ease-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .slide-in {
      animation: slideIn 0.8s ease-out;
    }
    
    @keyframes slideIn {
      from { opacity: 0; transform: translateX(-20px); }
      to { opacity: 1; transform: translateX(0); }
    }
    
    .floating {
      animation: floating 3s ease-in-out infinite;
    }
    
    @keyframes floating {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    
    .pulse-slow {
      animation: pulse 4s infinite;
    }
    
    .role-select {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
      background-position: right 0.75rem center;
      background-repeat: no-repeat;
      background-size: 1.5em 1.5em;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center text-gray-800 p-4">
  <!-- Background decorative elements -->
  <div class="fixed top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute top-10 left-10 w-20 h-20 bg-blue-500 rounded-full opacity-10 floating"></div>
    <div class="absolute top-1/4 right-20 w-16 h-16 bg-indigo-500 rounded-full opacity-10 floating" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-20 left-1/4 w-24 h-24 bg-purple-500 rounded-full opacity-10 floating" style="animation-delay: 2s;"></div>
    <div class="absolute bottom-40 right-1/4 w-12 h-12 bg-pink-500 rounded-full opacity-10 floating" style="animation-delay: 1.5s;"></div>
  </div>

  <!-- Main Container -->
  <div class="w-full max-w-6xl flex flex-col md:flex-row items-center justify-between gap-12 z-10">
    <!-- Left Side - Branding and Information -->
    <div class="w-full md:w-1/2 flex flex-col items-start fade-in">
      <div class="glass-effect rounded-2xl p-8 w-full max-w-md">
        <div class="flex items-center space-x-3 mb-6">
          <div class="bg-blue-600 p-3 rounded-xl shadow-lg">
            <i class="fas fa-users text-white text-2xl"></i>
          </div>
          <h1 class="text-2xl font-bold text-gray-800">Corporate User Management</h1>
        </div>
        
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Create New User Account</h2>
        <p class="text-gray-600 mb-8">Add a new team member to your organization with appropriate access privileges and role permissions.</p>
        
        <div class="space-y-4">
          <div class="flex items-start space-x-3">
            <div class="bg-blue-100 p-2 rounded-lg mt-1">
              <i class="fas fa-shield-alt text-blue-600"></i>
            </div>
            <div>
              <h3 class="font-semibold text-gray-800">Role-Based Access Control</h3>
              <p class="text-gray-600 text-sm">Assign appropriate permissions based on organizational roles.</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-3">
            <div class="bg-green-100 p-2 rounded-lg mt-1">
              <i class="fas fa-user-check text-green-600"></i>
            </div>
            <div>
              <h3 class="font-semibold text-gray-800">Secure Authentication</h3>
              <p class="text-gray-600 text-sm">All accounts include enterprise-grade security measures.</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-3">
            <div class="bg-purple-100 p-2 rounded-lg mt-1">
              <i class="fas fa-cogs text-purple-600"></i>
            </div>
            <div>
              <h3 class="font-semibold text-gray-800">Easy Management</h3>
              <p class="text-gray-600 text-sm">Update user details and permissions at any time.</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Stats Cards -->
      <div class="grid grid-cols-2 gap-4 mt-8 w-full max-w-md">
        <div class="bg-white bg-opacity-80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500 text-sm">Total Users</p>
              <h3 class="text-xl font-bold text-gray-800">24</h3>
            </div>
            <div class="bg-blue-100 p-2 rounded-lg">
              <i class="fas fa-users text-blue-600"></i>
            </div>
          </div>
        </div>
        
        <div class="bg-white bg-opacity-80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500 text-sm">Active Today</p>
              <h3 class="text-xl font-bold text-gray-800">12</h3>
            </div>
            <div class="bg-green-100 p-2 rounded-lg">
              <i class="fas fa-user-check text-green-600"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Form -->
    <div class="w-full md:w-1/2 flex justify-center slide-in">
      <div class="glass-effect rounded-2xl p-8 w-full max-w-lg">
        <div class="text-center mb-8">
          <h1 class="text-3xl font-bold text-gray-800 mb-2">Create User Account</h1>
          <p class="text-gray-600">Add a new user to your organization</p>
        </div>

        <form id="user-form" action="<?=site_url('users/create/')?>" method="POST" class="space-y-6">
          <!-- Username -->
          <div>
            <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
              <i class="fas fa-user mr-2 text-blue-500"></i>Username
            </label>
            <div class="relative">
              <input type="text" name="username" id="username" placeholder="Enter username" required
                     value="<?= isset($username) ? html_escape($username) : '' ?>"
                     class="w-full px-4 py-3 pl-11 form-input rounded-xl focus:outline-none text-gray-800 bg-white">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-user text-gray-400"></i>
              </div>
            </div>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
              <i class="fas fa-envelope mr-2 text-blue-500"></i>Email Address
            </label>
            <div class="relative">
              <input type="email" name="email" id="email" placeholder="Enter email address" required
                     value="<?= isset($email) ? html_escape($email) : '' ?>"
                     class="w-full px-4 py-3 pl-11 form-input rounded-xl focus:outline-none text-gray-800 bg-white">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-envelope text-gray-400"></i>
              </div>
            </div>
          </div>

          <!-- Password with toggle -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
              <i class="fas fa-lock mr-2 text-blue-500"></i>Password
            </label>
            <div class="relative">
              <input type="password" name="password" id="password" placeholder="Enter password" required
                     class="w-full px-4 py-3 pl-11 pr-11 form-input rounded-xl focus:outline-none text-gray-800 bg-white">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-gray-400"></i>
              </div>
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <i class="fa-solid fa-eye text-gray-400 cursor-pointer hover:text-gray-600" id="togglePassword"></i>
              </div>
            </div>
            <div class="mt-2 flex items-center text-xs text-gray-500">
              <i class="fas fa-info-circle mr-1"></i>
              <span>Password must be at least 8 characters long</span>
            </div>
          </div>

          <!-- Role -->
          <?php if($logged_in_user['role'] === 'admin'): ?>
            <div>
              <label for="role" class="block text-sm font-medium text-gray-700 mb-2">
                <i class="fas fa-user-tag mr-2 text-blue-500"></i>User Role
              </label>
              <div class="relative">
                <select name="role" id="role" required
                        class="w-full px-4 py-3 pl-11 pr-10 form-input rounded-xl focus:outline-none text-gray-800 bg-white role-select">
                  <option value="" disabled selected>Select User Role</option>
                  <option value="user">Standard User</option>
                  <option value="admin">Administrator</option>
                  <option value="manager">Manager</option>
                  <option value="editor">Content Editor</option>
                </select>
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="fas fa-user-tag text-gray-400"></i>
                </div>
              </div>
              <div class="mt-2 flex items-center text-xs text-gray-500">
                <i class="fas fa-info-circle mr-1"></i>
                <span>Admins have full system access</span>
              </div>
            </div>
          <?php else: ?>
            <!-- Normal users can only create a user account -->
            <input type="hidden" name="role" value="user">
          <?php endif; ?>

          <!-- Submit -->
          <button type="submit"
                  class="w-full btn-primary text-white font-semibold py-3 rounded-xl shadow-md transition duration-300 flex items-center justify-center space-x-2">
            <i class="fas fa-user-plus"></i>
            <span>Create User Account</span>
          </button>
        </form>

        <!-- Return to Dashboard -->
        <div class="text-center mt-8 pt-6 border-t border-gray-200">
          <a href="<?=site_url('/users'); ?>" 
             class="inline-flex items-center space-x-2 btn-secondary text-white font-medium py-3 px-6 rounded-xl shadow-md transition duration-300">
            <i class="fas fa-arrow-left"></i>
            <span>Return to User Dashboard</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Password Toggle Script -->
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
      
      // Form validation and enhancement
      const form = document.getElementById('user-form');
      if (form) {
        form.addEventListener('submit', function(e) {
          const password = document.getElementById('password');
          if (password && password.value.length < 8) {
            e.preventDefault();
            alert('Password must be at least 8 characters long');
            password.focus();
          }
        });
      }
      
      // Add focus effects to form inputs
      const inputs = document.querySelectorAll('.form-input');
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.parentElement.classList.add('ring-2', 'ring-blue-500', 'ring-opacity-50');
          this.parentElement.classList.remove('ring-0');
        });
        
        input.addEventListener('blur', function() {
          this.parentElement.classList.remove('ring-2', 'ring-blue-500', 'ring-opacity-50');
        });
      });
    });
  </script>

</body>
</html>