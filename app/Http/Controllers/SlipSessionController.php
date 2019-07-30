<?php

namespace App\Http\Controllers;

use App\Models\SlipSession;
use Illuminate\Http\Request;

class SlipSessionController extends Controller
{
    public function createSession()
    {
        return view("admin.views.create_session");
    }

    public function viewSession()
    {
        echo "Welcome";
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
