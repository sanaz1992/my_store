<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        if (isset($data['type']) && $data['type'] == "deleted") {
            $categories = Category::onlyTrashed()->latest()->get();
        } else {
            $categories = Category::latest()->get();
        }
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Category::create([
            'name' => $data['name'],
            'slug' => \Str::slug($data['name']),
        ]);
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ثبت شد.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $data           = $request->all();
        $category->name = $data['name'];
        $category->save();
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ویرایش شد.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'message' => 'اطلاعات با موفقیت حذف شد',
        ], 200);
    }

    public function restore($category)
    {
        $category = Category::onlyTrashed()->where('slug', $category)->first();
        if (! $category) {
            return response()->json([
                'message' => 'آیتم مورد نظر یافت نشد.',
            ], 404);
        }
        $category->restore();
        return response()->json([
            'message' => 'اطلاعات با موفقیت بازیابی شد.',
        ], 200);
    }
}
