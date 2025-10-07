<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/public/style.css">

  <script src="https://cdn.tailwindcss.com"></script>
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
</style>


<body class=" flex items-center justify-center min-h-screen font-sans">
  <div class="container p-8 rounded-2xl shadow-xl w-full max-w-md">
    <!-- Title -->
    <h1 class="text-3xl font-extrabold text-center text-purple-900 mb-6">Register</h1>

    <!-- Form -->
    <form action="<?= site_url('users/registerForm'); ?>" method="post" class="space-y-4">
      
      <!-- Username -->
      <div>
        <label class="block text-sm font-medium text-purple-100">Username</label>
        <input type="text" name="username" required placeholder="Enter your username"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-medium text-purple-100">Email</label>
        <input type="email" name="email" required placeholder="Enter your email"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-medium text-purple-100">Password</label>
        <input type="password" name="password" required placeholder="Enter your password"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
      </div>

      <!-- Role -->
      <div>
        <label class="block text-sm font-medium text-purple-100">Role</label>
        <select name="role" required placeholder="Select role"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
          <option value="">-- Select Role --</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-purple-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-purple-700 transition duration-200">
        Register
      </button>
    </form>

    <!-- Login Link -->
    <div class="mt-6 text-center text-black text-lg">
      <p>Already have an account? 
        <a href="<?= site_url('users/login'); ?>"  class="text-purple-800 font-lg hover:underline hover:text-purple-200">Login here</a>
      </p>
    </div>
  </div>

</body>
</html>
