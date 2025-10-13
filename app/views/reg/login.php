<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Corporate Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .gradient-border {
      position: relative;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      padding: 2px;
      border-radius: 16px;
    }
    
    .gradient-border::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 18px;
      z-index: -1;
      opacity: 0.7;
      filter: blur(10px);
    }
    
    .login-container {
      animation: slideInUp 0.8s ease-out;
    }
    
    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .input-field {
      transition: all 0.3s ease;
    }
    
    .input-field:focus {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.15);
    }
    
    .btn-login {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      transition: all 0.3s ease;
    }
    
    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    }
    
    .floating-element {
      animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
      0% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-10px);
      }
      100% {
        transform: translateY(0px);
      }
    }
    
    .particle {
      position: absolute;
      background: rgba(102, 126, 234, 0.1);
      border-radius: 50%;
      animation: float 8s ease-in-out infinite;
    }
    
    .error-box {
      animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
  <!-- Background Particles -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="particle w-4 h-4 top-1/4 left-1/4" style="animation-delay: 0s;"></div>
    <div class="particle w-6 h-6 top-1/3 right-1/4" style="animation-delay: 1s;"></div>
    <div class="particle w-3 h-3 bottom-1/4 left-1/3" style="animation-delay: 2s;"></div>
    <div class="particle w-5 h-5 bottom-1/3 right-1/3" style="animation-delay: 3s;"></div>
    <div class="particle w-4 h-4 top-2/3 left-2/3" style="animation-delay: 4s;"></div>
  </div>

  <!-- Main Content -->
  <div class="w-full max-w-6xl flex flex-col lg:flex-row items-center justify-between gap-12 login-container">
    
    <!-- Left Side - Branding -->
    <div class="w-full lg:w-1/2 text-center lg:text-left">
      <div class="floating-element">
        <div class="flex items-center justify-center lg:justify-start space-x-4 mb-8">
          <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-4 rounded-2xl shadow-2xl">
            <i class="fas fa-users text-white text-3xl"></i>
          </div>
          <div>
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-800">Corporate Portal</h1>
            <p class="text-gray-600 mt-2 text-lg">Enterprise User Management System</p>
          </div>
        </div>
        
        <div class="bg-white bg-opacity-50 rounded-2xl p-8 mt-8 backdrop-blur-sm">
          <h2 class="text-2xl font-semibold text-gray-800 mb-4">Secure Access to Your Workspace</h2>
          <div class="space-y-4">
            <div class="flex items-center space-x-3">
              <div class="bg-blue-100 p-2 rounded-lg">
                <i class="fas fa-shield-alt text-blue-600"></i>
              </div>
              <span class="text-gray-700">Enterprise-grade security</span>
            </div>
            <div class="flex items-center space-x-3">
              <div class="bg-green-100 p-2 rounded-lg">
                <i class="fas fa-bolt text-green-600"></i>
              </div>
              <span class="text-gray-700">Lightning-fast performance</span>
            </div>
            <div class="flex items-center space-x-3">
              <div class="bg-purple-100 p-2 rounded-lg">
                <i class="fas fa-chart-line text-purple-600"></i>
              </div>
              <span class="text-gray-700">Advanced analytics dashboard</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <div class="gradient-border w-full max-w-md">
        <div class="glass-effect rounded-2xl p-8 shadow-2xl">
          <!-- Header -->
          <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl mb-4 shadow-lg">
              <i class="fas fa-lock text-white text-2xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-800">Welcome Back</h2>
            <p class="text-gray-600 mt-2">Sign in to your corporate account</p>
          </div>

          <!-- Error Message -->
          <?php if (!empty($error)): ?>
            <div class="error-box bg-red-50 border border-red-200 rounded-xl p-4 mb-6 flex items-center space-x-3">
              <div class="bg-red-100 p-2 rounded-lg">
                <i class="fas fa-exclamation-triangle text-red-600"></i>
              </div>
              <div>
                <p class="text-red-700 font-medium"><?= $error ?></p>
              </div>
            </div>
          <?php endif; ?>

          <!-- Login Form -->
          <form method="post" action="<?= site_url('reg/login') ?>" class="space-y-6">
            <!-- Username Field -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Username</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-user text-blue-500"></i>
                </div>
                <input type="text" 
                       name="username" 
                       placeholder="Enter your username" 
                       required
                       class="input-field w-full pl-12 pr-4 py-4 border border-gray-200 bg-white rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-300">
              </div>
            </div>

            <!-- Password Field -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-key text-blue-500"></i>
                </div>
                <input type="password" 
                       name="password" 
                       id="password"
                       placeholder="Enter your password" 
                       required
                       class="input-field w-full pl-12 pr-12 py-4 border border-gray-200 bg-white rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition-all duration-300">
                <i class="fas fa-eye toggle-password absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-400 hover:text-blue-600 transition-colors duration-300" id="togglePassword"></i>
              </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input type="checkbox" id="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
              </div>
              <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">
                Forgot password?
              </a>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                    class="btn-login w-full text-white font-semibold py-4 rounded-xl shadow-lg flex items-center justify-center space-x-2">
              <i class="fas fa-sign-in-alt"></i>
              <span>Sign In to Dashboard</span>
            </button>
          </form>

          <!-- Divider -->
          <div class="flex items-center my-6">
            <div class="flex-1 border-t border-gray-200"></div>
            <div class="px-4 text-sm text-gray-500">or</div>
            <div class="flex-1 border-t border-gray-200"></div>
          </div>

          <!-- Register Link -->
          <div class="text-center">
            <p class="text-gray-600">
              Don't have an account?
              <a href="<?= site_url('reg/register'); ?>" 
                 class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300 flex items-center justify-center space-x-2 mt-2">
                <i class="fas fa-user-plus"></i>
                <span>Create corporate account</span>
              </a>
            </p>
          </div>

          <!-- Security Notice -->
          <div class="mt-8 p-4 bg-blue-50 rounded-xl border border-blue-200">
            <div class="flex items-start space-x-3">
              <i class="fas fa-info-circle text-blue-600 mt-1"></i>
              <div>
                <p class="text-sm text-blue-800 font-medium">Secure Authentication</p>
                <p class="text-xs text-blue-600 mt-1">Your credentials are encrypted and protected by enterprise security protocols.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="fixed bottom-0 left-0 right-0 py-4 text-center">
    <p class="text-gray-500 text-sm">
      &copy; 2024 Corporate Portal. All rights reserved. 
      <span class="mx-2">•</span>
      <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">Privacy Policy</a>
      <span class="mx-2">•</span>
      <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">Terms of Service</a>
    </p>
  </footer>

  <script>
    // Password toggle functionality
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    if (togglePassword && password) {
      togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });
    }

    // Add floating animation to particles
    document.addEventListener('DOMContentLoaded', function() {
      const particles = document.querySelectorAll('.particle');
      particles.forEach((particle, index) => {
        particle.style.animationDelay = `${index * 2}s`;
      });
      
      // Add input focus effects
      const inputs = document.querySelectorAll('input');
      inputs.forEach(input => {
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