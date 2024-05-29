@extends('layouts.base')
@section('title', __('title.create_blog'))
@section('content')
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
                        <li class="active"><a href="">SEASON 2</a></li>
                        <li class="active"><a href="">SEASON 3</a></li>
                        <li class="active"><a href="">SEASON 6</a></li>
                        <li class="active"><a href="">SEASON 7</a></li>
                        <li class="active"><a href="">SEASON 16</a></li>
                        

                    </ul>
                </div>
            </li>
            <li class="active"><i class="bi bi-arrow-down-square-fill"></i><a href="">Mu theo loại</a>
                <div class="box-submenu">
                    <ul>
                        <li class="active"><a href="">NON RESET</a></li>   
                        <li class="active"><a href="">RESET WEB</a></li>   
                        <li class="active"><a href="">RESET IN GAME</a></li>   
                        <li class="active"><a href="">MU NGUYÊN BẢN WEBZEN</a></li>   
                        <li class="active"><a href="">MU CUSTOM THÊM ĐỒ MƠI</a></li>   
                        <li class="active"><a href="">MU NGUYÊN BẢN</a></li>   
                        <li class="active"><a href="">KEEP POINT</a></li>   
                    </ul>
                </div>
            </li>
            <li class="active"><i class="bi bi-arrow-down-square-fill"></i><a href="">Hướng dẫn chơi game</a>
                
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
    <script>
        const toggleButton = document.querySelector('.toggle-button');
        const myDiv = document.getElementById('my-div');
        const video = document.getElementById('myVideo');

        toggleButton.addEventListener('click', () => {
            myDiv.style.display = myDiv.style.display === 'none' ? 'block' : 'none';
        });
    </script>

@endsection
