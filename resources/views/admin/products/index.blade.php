@extends('admin.layouts.app')

@section('title', 'لیست محصولات')

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> لیست محصولات</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">خانه</a></li>
                        </li>
                        <li class="breadcrumb-item active"> لیست محصولات</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> لیست محصولات </h3>
                            <div class="card-tools">
                                <a class="float-left btn btn-danger"
                                    href="{{ route('admin.products.index', ['type' => 'deleted']) }}">لیست حذف شده ها</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>شماره</th>
                                        <th>عنوان</th>
                                        <th>گروه</th>
                                        <th>قیمت</th>
                                        <th>موجودی</th>
                                        <th>تاریخ</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>-</td>
                                            <td>{{ number_format($product->price) }}</td>
                                            <td>{{ number_format($product->stock) }}</td>
                                            <td>{{ $product->created_at }}</td>
                                            <td>
                                                @if ($product->trashed())
                                                    <a class="btn btn-warning restore-item"
                                                        href="{{ route('admin.products.restore', $product) }}">بازگرداندن</a>
                                                @else
                                                    <a class="btn btn-primary"
                                                        href="{{ route('admin.products.edit', $product) }}">ویرایش</a>

                                                    <a class="btn btn-danger delete-item"
                                                        href="{{ route('admin.products.destroy', $product) }}">حذف</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
