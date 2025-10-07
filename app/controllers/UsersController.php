<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UsersController
 * 
 * Automatically generated via CLI.
 */
class UsersController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function UsersData()
    {
        $this->call->model('UsersModel');
        $data['users'] = $this->UsersModel->get_users_only(); // use filtered method


        // Check kung may naka-login
            if (!isset($_SESSION['user'])) {
                redirect('/auth/login');
                exit;
            }

            // Kunin info ng naka-login na user
            $logged_in_user = $_SESSION['user']; 
            $data['logged_in_user'] = $logged_in_user;
    
    if ($this->session->userdata('role') === 'admin') {
        redirect('users/AdminDashboard');
        return;
    }


        $page = 1;
        if(isset($_GET['page']) && ! empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        $q = '';
        if(isset($_GET['q']) && ! empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }

        $records_per_page = 10;

        $users = $this->UsersModel->page_users_only($q, $records_per_page, $page);
        $data['users'] = $users['records'];
        $total_rows = $users['total_rows'];
        $this->pagination->set_options([
            'first_link'     => '⏮ First',
            'last_link'      => 'Last ⏭',
            'next_link'      => 'Next →',
            'prev_link'      => '← Prev',
            'page_delimiter' => '&page='
        ]);
        $this->pagination->set_theme('bootstrap'); // or 'tailwind', or 'custom'
        $this->pagination->initialize($total_rows, $records_per_page, $page, 'users?q='.$q);
        $data['page'] = $this->pagination->paginate();
        $this->call->view('users/UsersData', $data);
    
    }
    function create(){
        // ✅ Only admin can create users
    if ($this->session->userdata('role') !== 'admin') {
        echo "Access denied!";
        return;
    }
        if($this->io->method() == 'post'){
            $username = $this->io->post('username');
            $email = $this->io->post('email');
            $password = password_hash($this->io->post('password'), PASSWORD_BCRYPT);

            $role = $this->io->post('role');
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role
            );
            if ($this->UsersModel->insert($data)){
                redirect('users/AdminDashboard');
            } else {
                echo "Error inserting data.";
            }
        } else {
           $this->call->view('users/create');
        }
    }


public function update($id)
{
    $this->call->model('UsersModel');

    // Get logged-in user from session
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $logged_in_user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

    // Fetch the user to be edited
    $user = $this->UsersModel->find($id);
    if (!$user) {
        echo "User not found.";
        return;
    }

    if ($this->io->method() === 'post') {
        $username = $this->io->post('username');
        $email = $this->io->post('email');

        // Only allow admin to update role and password
        if (!empty($logged_in_user) && $logged_in_user['role'] === 'admin') {
            $role = $this->io->post('role');
            $password = $this->io->post('password');
            $data = [
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role,
            ];

            if (!empty($password)) {
                $data['password'] = password_hash($password, PASSWORD_BCRYPT);
            }
        } else {
            // Normal users can only update username and email
            $data = [
                'username' => $username,
                'email' => $email
            ];
        }

        if ($this->UsersModel->update($id, $data)) {
            redirect('/users');
        } else {
            echo 'Failed to update user.';
        }
    } else {
        // Pass both the user being edited and the logged-in user to the view
        $data['user'] = $user;
        $data['logged_in_user'] = $logged_in_user;
        $this->call->view('users/update', $data);
    }
}


    public function delete($id)
    {
        $this->call->model('UsersModel');
        if($this->UsersModel->delete($id)){
            redirect('/users');
        } else {
            echo 'Failed to delete user.';
        }
    }


    public function registerForm() {
         $this->call->model('UsersModel');
    if ($this->io->method() == 'post') {
        $username = $this->io->post('username');
        $email    = $this->io->post('email');
        $password = password_hash($this->io->post('password'), PASSWORD_BCRYPT);
        $role     = $this->io->post('role');

        if (empty($username) || empty($email) || empty($password) || empty($role)) {
            echo "All fields are required!";
            return;
        }

        $this->db->table('users')->insert([
            'username' => $username,
            'email'    => $email,
            'password' => $password,
            'role'     => $role
        ]);

        redirect('users/login');
    }

    $this->call->view('users/registerForm');
}

//   public function login()
// {
//     $this->call->model('UsersModel');

//     if ($this->io->method() === 'post') {
//         $username = $this->io->post('username');
//         $password = $this->io->post('password');

//         $user = $this->UsersModel->check_login($username, $password);

//         if ($user) {
//             // store session
//             $this->session->set_userdata([
//                 'user_id' => $user['id'],
//                 'username' => $user['username'],
//                 'role' => strtolower($user['role']), // normalize case here
//                 'logged_in' => TRUE
//             ]);

//             // redirect by role
//             if ($this->session->userdata('role') === 'admin') {
//                 redirect('users/AdminDashboard');
//             } else {
//                 redirect('users');
//             }
//         } else {
//             $this->session->set_flashdata('error', 'Invalid username or password');
//             redirect('users/login');
//         }
//     } else {
//         $this->call->view('users/myForm');
//     }
// }


    public function login()
    {
        $this->call->library('Auth');
        $error = null;

        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            if ($this->Auth->login($username, $password)) {

                // Fetch user info after successful login
                $this->call->model('UsersModel');
                $user = $this->UsersModel->get_user_by_username($username); // Create this function in UsersModel if not exists

                // Set session
                $_SESSION['user'] = [
                    'id'       => $user['id'],
                    'username' => $user['username'],
                    'role'     => $user['role']
                ];

                if ($user['role'] == 'admin' || $user['role'] == 'Admin') {
                        redirect('/users/AdminDashboard');
                } else {
                        redirect('/users');
                }
            } else {
                $error = "Username not found!";
            }
        }

        $this->call->view('users/myForm', ['error' => $error]);
    }




    public function logout()
    {
        $this->call->library('Auth');
        $this->Auth->logout();
        redirect('users/login');
    }
    

    public function AdminDashboard() {
    if (!$this->session->userdata('logged_in')) {
        redirect('users/login');
        return;
    }

    $this->call->model('UsersModel');
    $data['users'] = $this->UsersModel->get_all_users();

    $page = 1;
        if(isset($_GET['page']) && ! empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        $q = '';
        if(isset($_GET['q']) && ! empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }

        $records_per_page = 10;

        $users = $this->UsersModel->page($q, $records_per_page, $page);
        $data['users'] = $users['records'];
        $total_rows = $users['total_rows'];
        $this->pagination->set_options([
            'first_link'     => '⏮ First',
            'last_link'      => 'Last ⏭',
            'next_link'      => 'Next →',
            'prev_link'      => '← Prev',
            'page_delimiter' => '&page='
        ]);
        $this->pagination->set_theme('bootstrap'); // or 'tailwind', or 'custom'
        $this->pagination->initialize($total_rows, $records_per_page, $page, 'users/AdminDashboard?q='.$q);
        $data['page'] = $this->pagination->paginate();
        $this->call->view('users/AdminDashboard', $data);

    // ✅ Pass data to view
    $this->call->view('users/AdminDashboard', $data);
    }


}