<?php
namespace App\Controllers;

use App\Models\PostModel;

class HomeController extends BaseController {
    public function index() {
        $model = new PostModel();
        $data['posts'] = $model->orderBy('created_at', 'DESC')->findAll();
        return view('frontend/home', $data);
    }
}