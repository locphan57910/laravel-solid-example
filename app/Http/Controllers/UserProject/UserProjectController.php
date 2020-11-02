<?php

namespace App\Http\Controllers\UserProject;

use App\Http\Controllers\Controller;

class UserProjectController extends Controller
{
   public function index()
   {
       return view('layouts.dashboard.user_projects.projects');
   }
}
