<?php
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

namespace App\Http\Controllers;



class UserController extends Controller
{
    public function index() {
        // $products = Product::where('is_delete', '1')->paginate(3);
        return view('admin.user.index', compact('user'));
    }
}
