<?php
namespace App\Http\Controllers\Admin;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();
        if (isset($data['type']) && $data['type'] == "deleted") {
            $products = Product::onlyTrashed()->with('category', 'user')->latest()->get();
        } else {
            $products = Product::with('category', 'user')->latest()->get();
        }
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data            = $request->all();
        $data['slug']    = Str::slug($data['name']);
        $data['user_id'] = auth()->user()->id;
        if ($request->hasFile('image')) {
            $data['image'] = UploadHelper::uploadImage($request->file('image'), 'product_images');
        }
        Product::create($data);
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data                 = $request->all();
        $product->name        = $data['name'];
        $product->category_id = $data['category_id'];
        $product->description = $data['description'];
        $product->price       = $data['price'];
        $product->stock       = $data['stock'];
        if ($request->hasFile('image')) {
            $imagePath = UploadHelper::uploadImage($request->file('image'), 'product_images');
            UploadHelper::deleteImage($product->image);
            $product->image = $imagePath;
        }
        $product->save();
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'اطلاعات با موفقیت حذف شد',
        ], 200);
    }

    public function restore($product)
    {
        $product = Product::onlyTrashed()->where('slug', $product)->first();
        if (! $product) {
            return response()->json([
                'message' => 'آیتم مورد نظر یافت نشد',
            ], 404);
        }
        $product->restore();
        return response()->json([
            'message' => 'اطلاعات با موفقیت بازیابی شد',
        ], 200);
    }
}
