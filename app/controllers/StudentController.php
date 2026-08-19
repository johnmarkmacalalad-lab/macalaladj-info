<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['student'] = $this->student_data();
        $this->call->view('student/home', $data);
    }


    public function profile()
    {
        $data['student'] = $this->student_data();
        $this->call->view('student/profile', $data);
    }

    
    public function access()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['student_access'] = true;
        redirect('student/profile');
    }

    
    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['student_access'] = false;
        redirect('student');
    }

    
    private function student_data()
    {
        return [
            'student_id'  => 'MCC2022-0038',
            'name'        => 'John Mark A. Macalalad',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => 'F5',
            'email'       => 'johnmarkmacalalad731@gmail.com',
            'address'     => 'Tabontabon, Baco Oriental Mindoro',
            'contact_no'  => '09129568901',
            'hobbies'     => 'Coding, Basketball, Gaming',
            'description' => 'Andito na ang halimaw.',
        ];
    }
}
