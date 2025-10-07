<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Login</title>
</head>
<style>
      body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;    
      background: url('/public/images/bg_2.gif') center/cover no-repeat  !important;
      color: #333;
    }
    .container{
      background: rgba(255, 196, 242, 0.27); /* translucent white */
      backdrop-filter: blur(5px); /* blur the bg behind */
      -webkit-backdrop-filter: blur(5px);
    }
  .error-box {
    background: rgba(252, 112, 112, 0.62);
    color: #661118ff;
    padding: 10px 15px;
    border: 2px solid #ad2d24ff;
    border-radius: 8px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 0.95em;
    display: inline-block;   /* <- para di buong width */
  }

</style>



<body class="bg-gradient-to-br flex items-center justify-center min-h-screen font-sans">

   <div class="container p-8 rounded-2xl shadow-xl w-full max-w-md">
      <!-- Title -->
      <h1 class="text-3xl font-extrabold text-center text-purple-900 mb-6">Login</h1>

      <!-- Error Message -->
    <?php if (!empty($error)): ?>
      <div class="flex justify-center mb-4">
        <div class="error-box">
          <?= $error ?>
        </div>
      </div>
    <?php endif; ?>
          

      <!-- Form -->
      <form method="post" action="<?= site_url('users/login') ?>" class="space-y-4">
        <!-- Username -->
        <div>
          <label class="block text-sm font-medium text-purple-100">Username</label>
          <input type="text" placeholder="Enter your name" name="username" required 
            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
        </div>

        <!-- Password -->
        <div class="relative">
          <label class="block text-sm font-medium text-purple-100">Password</label>
          <input type="password" placeholder="Enter your password" name="password" id="password" required
            class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
          <i class="fa-solid fa-eye absolute right-3 top-3 text-gray-400 cursor-pointer" id="togglePassword"></i>
        </div>

        <!-- Button -->
        <button type="submit" id="btn"
          class="w-full bg-purple-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-purple-700 transition duration-200">
          Login
        </button>
      </form>

      <!-- Register -->
      <div class="mt-6 text-center text-black text-lg">
        <p>Don't have an account?
          <a href="<?= site_url('users/registerForm'); ?>" class="text-purple-800 font-lg hover:underline hover:text-purple-200">Register here</a>
        </p>
      </div>
   </div>

   <!-- Toggle Password Script -->
   <script>
     const togglePassword = document.querySelector('#togglePassword');
     const password = document.querySelector('#password');

     togglePassword.addEventListener('click', function () {
       const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
       password.setAttribute('type', type);
       this.classList.toggle('fa-eye-slash');
     });
   </script>

   <!-- FontAwesome for eye icon -->
   <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
</body>
</html>
