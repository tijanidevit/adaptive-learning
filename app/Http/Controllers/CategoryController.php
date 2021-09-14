<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all()->sortBy('category');
        $user_role = $this->getUserRole();

        if ($user_role = 0)
            return view('admin.categories.index', compact(['categories']));
        if ($user_role = 1)
            return view('tutors.categories.index', compact(['categories']));
        if ($user_role = 2)
            return view('students.categories.index', compact(['categories']));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => 'required,string,min:3'
        ]);
        Category::create($data);
        return redirect()->route('admin.categories')->with('success',$data['category'].'created successfully');
    }

    public function show(Category $category)
    {
        $courses = $category->courses()->paginate(20);
        if ($user_role = 0)
            return view('admin.categories.show', compact(['category','courses']));
        if ($user_role = 1)
            return view('tutors.categories.show', compact(['category','courses']));
        if ($user_role = 2)
            return view('students.categories.show', compact(['category','courses']));
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories')->with('success','category deleted successfully');
    }
}
