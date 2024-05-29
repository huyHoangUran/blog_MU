@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List banner</h3>
                            </div>
                            <div class="card-body">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6"></div>
                                        <div class="col-sm-12 col-md-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">{{ __('blog.id') }}</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Home</th>
                                                        <th scope="col">Fanpage</th>
                                                        <th scope="col">Trạng thái</th>
                                                        <th class="add" scope="col"><a class="btn btn-success"
                                                                href="{{ route('ads.create') }}">{{ __('blog.create') }}</a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <div class="list">
                                                        @foreach ($data as $item)
                                                            <tr>
                                                                <th scope="row">{{ $item->id }}</th>
                                                                <td><a class="title"
                                                                        href="{{ route('ads.show', $item) }}">{{ $item->name }}</a>
                                                                </td>

                                                                <td><a class="title" target="_blank"
                                                                        href="{{ $item->home }}">{{ $item->home }}</a>
                                                                </td>
                                                                <td><a class="title" href="{{ $item->fanpage }}"
                                                                        target="_blank">{{ $item->fanpage }}</a>
                                                                </td>
                                                                <td>{{ $item->status == 0 ? 'Đang ẩn' : 'Đã hiển thị' }}
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-primary"
                                                                        href="{{ route('ads.show', $item) }}">
                                                                        Show </a>
                                                                    <form action="{{ route('ads.approved', $item->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('put')
                                                                        <button
                                                                            class="btn {{ $item->status == 0 ? 'btn-success' : 'btn-warning' }}">{{ $item->status == 0 ? 'Hiển thị bài viết' : ' Ẩn bài viết' }}</button>
                                                                    </form>
                                                                    <form action="{{ route('ads.destroy', $item->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-danger"
                                                                            onclick="return confirm('are you sure')">{{ __('blog.delete') }}</button>
                                                                    </form>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </div>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
