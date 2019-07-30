<?php

namespace App\Http\Controllers;

use App\Models\StudentSession;
use Illuminate\Http\Request;

class StudentSessionController extends Controller
{
    public function viewStudents()
    {
        echo "Welcome";
    }

    public function addStudent()
    {
        return view("admin.views.add_student");
    }

    public function deleteStudent()
    {
        echo "Welcome";
    }
}
