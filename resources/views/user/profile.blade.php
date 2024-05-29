@extends('layouts.base')
@section('content')
    <div>
        <div class="box-menu">
            <ul>
                <li class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/images/header_logo (1).png') }}"
                            alt=""></a>
                </li>
                <li class="active"><i class="bi bi-arrow-down-square-fill"></i><a href="">Mu mới ra</a>
                    <div class="box-submenu">
                        <ul>
                            <li class="active"><a href="">ALPHA TEST HÔM NAY</a></li>
                            <li class="active"><a href="">MU OPEN HÔM NAY</a></li>
                        </ul>
                    </div>
                </li>
                <li class="active"><i class="bi bi-arrow-down-square-fill"></i> <a href="">Mu theo phiên bản</a>
                    <div class="box-submenu">
                        <ul>
                            <li class="active"><a href="">Mu theo phiên
                                    bản</a></li>
                            <li class="active"><a href="">Mu theo phiên
                                    bản</a></li>
                            <li class="active"><a href="">Mu theo phiên
                                    bản</a></li>

                        </ul>
                    </div>
                </li>
                <li class="active"><i class="bi bi-arrow-down-square-fill"></i><a href="">Mu theo loại</a>
                    <div class="box-submenu">
                        <ul>
                            <li class="active"><a href="">ALPHA TEST HÔM NAY</a></li>
                            <li class="active"><a href="">MU OPEN HÔM NAY</a></li>
                        </ul>
                    </div>
                </li>
                <li class="active"><i class="bi bi-arrow-down-square-fill"></i><a href="">Hướng dẫn chơi game</a>
                    <div class="box-submenu">
                        <ul>
                            <li class="active"><a href="">ALPHA TEST HÔM NAY</a></li>
                            <li class="active"><a href="">MU OPEN HÔM NAY</a></li>
                        </ul>
                    </div>
                </li>
                <li class=" left"><img src="" alt="">
                    @if (auth()->check())
                        <div class="box-subuser">
                            <img src="{{ asset('/images/avataremty.png') }}" alt="">
                            <h6>{{ auth()->user()->name }}</h6>
                            <button class="down-btn toggle-button"><i class="bi bi-caret-down-fill"></i></button>
                            <div class="detail-user" id="my-div">
                                <div class="user">
                                    <div>
                                        <img src="{{ asset('/images/avataremty.png') }}" alt="">
                                    </div>
                                    <div class="user-dt">
                                        <h6>{{ auth()->user()->name }}</h6>
                                        <a href="#">Xem trang cá nhân</a>
                                    </div>
                                </div>
                                <div class="managing-blogs">
                                    <i class="bi bi-card-checklist"></i><a href="#">Quản lý tin đăng</a>
                                </div>
                                <div class="managing-blogs">
                                    <i class="bi bi-person-lines-fill"></i><a href="#">Quản lý Banner</a>
                                </div>
                                <div class="logout">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button>Đăng xuất
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </li>
                <li class="ads">
                    <a href="{{ route('ads.create') }}">Đăng quảng cáo</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="center">
        <div class="row ">
            <div class="col-xl-4 col-md-4">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="{{ auth()->user()->getUserImageURL() }}" class="img-radius"
                                        alt="User-Profile-Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600"> {{ __('profile.profile') }} </h6>
                                <div class="">
                                    <p class="m-b-10 f-w-600">{{ __('profile.email') }}</p>
                                    <h6 class="text-muted f-w-400">{{ $response['email'] }}</h6>
                                </div>
                                <div class="">
                                    <p class="m-b-10 f-w-600">{{ __('profile.name') }}</p>
                                    <h6 class="text-muted f-w-400">{{ $response['name'] }}</h6>
                                </div>
                                <div class="func">
                                    <a href="{{ route('users.edit') }}" class="btn btn-success">
                                        {{ __('profile.edit_profile') }}</a>
                                </div>
                                <div class="func">
                                    <a href="{{ route('users.change_password') }}" class="btn btn-primary">
                                        {{ __('title.change_password') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-4">
                <div class="navbar">
                    <a href="#" id="show1">Your ads</a>
                </div>
                <div class="row row1">
                    @foreach ($myBlogLists as $item)
                        <div class="col-xl-4 tag">
                            <div class="card">
                                <img src="{{ Storage::exists($item->img) ? Storage::url($item->img) : asset($item->img) }}"
                                    class="" alt="{{ __('blog.image_blog') }}" />
                                <div class="card-body">
                                    <p>{{ $item->category->name }}</p>
                                    <a href="{{ route('blogs.show', $item) }}"
                                        class="card-title">{{ $item->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        const toggleButton = document.querySelector('.toggle-button');
        const myDiv = document.getElementById('my-div');
        const video = document.getElementById('myVideo');

        toggleButton.addEventListener('click', () => {
            myDiv.style.display = myDiv.style.display === 'none' ? 'block' : 'none';
        });
    </script>
@endsection
