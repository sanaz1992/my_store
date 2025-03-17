@extends('admin.layouts.app')

@section('title', 'لیست مطالب')

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> لیست مطالب</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">خانه</a></li>
                        </li>
                        <li class="breadcrumb-item active"> لیست مطالب</li>
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
                            <h3 class="card-title"> لیست مطالب </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>شماره</th>
                                        <th>عنوان</th>
                                        <th>تاریخ</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $blog->name }}</td>
                                            <td>{{ $blog->created_at }}</td>
                                            <td>

                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.blogs.edit', $blog) }}">ویرایش</a>

                                                <a class="btn btn-danger delete-item"
                                                    href="{{ route('admin.blogs.destroy', $blog) }}">حذف</a>

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
