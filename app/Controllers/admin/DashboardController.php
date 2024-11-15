<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index(): string
    {
        return view('admin/belajar-ekspor/index');
    }
}
