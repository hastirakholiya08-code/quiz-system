<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mcq;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $mcqs = Mcq::with(['quiz.category'])->get();

        $admin = Session::get('admin');

        $name = null;
        if ($admin) {
            if (is_array($admin)) {
                $name = $admin['name'] ?? null;
            } else {
                $name = $admin->name ?? null;
            }
        }

        return view('admin.dashboard', compact('mcqs', 'name'));
    }
}
