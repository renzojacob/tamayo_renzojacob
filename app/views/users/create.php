<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Record</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
      .custom-container{
      background: rgba(255, 196, 242, 0.27); /* translucent white */
      backdrop-filter: blur(5px); /* blur the bg behind */
      -webkit-backdrop-filter: blur(5px);
    }
</style>


<body class="bg-gray-100 flex items-center justify-center min-h-screen ">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md custom-container">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Create an Account</h1>

    <form action=" <?=site_url('users/create');?> " method="POST" class="space-y-4">
      
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" id="username" name="username" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>
      <!-- Password -->
      <div>    
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">  
      </div>

      <!-- Role Selection -->
      <div>   
        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
        <select id="role" name="role" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>     
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition duration-200">
        Create
      </button>
    </form>

  </div>

</body>
</html>
