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
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .form-input {
      transition: all 0.3s ease;
    }
    
    .form-input:focus {
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fadeIn {
      animation: fadeIn 0.8s ease;
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
  </style>
</head>

<body class="min-h-screen text-gray-800 py-8">

  <!-- Navigation Bar -->
  <nav class="glass-effect shadow-lg rounded-2xl max-w-4xl mx-auto mb-8">
    <div class="px-6 py-4 flex justify-between items-center">
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

  <!-- Main Form Container -->
  <div class="max-w-lg mx-auto animate-fadeIn">
    <div class="glass-effect rounded-2xl shadow-xl overflow-hidden">
      
      <!-- Form Header -->
      <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-8 text-center">
        <div class="flex justify-center mb-4">
          <div class="bg-white bg-opacity-20 p-4 rounded-full">
            <i class="fas fa-user-plus text-white text-2xl"></i>
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
              <input type="text" name="username" id="username" placeholder="Enter username" required
                     value="<?= isset($username) ? html_escape($username) : '' ?>"
                     class="w-full px-4 py-3 pl-10 border border-gray-300 bg-white rounded-xl form-input focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-800">
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
              <input type="email" name="email" id="email" placeholder="Enter email address" required
                     value="<?= isset($email) ? html_escape($email) : '' ?>"
                     class="w-full px-4 py-3 pl-10 border border-gray-300 bg-white rounded-xl form-input focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-800">
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
              <input type="password" name="password" id="password" placeholder="Enter password" required
                     class="w-full px-4 py-3 pl-10 pr-10 border border-gray-300 bg-white rounded-xl form-input focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-800">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-gray-400"></i>
              </div>
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <i class="fas fa-eye text-gray-400 cursor-pointer hover:text-blue-500" id="togglePassword"></i>
              </div>
            </div>
            <p class="text-xs text-gray-500 mt-2">Password must be at least 8 characters long</p>
          </div>

          <!-- Role Selection (Admin Only) -->
          <?php if($logged_in_user['role'] === 'admin'): ?>
            <div>
              <label for="role" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                <i class="fas fa-user-tag mr-2 text-blue-500"></i>
                User Role
              </label>
              <div class="relative">
                <select name="role" id="role" required
                        class="w-full px-4 py-3 pl-10 border border-gray-300 bg-white rounded-xl form-input focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-800 appearance-none">
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
            </div>
          <?php else: ?>
            <!-- Normal users can only create a user account -->
            <input type="hidden" name="role" value="user">
          <?php endif; ?>

          <!-- Submit Button -->
          <button type="submit"
                  class="w-full btn-primary text-white font-semibold py-3 rounded-xl shadow-md transition-all duration-300 flex items-center justify-center space-x-2">
            <i class="fas fa-user-plus"></i>
            <span>Create User Account</span>
          </button>
        </form>

        <!-- Return to Home -->
        <div class="text-center mt-8 pt-6 border-t border-gray-200">
          <a href="<?=site_url('/users'); ?>" 
             class="inline-flex items-center space-x-2 btn-secondary text-white font-medium py-3 px-6 rounded-xl shadow-md transition-all duration-300">
            <i class="fas fa-arrow-left"></i>
            <span>Return to User Directory</span>
          </a>
        </div>
      </div>
    </div>
    
    <!-- Form Footer -->
    <div class="text-center mt-6 text-gray-600 text-sm">
      <p>Corporate User Management System &copy; <?= date('Y'); ?></p>
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
      
      // Add form validation
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
    });
  </script>

</body>
</html>