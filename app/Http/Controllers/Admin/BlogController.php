<?php
namespace App\Http\Controllers\Admin;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data         = $request->all();
        $data['slug'] = Str::slug($data['name']);
        if ($request->hasFile('image')) {
            $data['image'] = UploadHelper::uploadImage($request->file('image'), 'blog_images');
        }
        Blog::create($data);
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ثبت شد.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data              = $request->all();
        $blog->name        = $data['name'];
        $blog->description = $data['description'];
        if ($request->hasFile('image')) {
            $imagePath = UploadHelper::uploadImage($request->file('image'), 'blog_images');
            UploadHelper::deleteImage($blog->image);
            $blog->image = $imagePath;
        }
        $blog->save();
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ویرایش شد.');
    }

    public function destroy(Blog $blog)
    {
        UploadHelper::deleteImage($blog->image);
        $blog->delete();
        return response()->json([
            'message' => 'اطلاعات با موفقیت حذف شد.',
        ], 200);
    }
}
