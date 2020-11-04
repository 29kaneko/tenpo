<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenpoController extends Controller
{
    public function add()
    {
        return view('admin.tenpo.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/tenpo/create');
    }
}
