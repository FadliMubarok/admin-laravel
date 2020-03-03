<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ActivityController extends Controller
{
    public function index()
    {
    	if (!Gate::allows('activity_index')) {
            return abort(401);
        }

    	$dataLog = LogActivity::all();

    	return view('admin.activities.index', compact('dataLog'));
    }
}
