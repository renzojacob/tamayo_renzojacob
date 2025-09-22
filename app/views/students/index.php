<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Records Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
          },
          animation: {
            'fade-in': 'fadeIn 0.5s ease-in-out',
            'slide-up': 'slideUp 0.5s ease-out',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' },
            },
            slideUp: {
              '0%': { transform: 'translateY(10px)', opacity: '0' },
              '100%': { transform: 'translateY(0)', opacity: '1' },
            }
          }
        }
      }
    }
  </script>
  <style>
    body {
      background-image: url('https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .glass-effect {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }
    .table-row-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    
    /* Pagination styling that works with Lavalust generated HTML */
    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.5rem;
      flex-wrap: wrap;
    }
    
    .pagination a, .pagination span {
      display: flex;
      align-items: center;
      justify-content: center;
      min-width: 2.5rem;
      height: 2.5rem;
      padding: 0 0.75rem;
      border-radius: 0.75rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .pagination a {
      background: white;
      border: 1px solid #e2e8f0;
      color: #4a5568;
    }
    
    .pagination a:hover {
      background: #3b82f6;
      color: white;
      border-color: #3b82f6;
      transform: translateY(-1px);
      box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
    }
    
    .pagination .current {
      background: linear-gradient(135deg, #3b82f6, #8b5cf6);
      color: white;
      border: 1px solid transparent;
      box-shadow: 0 2px 4px rgba(59, 130, 246, 0.2);
    }
    
    .pagination .disabled {
      opacity: 0.5;
      cursor: not-allowed;
      background: #f7fafc;
      color: #a0aec0;
    }
  </style>
</head>
<body class="min-h-screen font-poppins flex items-center justify-center p-4 md:p-8">
  <div id="app" class="relative w-full max-w-7xl glass-effect rounded-3xl shadow-2xl p-6 md:p-10 flex flex-col gap-8 border border-white/50 animate-fade-in">
    
    <!-- HEADER SECTION -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="flex items-center gap-4">
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-3 rounded-2xl shadow-lg">
          <i class="fas fa-user-graduate text-white text-2xl"></i>
        </div>
        <div>
          <h1 class="text-2xl md:text-3xl font-bold text-slate-800">Student Records</h1>
          <p class="text-slate-600 text-sm">Manage your student database efficiently</p>
        </div>
      </div>
      
      <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
        <form method="get" action="<?=site_url()?>" class="relative flex w-full md:w-auto">
          <input 
            type="text" 
            name="q" 
            value="<?=html_escape($_GET['q'] ?? '')?>" 
            placeholder="Search students..." 
            class="pl-12 pr-4 py-3 bg-white/70 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-full md:w-64 transition-all duration-300">
          <button type="submit" class="absolute left-0 top-0 h-full px-4 text-gray-500 hover:text-blue-600 transition-colors">
            <i class="fas fa-search"></i>
          </button>
        </form>
        
        <a href="<?=site_url('students/create');?>"
           class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold px-5 py-3 rounded-xl shadow-lg hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:-translate-y-0.5">
          <i class="fas fa-plus"></i>
          <span>Add Student</span>
        </a>
      </div>
    </div>

    <!-- TABLE SECTION -->
    <div class="overflow-hidden border border-gray-200/50 rounded-2xl shadow-lg animate-slide-up">
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="bg-gradient-to-r from-blue-500 to-purple-600 text-white">
            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider">ID</th>
            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider">First Name</th>
            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider">Last Name</th>
            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider">Email</th>
            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-center">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200/50">
          <?php foreach (html_escape($users) as $index => $user): ?>
          <tr class="bg-white/50 hover:bg-white transition-all duration-300 table-row-hover <?= $index % 2 === 0 ? 'bg-blue-50/30' : '' ?>">
            <td class="px-6 py-4 text-sm font-medium text-blue-700">#<?= $user['id']; ?></td>
            <td class="px-6 py-4 text-sm font-medium text-slate-800"><?= $user['first_name']; ?></td>
            <td class="px-6 py-4 text-sm font-medium text-slate-800"><?= $user['last_name']; ?></td>
            <td class="px-6 py-4 text-sm text-slate-600 break-all"><?= $user['email']; ?></td>
            <td class="px-6 py-4 text-sm flex justify-center gap-2">
              <a href="<?=site_url('students/update/'.$user['id']);?>"
                 class="inline-flex items-center gap-1 px-4 py-2 bg-blue-100 text-blue-700 rounded-lg font-medium border border-blue-200 hover:bg-blue-200 hover:text-blue-900 transition-all duration-200">
                 <i class="fas fa-edit text-xs"></i>
                 <span>Edit</span>
              </a>
              <a href="<?=site_url('students/delete/'.$user['id']);?>"
                 onclick="return confirm('Are you sure you want to delete this student record?');"
                 class="inline-flex items-center gap-1 px-4 py-2 bg-red-100 text-red-600 rounded-lg font-medium border border-red-200 hover:bg-red-200 hover:text-red-800 transition-all duration-200">
                 <i class="fas fa-trash text-xs"></i>
                 <span>Delete</span>
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    <!-- PAGINATION -->
    <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
      <div class="text-sm text-slate-600">
        Showing page <?= isset($current_page) ? $current_page : '1' ?> of results
      </div>
      
      <div class="pagination">
        <?php 
        // This will work with Lavalust's pagination structure
        // The framework generates the pagination links automatically
        echo $page ?? ''; 
        ?>
      </div>
      
      <div class="text-sm text-slate-600 hidden sm:block">
        Navigate through pages
      </div>
    </div>
    
    <!-- FOOTER -->
    <div class="text-center text-sm text-slate-500 pt-4 border-t border-gray-200/50">
      <p>Student Records Management System &copy; <?= date('Y'); ?></p>
    </div>
  </div>

  <script>
    // Add some interactive effects
    document.addEventListener('DOMContentLoaded', function() {
      const tableRows = document.querySelectorAll('tbody tr');
      
      tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
          this.style.transition = 'all 0.3s ease';
        });
      });
      
      // Enhance pagination buttons after page load
      const paginationLinks = document.querySelectorAll('.pagination a');
      paginationLinks.forEach(link => {
        link.classList.add('flex', 'items-center', 'justify-center');
        
        // Add icons for next/previous if they exist
        if (link.textContent.includes('Next') || link.textContent.includes('»')) {
          link.innerHTML = '<i class="fas fa-chevron-right ml-1"></i>';
          link.title = 'Next page';
        } else if (link.textContent.includes('Previous') || link.textContent.includes('«')) {
          link.innerHTML = '<i class="fas fa-chevron-left mr-1"></i>';
          link.title = 'Previous page';
        }
      });
    });
  </script>
</body>
</html>