<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function show()
    {
        $cat=Category::all();
        return view('admin.category.categories',compact($cat,'cat'));
    }

    public function show_add_form()
    {
        return view('admin.category.add_category');

    }

    public function add(Request $request)
    {
        request()->validate([
            'name' => 'required',
        ]);
        $cat= $request->all();
        $check = $this->create($cat);
        return redirect()->route('show-categories');
        // return response()->json($users);

    }

    public function create(array $data)
    {
        return Category::create([
                'name' => $data['name'],
            ]
        );

    }
}
