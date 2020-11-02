<?php
namespace App\Http\Controllers\VideoGenerator;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function showForm()
    {
        return view('layouts.dashboard.video_generator.blog_to_video');
    }
    
    public function getContent()
    {
        
    }
}