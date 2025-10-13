<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Corporate Portal</title>
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
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(25px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .gradient-border {
      position: relative;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #4c51bf 100%);
      padding: 3px;
      border-radius: 24px;
      box-shadow: 0 25px 50px -12px rgba(102, 126, 234, 0.25);
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
      opacity: 0.6;
      filter: blur(15px);
      animation: gradientShift 8s ease infinite;
    }
    
    @keyframes gradientShift {
      0%, 100% { opacity: 0.6; }
      50% { opacity: 0.8; }
    }
    
    .register-container {
      animation: slideInUp 1s ease-out;
    }
    
    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(40px) scale(0.95);
      }
      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }
    
    .input-field {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      background: rgba(255, 255, 255, 0.9);
      border: 1.5px solid #e2e8f0;
    }
    
    .input-field:focus {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
      border-color: #667eea;
    }
    
    .btn-register {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    
    .btn-register::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }
    
    .btn-register:hover::before {
      left: 100%;
    }
    
    .btn-register:hover {
      transform: translateY(-3px);
      box-shadow: 0 20px 40px rgba(102, 126, 234, 0.4);
    }
    
    .floating-element {
      animation: float 8s ease-in-out infinite;
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      33% { transform: translateY(-15px) rotate(1deg); }
      66% { transform: translateY(-8px) rotate(-1deg); }
    }
    
    .particle {
      position: absolute;
      background: rgba(102, 126, 234, 0.1);
      border-radius: 50%;
      animation: float 10s ease-in-out infinite;
    }
    
    .security-meter {
      height: 4px;
      background: #e2e8f0;
      border-radius: 2px;
      overflow: hidden;
      margin-top: 8px;
    }
    
    .security-meter-fill {
      height: 100%;
      width: 0%;
      background: linear-gradient(90deg, #ef4444, #f59e0b, #10b981);
      transition: width 0.5s ease;
    }
    
    .feature-card {
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.9);
    }
    
    .password-requirements {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease;
    }
    
    .password-requirements.show {
      max-height: 200px;
    }
    
    .progress-ring {
      transform: rotate(-90deg);
    }
    
    .progress-ring-circle {
      transition: stroke-dashoffset 0.5s ease;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
  <!-- Background Particles -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="particle w-6 h-6 top-1/4 left-1/5" style="animation-delay: 0s;"></div>
    <div class="particle w-8 h-8 top-1/3 right-1/5" style="animation-delay: 2s;"></div>
    <div class="particle w-4 h-4 bottom-1/4 left-1/3" style="animation-delay: 4s;"></div>
    <div class="particle w-7 h-7 bottom-1/3 right-1/3" style="animation-delay: 6s;"></div>
    <div class="particle w-5 h-5 top-2/3 left-2/3" style="animation-delay: 8s;"></div>
  </div>

  <!-- Main Content -->
  <div class="w-full max-w-7xl flex flex-col lg:flex-row items-center justify-between gap-16 register-container">
    
    <!-- Left Side - Branding & Features -->
    <div class="w-full lg:w-1/2 text-center lg:text-left">
      <div class="floating-element">
        <!-- Logo & Brand -->
        <div class="flex items-center justify-center lg:justify-start space-x-4 mb-8">
          <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 p-5 rounded-3xl shadow-2xl">
            <i class="fas fa-user-shield text-white text-4xl"></i>
          </div>
          <div>
            <h1 class="text-5xl lg:text-6xl font-black text-gray-900 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
              Corporate Portal
            </h1>
            <p class="text-gray-700 mt-3 text-xl font-medium">Enterprise Account Registration</p>
          </div>
        </div>
        
        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
          <div class="feature-card rounded-2xl p-6 border border-gray-100 shadow-lg">
            <div class="flex items-center space-x-4">
              <div class="bg-blue-100 p-3 rounded-xl">
                <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-gray-800">Enterprise Security</h3>
                <p class="text-gray-600 text-sm mt-1">Military-grade encryption</p>
              </div>
            </div>
          </div>
          
          <div class="feature-card rounded-2xl p-6 border border-gray-100 shadow-lg">
            <div class="flex items-center space-x-4">
              <div class="bg-green-100 p-3 rounded-xl">
                <i class="fas fa-chart-line text-green-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-gray-800">Advanced Analytics</h3>
                <p class="text-gray-600 text-sm mt-1">Real-time insights & reports</p>
              </div>
            </div>
          </div>
          
          <div class="feature-card rounded-2xl p-6 border border-gray-100 shadow-lg">
            <div class="flex items-center space-x-4">
              <div class="bg-purple-100 p-3 rounded-xl">
                <i class="fas fa-users text-purple-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-gray-800">Team Collaboration</h3>
                <p class="text-gray-600 text-sm mt-1">Seamless team coordination</p>
              </div>
            </div>
          </div>
          
          <div class="feature-card rounded-2xl p-6 border border-gray-100 shadow-lg">
            <div class="flex items-center space-x-4">
              <div class="bg-orange-100 p-3 rounded-xl">
                <i class="fas fa-cloud-upload-alt text-orange-600 text-xl"></i>
              </div>
              <div>
                <h3 class="font-bold text-gray-800">Cloud Storage</h3>
                <p class="text-gray-600 text-sm mt-1">Secure cloud infrastructure</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Testimonial -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 mt-8 border border-blue-100">
          <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
              JD
            </div>
            <div>
              <p class="text-gray-700 italic">"The most secure and professional enterprise portal we've implemented. Our team collaboration has improved by 47%."</p>
              <p class="text-gray-600 font-semibold mt-2">— John Davidson, CTO</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Registration Form -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <div class="gradient-border w-full max-w-lg">
        <div class="glass-effect rounded-2xl p-10 shadow-2xl">
          <!-- Header -->
          <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl mb-6 shadow-2xl">
              <i class="fas fa-user-plus text-white text-3xl"></i>
            </div>
            <h2 class="text-4xl font-black text-gray-900">Create Account</h2>
            <p class="text-gray-600 mt-3 text-lg">Join our enterprise platform</p>
          </div>

          <!-- Registration Form -->
          <form method="POST" action="<?= site_url('reg/register'); ?>" class="space-y-8">
            <!-- Username Field -->
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                <i class="fas fa-user mr-2 text-blue-500"></i>
                Username
              </label>
              <div class="relative">
                <input type="text" 
                       name="username" 
                       placeholder="Enter your corporate username" 
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
                <i class="fas fa-envelope mr-2 text-blue-500"></i>
                Corporate Email
              </label>
              <div class="relative">
                <input type="email" 
                       name="email" 
                       placeholder="your.name@company.com" 
                       required
                       class="input-field w-full pl-12 pr-6 py-5 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:outline-none text-gray-800 text-lg font-medium">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-at text-blue-500 text-lg"></i>
                </div>
              </div>
            </div>

            <!-- Password Field -->
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center justify-between">
                <div class="flex items-center">
                  <i class="fas fa-lock mr-2 text-blue-500"></i>
                  Password
                </div>
                <button type="button" class="text-xs text-blue-600 font-medium hover:text-blue-800 transition-colors" id="showRequirements">
                  Requirements
                </button>
              </label>
              <div class="relative">
                <input type="password" 
                       id="password" 
                       name="password" 
                       placeholder="Create secure password" 
                       required
                       class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:outline-none text-gray-800 text-lg font-medium">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-key text-blue-500 text-lg"></i>
                </div>
                <i class="fas fa-eye absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-400 hover:text-blue-600 transition-colors text-lg" id="togglePassword"></i>
              </div>
              
              <!-- Password Requirements -->
              <div class="password-requirements mt-4 bg-gray-50 rounded-xl p-4 border border-gray-200" id="passwordRequirements">
                <p class="text-sm font-semibold text-gray-700 mb-3">Password must contain:</p>
                <ul class="text-sm text-gray-600 space-y-2">
                  <li class="flex items-center" id="req-length"><i class="fas fa-circle text-xs mr-2 text-red-400"></i> At least 8 characters</li>
                  <li class="flex items-center" id="req-uppercase"><i class="fas fa-circle text-xs mr-2 text-red-400"></i> One uppercase letter</li>
                  <li class="flex items-center" id="req-lowercase"><i class="fas fa-circle text-xs mr-2 text-red-400"></i> One lowercase letter</li>
                  <li class="flex items-center" id="req-number"><i class="fas fa-circle text-xs mr-2 text-red-400"></i> One number</li>
                  <li class="flex items-center" id="req-special"><i class="fas fa-circle text-xs mr-2 text-red-400"></i> One special character</li>
                </ul>
              </div>
              
              <!-- Security Meter -->
              <div class="security-meter mt-3">
                <div class="security-meter-fill" id="securityMeter"></div>
              </div>
            </div>

            <!-- Confirm Password Field -->
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-3 flex items-center">
                <i class="fas fa-lock mr-2 text-blue-500"></i>
                Confirm Password
              </label>
              <div class="relative">
                <input type="password" 
                       id="confirmPassword" 
                       name="confirm_password" 
                       placeholder="Re-enter your password" 
                       required
                       class="input-field w-full pl-12 pr-12 py-5 rounded-2xl focus:ring-4 focus:ring-blue-200 focus:outline-none text-gray-800 text-lg font-medium">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-key text-blue-500 text-lg"></i>
                </div>
                <i class="fas fa-eye absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-400 hover:text-blue-600 transition-colors text-lg" id="toggleConfirmPassword"></i>
              </div>
              <div class="mt-2 text-sm text-red-500 hidden" id="passwordMatchError">
                <i class="fas fa-exclamation-triangle mr-1"></i> Passwords do not match
              </div>
            </div>

            <!-- Hidden role input -->
            <input type="hidden" name="role" value="user">

            <!-- Submit Button -->
            <button type="submit" 
                    class="btn-register w-full text-white font-bold py-5 rounded-2xl text-lg flex items-center justify-center space-x-3">
              <i class="fas fa-user-plus"></i>
              <span>Create Corporate Account</span>
            </button>
          </form>

          <!-- Divider -->
          <div class="flex items-center my-8">
            <div class="flex-1 border-t border-gray-200"></div>
            <div class="px-4 text-sm text-gray-500 font-medium">Already registered?</div>
            <div class="flex-1 border-t border-gray-200"></div>
          </div>

          <!-- Login Link -->
          <div class="text-center">
            <a href="<?= site_url('reg/login'); ?>" 
               class="inline-flex items-center space-x-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-4 px-8 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl">
              <i class="fas fa-sign-in-alt"></i>
              <span>Sign In to Existing Account</span>
            </a>
          </div>

          <!-- Security Notice -->
          <div class="mt-8 p-5 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border border-blue-200">
            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 p-3 rounded-xl">
                <i class="fas fa-shield-check text-blue-600 text-xl"></i>
              </div>
              <div>
                <p class="text-blue-800 font-semibold">Enterprise-Grade Security</p>
                <p class="text-blue-600 text-sm mt-2">Your data is protected with bank-level encryption and compliance standards.</p>
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
        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">Terms of Service</a>
        <span class="mx-3">•</span>
        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">Compliance</a>
      </p>
    </div>
  </footer>

  <script>
    // Password toggle functionality
    function toggleVisibility(toggleId, inputId) {
      const toggle = document.getElementById(toggleId);
      const input = document.getElementById(inputId);

      toggle.addEventListener('click', function () {
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });
    }

    toggleVisibility('togglePassword', 'password');
    toggleVisibility('toggleConfirmPassword', 'confirmPassword');

    // Password requirements toggle
    const showRequirements = document.getElementById('showRequirements');
    const passwordRequirements = document.getElementById('passwordRequirements');
    
    showRequirements.addEventListener('click', function() {
      passwordRequirements.classList.toggle('show');
    });

    // Password strength checker
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const passwordMatchError = document.getElementById('passwordMatchError');
    const securityMeter = document.getElementById('securityMeter');
    
    function checkPasswordStrength(password) {
      let strength = 0;
      
      // Length check
      if (password.length >= 8) {
        strength += 20;
        document.getElementById('req-length').innerHTML = '<i class="fas fa-check-circle text-xs mr-2 text-green-500"></i> At least 8 characters';
      } else {
        document.getElementById('req-length').innerHTML = '<i class="fas fa-circle text-xs mr-2 text-red-400"></i> At least 8 characters';
      }
      
      // Uppercase check
      if (/[A-Z]/.test(password)) {
        strength += 20;
        document.getElementById('req-uppercase').innerHTML = '<i class="fas fa-check-circle text-xs mr-2 text-green-500"></i> One uppercase letter';
      } else {
        document.getElementById('req-uppercase').innerHTML = '<i class="fas fa-circle text-xs mr-2 text-red-400"></i> One uppercase letter';
      }
      
      // Lowercase check
      if (/[a-z]/.test(password)) {
        strength += 20;
        document.getElementById('req-lowercase').innerHTML = '<i class="fas fa-check-circle text-xs mr-2 text-green-500"></i> One lowercase letter';
      } else {
        document.getElementById('req-lowercase').innerHTML = '<i class="fas fa-circle text-xs mr-2 text-red-400"></i> One lowercase letter';
      }
      
      // Number check
      if (/[0-9]/.test(password)) {
        strength += 20;
        document.getElementById('req-number').innerHTML = '<i class="fas fa-check-circle text-xs mr-2 text-green-500"></i> One number';
      } else {
        document.getElementById('req-number').innerHTML = '<i class="fas fa-circle text-xs mr-2 text-red-400"></i> One number';
      }
      
      // Special character check
      if (/[^A-Za-z0-9]/.test(password)) {
        strength += 20;
        document.getElementById('req-special').innerHTML = '<i class="fas fa-check-circle text-xs mr-2 text-green-500"></i> One special character';
      } else {
        document.getElementById('req-special').innerHTML = '<i class="fas fa-circle text-xs mr-2 text-red-400"></i> One special character';
      }
      
      securityMeter.style.width = strength + '%';
      
      // Update color based on strength
      if (strength <= 40) {
        securityMeter.style.background = 'linear-gradient(90deg, #ef4444, #f59e0b)';
      } else if (strength <= 80) {
        securityMeter.style.background = 'linear-gradient(90deg, #f59e0b, #10b981)';
      } else {
        securityMeter.style.background = 'linear-gradient(90deg, #10b981, #059669)';
      }
    }
    
    function checkPasswordMatch() {
      const password = passwordInput.value;
      const confirmPassword = confirmPasswordInput.value;
      
      if (confirmPassword && password !== confirmPassword) {
        passwordMatchError.classList.remove('hidden');
        confirmPasswordInput.classList.add('border-red-300', 'bg-red-50');
      } else {
        passwordMatchError.classList.add('hidden');
        confirmPasswordInput.classList.remove('border-red-300', 'bg-red-50');
      }
    }
    
    passwordInput.addEventListener('input', function() {
      checkPasswordStrength(this.value);
      checkPasswordMatch();
    });
    
    confirmPasswordInput.addEventListener('input', checkPasswordMatch);
    
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