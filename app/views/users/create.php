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
      border: 1px solid #e5e7eb;
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
      background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
    }
    
    .btn-secondary {
      background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
      transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
      background: linear-gradient(135deg, #4b5563 0%, #374151 100%);
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(107, 114, 128, 0.3);
    }
    
    .fade-in {
      animation: fadeIn 0.6s ease-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .password-toggle {
      transition: color 0.2s ease;
    }
    
    .password-toggle:hover {
      color: #3b82f6;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center text-gray-800 py-8">

  <!-- Navigation Bar -->
  <nav class="glass-effect shadow-lg fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <div class="bg-blue-600 p-2 rounded-lg">
          <i class="fas fa-users text-white text-xl"></i>
        </div>
        <a href="#" class="text-xl font-bold text-gray-800">Corporate User Management</a>
      </div>
      
      <div class="flex items-center space-x-4">
        <?php if(isset($logged_in_user) && !empty($logged_in_user)): ?>
          <div class="hidden md:flex items-center space-x-1 text-gray-600">
            <i class="fas fa-user-circle"></i>
            <span><?= html_escape($logged_in_user['username'] ?? 'User'); ?></span>
          </div>
          <a href="<?=site_url('reg/logout');?>" 
             class="flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium px-4 py-2 rounded-lg shadow hover:shadow-lg transition-all duration-300">
             <i class="fas fa-sign-out-alt"></i>
             <span>Logout</span>
          </a>
        <?php else: ?>
          <a href="<?=site_url('/users'); ?>" 
             class="flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium px-4 py-2 rounded-lg shadow hover:shadow-lg transition-all duration-300">
             <i class="fas fa-home"></i>
             <span>Home</span>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <!-- Main Form Container -->
  <div class="w-full max-w-lg mx-4 fade-in">
    <div class="glass-effect rounded-2xl overflow-hidden">
      
      <!-- Form Header with Gradient -->
      <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-8 text-center">
        <div class="flex justify-center mb-4">
          <div class="bg-white bg-opacity-20 p-4 rounded-full">
            <i class="fas fa-user-plus text-white text-3xl"></i>
          </div>
        </div>
        <h1 class="text-3xl font-bold mb-2">Create New User</h1>
        <p class="text-blue-100">Add a new user to the corporate management system</p>
      </div>
      
      <!-- Form Content -->
      <div class="p-8">
        <form id="user-form" action="<?=site_url('users/create/')?>" method="POST" class="space-y-6">
          
          <!-- Username Field -->
          <div>
            <label for="username" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
              <i class="fas fa-user mr-2 text-blue-500"></i>
              Username
            </label>
            <div class="relative">
              <input type="text" 
                     id="username"
                     name="username" 
                     placeholder="Enter username" 
                     required
                     value="<?= isset($username) ? html_escape($username) : '' ?>"
                     class="w-full px-4 py-3 pl-11 form-input rounded-xl focus:outline-none text-gray-800">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-user text-gray-400"></i>
              </div>
            </div>
          </div>

          <!-- Email Field -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
              <i class="fas fa-envelope mr-2 text-blue-500"></i>
              Email Address
            </label>
            <div class="relative">
              <input type="email" 
                     id="email"
                     name="email" 
                     placeholder="Enter email address" 
                     required
                     value="<?= isset($email) ? html_escape($email) : '' ?>"
                     class="w-full px-4 py-3 pl-11 form-input rounded-xl focus:outline-none text-gray-800">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-envelope text-gray-400"></i>
              </div>
            </div>
          </div>

          <!-- Password Field -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
              <i class="fas fa-lock mr-2 text-blue-500"></i>
              Password
            </label>
            <div class="relative">
              <input type="password" 
                     id="password"
                     name="password" 
                     placeholder="Create a secure password" 
                     required
                     class="w-full px-4 py-3 pl-11 pr-11 form-input rounded-xl focus:outline-none text-gray-800">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-gray-400"></i>
              </div>
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <i class="fas fa-eye password-toggle cursor-pointer text-gray-400 hover:text-blue-500" id="togglePassword"></i>
              </div>
            </div>
            <p class="text-xs text-gray-500 mt-2">Use at least 8 characters with a mix of letters, numbers, and symbols</p>
          </div>

          <!-- Role Field (Admin Only) -->
          <?php if($logged_in_user['role'] === 'admin'): ?>
            <div>
              <label for="role" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                <i class="fas fa-user-tag mr-2 text-blue-500"></i>
                User Role
              </label>
              <div class="relative">
                <select id="role" 
                        name="role" 
                        required
                        class="w-full px-4 py-3 pl-11 form-input rounded-xl focus:outline-none text-gray-800 appearance-none">
                  <option value="" disabled selected>Select a role</option>
                  <option value="user">User</option>
                  <option value="admin">Administrator</option>
                  <option value="manager">Manager</option>
                  <option value="editor">Editor</option>
                </select>
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="fas fa-user-tag text-gray-400"></i>
                </div>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                  <i class="fas fa-chevron-down text-gray-400"></i>
                </div>
              </div>
              <p class="text-xs text-gray-500 mt-2">Administrators have full system access</p>
            </div>
          <?php else: ?>
            <!-- Normal users can only create a user account -->
            <input type="hidden" name="role" value="user">
          <?php endif; ?>

          <!-- Submit Button -->
          <div class="pt-4">
            <button type="submit"
                    class="w-full btn-primary text-white font-semibold py-4 rounded-xl shadow-md transition-all duration-300 flex items-center justify-center space-x-2">
              <i class="fas fa-user-plus"></i>
              <span>Create User Account</span>
            </button>
          </div>
        </form>

        <!-- Return to Home Button -->
        <div class="mt-8 pt-6 border-t border-gray-200 text-center">
          <a href="<?=site_url('/users'); ?>" 
             class="btn-secondary text-white font-medium py-3 px-6 rounded-xl shadow-md transition-all duration-300 inline-flex items-center space-x-2">
            <i class="fas fa-arrow-left"></i>
            <span>Return to User Directory</span>
          </a>
        </div>
      </div>
    </div>
    
    <!-- Additional Info Section -->
    <div class="mt-8 glass-effect rounded-2xl p-6 text-center">
      <h3 class="font-semibold text-gray-700 mb-2">Need help with user management?</h3>
      <p class="text-gray-600 text-sm">Contact your system administrator for assistance with user roles and permissions.</p>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white w-full mt-12 fixed bottom-0">
    <div class="max-w-7xl mx-auto px-6 py-4 text-center text-sm">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center space-x-2 mb-2 md:mb-0">
          <div class="bg-blue-600 p-1 rounded">
            <i class="fas fa-users text-white text-xs"></i>
          </div>
          <span>Corporate User Management System</span>
        </div>
        <div class="text-gray-400">
          &copy; <?= date('Y'); ?> All rights reserved.
        </div>
      </div>
    </div>
  </footer>

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
          
          // Change color when active
          if (password.type === 'text') {
            this.classList.add('text-blue-500');
            this.classList.remove('text-gray-400');
          } else {
            this.classList.remove('text-blue-500');
            this.classList.add('text-gray-400');
          }
        });
      }
      
      // Add focus effects to form inputs
      const formInputs = document.querySelectorAll('.form-input');
      formInputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.parentElement.classList.add('ring-2', 'ring-blue-200');
        });
        
        input.addEventListener('blur', function() {
          this.parentElement.classList.remove('ring-2', 'ring-blue-200');
        });
      });
    });
  </script>

</body>
</html>