<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

use  Illuminate\Support\Facades\Mail;
use App\Models\User;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {

        return view('dashboard');
    }
}
