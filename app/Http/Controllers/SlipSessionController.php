<?php

namespace App\Http\Controllers;

use App\Models\SlipSession;
use Illuminate\Http\Request;
use Datatables;
use Validator;
use DateTime;
use DB;

class SlipSessionController extends Controller
{
    public function createSession()
    {
        return view("admin.views.create_session");
    }

    public function viewSession()
    {
        return view("admin.views.view_sessions");
    }

    public function listAllSessions()
    {
        //$slip_sessions = SlipSession::query();


        /* return Datatables::of($slip_sessions)
            ->editColumn("action_btns", function ($slip_sessions) {
                return "<a class='btn btn-info session-edit' href='#' data-id='" . $slip_sessions->id . "'><i class='glyphicon glyphicon-pencil'></i> Edit</a> <a class='btn btn-danger session-delete' href='#' data-id='" . $slip_sessions->id . "'><i class='glyphicon glyphicon-trash'></i> Delete</a>";
            })
            ->rawColumns(["action_btns"])
            ->make(true);*/


        $slip_sessions_query = DB::table("slip_sessions")
            ->select("slip_sessions.*")
            ->where(["slip_sessions.status" => "active"])
            ->get();

        return Datatables::of($slip_sessions_query)
            ->editColumn("action_btns", function ($slip_sessions_query) {
                return "<a class='btn btn-info session-edit' href='#' data-id='" . $slip_sessions_query->id . "'><i class='glyphicon glyphicon-pencil'></i> Edit</a> <a class='btn btn-danger session-delete' href='#' data-id='" . $slip_sessions_query->id . "'><i class='glyphicon glyphicon-trash'></i> Delete</a>";
            })
            ->rawColumns(["action_btns"])
            ->make(true);
    }

    public function saveSlipSession(Request $request)
    {

        $validator = Validator::make(array(
            "date" => $request->datepicker //name of field in html
        ), array(
            "date" => "required | unique:slip_sessions" //name of field in message
        ));

        if ($validator->fails()) {
            return redirect('create-session')->withErrors($validator)->withInput();
        } else {
            //success
            //store into DB
            $session = new SlipSession;
            $date = $request->datepicker;
            $time = $request->sessionTime;

            $date = new DateTime($date);
            $date_label = $date->format('l, F j, Y');
            $session->label = $date_label;
            $date_session = $date->format('Y-m-d ' . $time);

            $session->date =  $date_session;
            $session->semester = $request->sessionSemester;

            $session->status = 'active';

            $session->availability = 30;

            $session->save();

            $request->session()->flash("message", "SLIP Session has been created successfully");

            return redirect('create-session');
        }
    }

    public function updateSession()
    {
        echo "Welcome";
    }

    public function deleteSession()
    {
        echo "Welcome";
    }
}
