<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
      body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;    
      background: url('/public/images/bg_2.gif') center/cover no-repeat;
      color: #333;
    }
        .custom-container{
      background: rgba(255, 196, 242, 0.27); /* translucent white */
      backdrop-filter: blur(5px); /* blur the bg behind */
      -webkit-backdrop-filter: blur(5px);
    }
</style>


<body class="bg-gray-100 flex items-center justify-center min-h-screen ">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md custom-container">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Update Account</h1>

    <form action="<?=site_url('users/update/'.segment(4));?>" method="POST" class="space-y-4">
      
      <div>
        <label for="username"  class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" value="<?=html_escape($user['username']);?>" id="username" name="username" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" value="<?=html_escape($user['email']);?>" id="email" name="email" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <?php if ($logged_in_user['role'] === 'admin'): ?>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password"
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>
      <?php endif; ?>
      
      <div>     
        <?php if ($logged_in_user['role'] === 'admin'): ?>
            <label for="role">Role</label>
            <select name="role">
                <option value="admin" <?= $user['role']=='admin'?'selected':''; ?>>Admin</option>
                <option value="user" <?= $user['role']=='user'?'selected':''; ?>>User</option>
            </select>
        <?php endif; ?>       
      </div>

      <button type="submit"
        class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition duration-200">
        Update
      </button>
    </form>
  </div>

</body>
</html>
