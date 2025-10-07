<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>UsersData</title>
  <style>
    /* Reset some defaults */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url('/public/images/bg_2.gif');
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      color: #333;
      height: 100vh;
    }

    h1 {
      margin-top: 10px;
      text-align: center;
      padding: 20px;
      margin: 0;
      background: #5f0b51ff;
      color: white;
      font-size: 28px;
    }

    table {
      width: 80%;
      margin: 30px auto;
      border-collapse: collapse;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      background: #f6ccfaff;
      border-radius: 10px;
      overflow: hidden;
    }

    th, td {
      padding: 12px 15px;
      text-align: center;
    }

    th {
      background-color: #5f0b51ff;
      color: white;
      font-size: 16px;
    }

    tr:nth-child(even) {
      background-color: #f6b5ffff;
    }

    tr:hover {
      color: white;
      background-color: #6d186dff;
      transition: 0.3s;
    }

    td {
      font-size: 14px;
    }

.search-container {
  margin-top: 20px;
  display: flex;
  justify-content: flex-end; /* align to right */
  margin-bottom: 16px;
}

.search-bar {
  display: flex;
  gap: 10px; /* space between input and button */
}

/* Search Input */
.form-control {
  flex: 1;
  margin-top: 16px;
  height: 36px;           /* set fixed height */
  padding: 0 10px;        /* horizontal padding lang */
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
  transition: border 0.3s, box-shadow 0.3s;
  min-width: 200px;
  box-sizing: border-box; /* para di sumobra ang padding sa height */
}

.form-control:focus {
  border-color: #bc2bcfff; /* teal-600 */
  box-shadow: 0 0 4px rgba(218, 62, 205, 1);
  outline: none;
}

/* Search Button */
.btn-primary {
  background-color: #660561ff; 
  border: none;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s;
  white-space: nowrap;
  margin-top: 16px;
  height: 36px;           /* set fixed height */
  padding: 0 10px;  
}

.btn-primary:hover {
  background-color: #3f0a70ff; /* teal-700 */
}



/* Pagination container */
.pagination {
    list-style: none; 
    display: flex;
    justify-content: center; /* center align */
    margin-top: 20px;
}

/* Pagination links */
.pagination li a {
    background: #f9dcffff;
    color: #89229eff; 
    border: 1px solid #3f0b69ff;
    padding: 6px 12px;
    margin: 0 3px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s;
}

/* Hover effect */
.pagination li a:hover {
    background-color: #750b79ff;
    color: white;
}

/* Active page */
.pagination .active a {
    background-color: #6c0e91ff;
    color: white;
    border-color: #440657ff;
}

/* Disabled state */
.pagination .disabled a {
    color: #aaa;
    border-color: #ddd;
    cursor: not-allowed;
}



  </style>
</head>
<body>
  <h1>Welcome to User Dashboard</h1>
<div class="search-container">
      <div class="flex justify-end p-4">
      <a href="<?= site_url('users/logout'); ?>"
        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
        Logout
      </a>
    </div>
<form action="<?=site_url('users');?>" method="get" class="search-bar col-sm-4 float-end d-flex">
		<?php
		$q = '';
		if(isset($_GET['q'])) {
			$q = $_GET['q'];
		}
		?>
        <input class="form-control me-2" name="q" type="text" placeholder="Search" value="<?=html_escape($q);?>">
        <button type="submit" class="btn btn-primary" type="button">Search</button>
	</form>
</div>





  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Role</th>
      <th>Actions</th>
    </tr>
    <?php foreach (html_escape($users) as $user): ?>
    <tr>
      <td><?= $user['id']; ?></td>
      <td><?= $user['username']; ?></td>
      <td><?= $user['email']; ?></td>
      <td><?= $user['role']; ?></td>
      <td><a href="<?=site_url('users/update/'.$user['id']);?>" class="link-update">Update </a> | 
      <a href="<?=site_url('users/delete/'.$user['id']);?>" class="link-delete">Delete</a></td>
    </tr>
    <?php endforeach; ?>
  </table>
  
<?php
	echo $page;?>
</body>
</html>
