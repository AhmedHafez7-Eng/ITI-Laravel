<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\DB;

session_start();
class CategoryController extends Controller
{
    public function showCategories()
    {
        $categories = Category::paginate(7);
        return view('categoryList', ['categories' => $categories]);
    }
    public function showOneCategory($id)
    {
        $cat = DB::table('categories')
            ->select('id', 'name')
            ->where('id', '=', $id)
            ->first();
        //$comments = Category::find(1)->comments;
        $related = [];
        //$categories = Category::find(3)->categoryArticles();


        return view('viewCategory', ['categories' => $cat, 'related' => Category::find($id)->categoryArticles]);
    }
    public function createCategory()
    {
        return view('create');
    }
    public function save(CategoryRequest $request)
    {
        $validated = $request->validated();

        // Retrieve a portion of the validated input data...
        $validated = $request->safe()->only(['name']);
        if ($validated) {
            $category = new Category();
            $category->name = $request->name;
            $category->save(); // INSERT INTO TABLE

            return redirect()->route('categories.list');
        }

        // save new category
    }

    public function delete($id)
    {
        if (Category::find($id)) {

            $category = Category::find($id);
            if (!$category) {
                return "Company Not Found.";
            }
            // Delete Childs First, Then Delete Parent
            $category->categoryArticles()->delete();
            $category->delete();
            return redirect()->route('categories.list');
        }
    }

    public function updateCategory($id)
    {
        $_SESSION['id'] = $id;
        return view('update');
    }
    public function update(Request $request)
    {
        $cat = Category::find($_SESSION['id']);

        $cat->name = $request->updateName;

        $cat->save();

        return redirect()->route('categories.list');
    }
}