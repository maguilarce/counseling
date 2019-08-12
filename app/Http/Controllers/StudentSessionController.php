<?php

namespace App\Http\Controllers;

use App\Models\StudentSession;
use Illuminate\Http\Request;
use Datatables;
use DB;

class StudentSessionController extends Controller
{
    public function viewStudents()
    {
        return view("admin.views.view_students");
    }

    public function listAllStudents()
    {
        $students_query = DB::table("student_sessions")
            ->select("student_sessions.*", "slip_sessions.label")
            ->leftJoin("slip_sessions", "student_sessions.id_slip_session", "=", "slip_sessions.id")
            ->where(["student_sessions.status" => "active"])
            ->get();


        return Datatables::of($students_query)
            ->editColumn("action_btns", function ($students_query) {
                return "<a class='btn btn-info student-edit' href='#' data-id='" . $students_query->id . "'><i class='glyphicon glyphicon-pencil'></i> Edit</a> <a class='btn btn-danger student-delete' href='#' data-id='" . $students_query->id . "'><i class='glyphicon glyphicon-trash'></i> Delete</a>";
            })
            ->rawColumns(["action_btns"])
            ->make(true);
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
