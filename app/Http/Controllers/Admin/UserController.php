<?php
namespace App\Http\Controllers\Admin;

use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();
        if (isset($data['type']) && $data['type'] == "deleted") {
            $users = User::onlyTrashed()->latest()->get();
        } else {
            $users = User::latest()->get();
        }

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = UploadHelper::uploadImage($request->file('image'), 'user_images');
        }
        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'image'    => $data['image'] ?? null,
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ثبت شد');
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
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data        = $request->all();
        $user->name  = $data['name'];
        $user->email = $data['email'];
        if (isset($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        if ($request->hasFile('image')) {
            $imagePath = UploadHelper::uploadImage($request->file('image'), 'user_images');
            UploadHelper::deleteImage($user->image);
            $user->image = $imagePath;
        }
        $user->save();
        return redirect()->back()->with('message', 'اطلاعات با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'اطلاعات با موفقیت حذف شد',
        ], 200);
    }

    public function restore($user)
    {
        $user = User::onlyTrashed()->where('id', $user)->first();
        if (! $user) {
            return response()->json([
                'message' => 'آیتم مورد نظر یافت نشد',
            ], 404);
        }
        $user->restore();
        return response()->json([
            'message' => 'اطلاعات با موفقیت بازیابی شد',
        ], 200);
    }
}
