<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $data = [
            'page_title' => 'Student Home Page',
            'welcome_message' => 'Welcome to the Student Information Portal'
        ];
        
       
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        
        $student = [
            'student_id' => '2024-00175', 
            'name'       => 'Loth Ariel G. Lingad',
            'course'     => 'Bachelor of Science in Information Technology',
            'year'       => '3rd Year', 
            'section'    => 'A',
            'email'      => 'lothariel@example.com',
            'address'    => 'Mindoro, Philippines',
            'skills'     => 'PHP, C#, MySQL, Arduino Prototyping'
        ];

        // Pass data to the student profile view
        $this->call->view('student_profile', $student);
    }
}