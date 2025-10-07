<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: UsersModel
 * 
 * Automatically generated via CLI.
 */
class UsersModel extends Model {
    protected $table = 'users';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }


      public function page($q, $records_per_page = null, $page = null) {
            if (is_null($page)) {
                return $this->db->table('users')->get_all();
            } else {
                $query = $this->db->table('users');
                
                // Build LIKE conditions
                $query->like('id', '%'.$q.'%')
                    ->or_like('username', '%'.$q.'%')
                    ->or_like('email', '%'.$q.'%')
                    ->or_like('password', '%'.$q.'%')  
                    ->or_like('role', '%'.$q.'%');   
                // Clone before pagination
                $countQuery = clone $query;

                $data['total_rows'] = $countQuery->select_count('*', 'count')
                                                ->get()['count'];

                $data['records'] = $query->pagination($records_per_page, $page)
                                        ->get_all();

                return $data;
            }
        }


public function page_users_only($q, $records_per_page = null, $page = null) 
{
    $query = $this->db->table('users')->where('role', 'user');

    if (!empty($q)) {
        // Instead of passing "both", add wildcards manually
        $like = "%" . $q . "%";

        $query->where('role', 'user')
              ->like('id', $like)
              ->or_like('username', $like)
              ->or_like('email', $like);
    } else {
        $query->where('role', 'user');
    }

    $countQuery = clone $query;

    $data['total_rows'] = $countQuery->select_count('*', 'count')->get()['count'];
    $data['records'] = $query->pagination($records_per_page, $page)->get_all();

    return $data;
}







        function find_by_username($username) {
            return $this->db->table('users')
                            ->where('username', $username)
                            ->get();

             // if result is array, return the first row
             return !empty($result) ? $result[0] : null;
        }

        public function check_login($username, $password) {
            $user = $this->db->table('users')
                            ->where('username', $username)
                            ->get();

            if ($user && isset($user[0])) {
                if (password_verify($password, $user[0]['password'])) {
                    return $user[0]; // return the actual user row
                }
            }
            return false;
        }
 

 
        public function get_all_users()
        {
            return $this->db->table($this->table)->get_all();
        }

        public function get_logged_in_user()
        {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            if (isset($_SESSION['user']['id'])) {
                return $this->get_user_by_id($_SESSION['user']['id']);
            }

            return null;
        }



        public function get_user_by_username($username)
        {
            return $this->db->table($this->table)
                            ->where('username', $username)
                            ->get();
        }


        public function get_users_only()
        {
            return $this->db->table('users')
            ->select('id, username, email, role')
            ->where('role', 'user')
            ->get_all();
        }



        public function page_by_role($q, $limit, $page, $role) {
        $offset = ($page - 1) * $limit;

        $builder = $this->db->table('users')
                            ->where('role', $role);

        if (!empty($q)) {
            $builder->like('username', $q)
                    ->or_like('email', $q);
        }

        $records = $builder->limit($limit, $offset)->get();
        $total_rows = $builder->count();

        return [
            'records' => $records,
            'total_rows' => $total_rows
        ];
    }

}