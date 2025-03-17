@extends('admin.layouts.app')

@section('title', 'ویرایش محصول')

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> ویرایش محصول</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">خانه</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">لیست محصولات </a>
                        </li>
                        <li class="breadcrumb-item active"> ویرایش محصول</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.products.update', $product) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">عنوان</label>
                                    <input type="text" name="name" value="{{ $product->name }}" required
                                        class="form-control" id="exampleInputName" placeholder="عنوان را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">گروهبندی</label>
                                    <select class="form-control" name="category_id" required>
                                        <option>لطفا یک گروه را انتخاب نمایید</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputImage">تصویر</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputImage"
                                        placeholder="تصویر را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDescription">توضیحات</label>
                                    <textarea name="description" required class="form-control" id="exampleInputDescription"
                                        placeholder="تصویر را وارد کنید">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPrice">قیمت</label>
                                    <input type="number" name="price" value="{{ $product->price }}" required
                                        class="form-control" id="exampleInputPrice" placeholder="قیمت را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputStock">موجودی</label>
                                    <input type="number" name="stock" value="{{ $product->stock }}" required
                                        class="form-control" id="exampleInputStock" placeholder="موجودی را وارد کنید">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
