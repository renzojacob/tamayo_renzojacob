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
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 0.8s ease;
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
  </style>
</head>
<body class="min-h-screen flex items-center justify-center font-sans text-gray-800 p-4">

  <div class="glass-effect p-8 rounded-2xl shadow-2xl w-full max-w-md animate-fadeIn">
    <!-- Header with icon -->
    <div class="text-center mb-6">
      <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
        <i class="fas fa-user-plus text-blue-600 text-2xl"></i>
      </div>
      <h1 class="text-2xl font-bold text-blue-800">Create New User</h1>
      <p class="text-gray-600 mt-2">Add a new user to the system</p>
    </div>

    <form id="user-form" action="<?=site_url('users/create/')?>" method="POST" class="space-y-5">

      <!-- Username -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Username</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-user text-blue-500"></i>
          </div>
          <input type="text" name="username" placeholder="Enter username" required
                 value="<?= isset($username) ? html_escape($username) : '' ?>"
                 class="w-full pl-10 pr-4 py-3 border border-blue-200 bg-blue-50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none text-gray-800 transition-colors duration-300">
        </div>
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-envelope text-blue-500"></i>
          </div>
          <input type="email" name="email" placeholder="Enter email address" required
                 value="<?= isset($email) ? html_escape($email) : '' ?>"
                 class="w-full pl-10 pr-4 py-3 border border-blue-200 bg-blue-50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none text-gray-800 transition-colors duration-300">
        </div>
      </div>

      <!-- Password with toggle -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-lock text-blue-500"></i>
          </div>
          <input type="password" name="password" id="password" placeholder="Enter password" required
                 class="w-full pl-10 pr-12 py-3 border border-blue-200 bg-blue-50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none text-gray-800 transition-colors duration-300">
          <i class="fa-solid fa-eye absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer text-blue-600 hover:text-blue-800 transition-colors" id="togglePassword"></i>
        </div>
      </div>

      <!-- Role -->
      <?php if($logged_in_user['role'] === 'admin'): ?>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">User Role</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <i class="fas fa-user-tag text-blue-500"></i>
            </div>
            <select name="role" required
                    class="w-full pl-10 pr-4 py-3 border border-blue-200 bg-blue-50 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none text-gray-800 appearance-none transition-colors duration-300">
              <option value="" disabled selected>Select User Role</option>
              <option value="user">Standard User</option>
              <option value="admin">Administrator</option>
            </select>
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
              <i class="fas fa-chevron-down text-blue-500"></i>
            </div>
          </div>
        </div>
      <?php else: ?>
        <!-- Normal users can only create a user account -->
        <input type="hidden" name="role" value="user">
      <?php endif; ?>

      <!-- Submit -->
      <button type="submit"
              class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold py-3 rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-2">
        <i class="fas fa-user-plus"></i>
        <span>Create User</span>
      </button>
    </form>

    <!-- Return to Home -->
    <div class="text-center mt-6 pt-6 border-t border-blue-100">
      <a href="<?=site_url('/users'); ?>" 
         class="inline-flex items-center space-x-2 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium py-2 px-4 rounded-xl shadow-md transition-all duration-300">
        <i class="fas fa-arrow-left"></i>
        <span>Return to User Directory</span>
      </a>
    </div>
  </div>

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
    });
  </script>

</body>
</html>