<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
com  <title>User Directory | Admin Portal</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      position: relative;
      min-height: 100vh;
    }
    
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMTAwMCAxMDAwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wMykiPjwvcmVjdD48cGF0aCBkPSJNMjAwIDIwMEMyMDAgMjAwIDMwMCAxMDAgNDAwIDIwMEM1MDAgMzAwIDYwMCAyMDAgNzAwIDMwMEM4MDAgNDAwIDkwMCAzMDAgOTAwIDMwMEwxMDAwIDQwMEwxMDAwIDEwMDBMMCAxMDAwTDAgNDAwTDIwMCAyMDBaIiBmaWxsPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMDUpIj48L3BhdGg+PC9zdmc+');
      opacity: 0.5;
      z-index: -1;
    }
    
    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-glass {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    }
    
    .table-container {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(5px);
      border-radius: 16px;
      overflow: hidden;
    }
    
    .table-header {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    }
    
    .user-badge {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
      border-radius: 20px;
      padding: 8px 16px;
      font-size: 0.85rem;
      display: inline-block;
    }
    
    .btn-primary {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(106, 17, 203, 0.4);
    }
    
    .btn-secondary {
      background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
      color: #333;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(255, 154, 158, 0.3);
    }
    
    .btn-secondary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 154, 158, 0.4);
    }
    
    .btn-danger {
      background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(255, 65, 108, 0.3);
    }
    
    .btn-danger:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 65, 108, 0.4);
    }
    
    .search-box {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 8px 16px;
      transition: all 0.3s ease;
    }
    
    .search-box:focus {
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.2);
    }
    
    .pagination {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 1.5rem;
    }
    
    .pagination a {
      display: inline-block;
      padding: 0.5rem 1rem;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(106, 17, 203, 0.3);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .pagination a:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(106, 17, 203, 0.4);
    }
    
    .pagination strong {
      display: inline-block;
      padding: 0.5rem 1rem;
      background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
      color: white;
      border-radius: 10px;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(255, 65, 108, 0.3);
    }
    
    .welcome-card {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
      border-radius: 16px;
      padding: 24px;
      box-shadow: 0 8px 25px rgba(106, 17, 203, 0.4);
      position: relative;
      overflow: hidden;
    }
    
    .welcome-card::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -20%;
      width: 200px;
      height: 200px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }
    
    .table-row {
      transition: all 0.3s ease;
    }
    
    .table-row:hover {
      background: rgba(106, 17, 203, 0.05);
      transform: translateY(-2px);
    }
    
    .action-buttons {
      display: flex;
      gap: 8px;
      justify-content: center;
    }
    
    @media (max-width: 768px) {
      .action-buttons {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar-glass py-4 sticky top-0 z-10">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
      <div class="flex items-center">
        <div class="bg-gradient-to-r from-purple-600 to-blue-500 text-white p-2 rounded-xl mr-3">
          <i class="fas fa-users-cog text-xl"></i>
        </div>
        <a href="#" class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent">
          UserPortal
        </a>
      </div>
      
      <!-- Logout button in navbar -->
      <a href="<?=site_url('reg/logout');?>" 
         class="btn-primary flex items-center gap-2">
         <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-6xl mx-auto mt-8 px-4 pb-12">
    <div class="glass-card p-8">
      <!-- Logged In User Display -->
      <?php if(!empty($logged_in_user)): ?>
        <div class="welcome-card mb-8 text-center">
          <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="text-left">
              <h2 class="text-3xl font-bold mb-1">
                Welcome, <span class="font-semibold"><?= html_escape($logged_in_user['username']); ?></span>!
              </h2>
              <p class="text-xl opacity-90">Role: <span class="font-semibold"><?= html_escape($logged_in_user['role']); ?></span></p>
            </div>
            <div class="mt-4 md:mt-0">
              <div class="bg-white bg-opacity-20 p-4 rounded-full">
                <i class="fas fa-user-circle text-5xl text-white"></i>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded-lg shadow text-center">
          Logged in user not found
        </div>
      <?php endif; ?>

      <!-- Header -->
      <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div>
          <h1 class="text-3xl font-bold text-gray-800 flex items-center gap-3">
            <div class="bg-gradient-to-r from-purple-600 to-blue-500 text-white p-2 rounded-xl">
              <i class="fas fa-users"></i>
            </div>
            User Directory
          </h1>
          <p class="text-gray-600 mt-2">Manage all users in the system</p>
        </div>

        <!-- Search Bar -->
        <form method="get" action="<?=site_url('users');?>" class="flex w-full md:w-auto">
          <div class="relative flex-grow">
            <input 
              type="text" 
              name="q" 
              value="<?=html_escape($_GET['q'] ?? '')?>" 
              placeholder="Search user..." 
              class="search-box w-full pr-10">
            <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-600">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
      </div>
      
      <!-- Table -->
      <div class="table-container overflow-x-auto rounded-xl">
        <table class="w-full text-center border-collapse">
          <thead>
            <tr class="table-header text-white">
              <th class="py-4 px-4 font-medium"><i class="fas fa-id-badge mr-2"></i>ID</th>
              <th class="py-4 px-4 font-medium"><i class="fas fa-user mr-2"></i>Username</th>
              <th class="py-4 px-4 font-medium"><i class="fas fa-envelope mr-2"></i>Email</th>
              <th class="py-4 px-4 font-medium"><i class="fas fa-user-tag mr-2"></i>Role</th>
              <th class="py-4 px-4 font-medium"><i class="fas fa-cogs mr-2"></i>Actions</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <?php foreach(html_escape($users) as $user): ?>
              <tr class="table-row">
                <td class="py-4 px-4 font-medium"><?=($user['id']);?></td>
                <td class="py-4 px-4">
                  <div class="flex items-center justify-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-blue-400 flex items-center justify-center text-white">
                      <i class="fas fa-user text-sm"></i>
                    </div>
                    <?=($user['username']);?>
                  </div>
                </td>
                <td class="py-4 px-4">
                  <span class="user-badge">
                    <i class="fas fa-envelope mr-1"></i> <?=($user['email']);?>
                  </span>
                </td>
                <td class="py-4 px-4 font-medium">
                  <?php if($user['role'] === 'admin'): ?>
                    <span class="bg-gradient-to-r from-purple-600 to-blue-500 text-white px-3 py-1 rounded-full text-sm">
                      <i class="fas fa-crown mr-1"></i> <?=($user['role']);?>
                    </span>
                  <?php else: ?>
                    <span class="bg-gradient-to-r from-gray-600 to-gray-500 text-white px-3 py-1 rounded-full text-sm">
                      <i class="fas fa-user mr-1"></i> <?=($user['role']);?>
                    </span>
                  <?php endif; ?>
                </td>
                <td class="py-4 px-4">
                  <div class="action-buttons">
                    <?php if($logged_in_user['role'] === 'admin' || $logged_in_user['id'] == $user['id']): ?>
                      <a href="<?=site_url('users/update/'.$user['id']);?>"
                         class="btn-secondary text-sm">
                         <i class="fas fa-edit mr-1"></i> Update
                      </a>
                    <?php endif; ?>

                    <?php if($logged_in_user['role'] === 'admin'): ?>
                      <a href="<?=site_url('users/delete/'.$user['id']);?>"
                         onclick="return confirm('Are you sure you want to delete this record?');"
                         class="btn-danger text-sm">
                         <i class="fas fa-trash-alt mr-1"></i> Delete
                      </a>
                    <?php endif; ?>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-8 flex justify-center">
        <div class="pagination">
          <?= $page; ?>
        </div>
      </div>

      <!-- Create New User -->
      <div class="mt-8 text-center">
        <a href="<?=site_url('users/create')?>"
           class="btn-primary inline-flex items-center gap-2">
          <i class="fas fa-user-plus"></i> Create New User
        </a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-purple-800 to-blue-700 text-white py-6 mt-12">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <p class="text-white text-opacity-80">© 2023 UserPortal - Advanced User Management System</p>
      <div class="flex justify-center gap-4 mt-4">
        <a href="#" class="text-white text-opacity-80 hover:text-white transition"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white text-opacity-80 hover:text-white transition"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white text-opacity-80 hover:text-white transition"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="text-white text-opacity-80 hover:text-white transition"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </footer>
</body>
</html>