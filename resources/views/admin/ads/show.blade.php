@include('layouts.base')
@include('layouts.header')
@if (session('success'))
    <div class="alert alert-success fade-in">{{ session('success') }}</div>
@endif
@if (session('error'))
    <div class="alert alert-danger fade-in">{{ session('error') }}</div>
@endif

<section class="content">
    <div>
        <ul class="breadcrumb">
            <li><a href="">{{ __('title.home') }}</a></li>
            <li><a href="">Detail Ads </a></li>
        </ul>
    </div>
    <div class="create">
        <h1>Detail Ads</h1>
        <div class="form-input ">
            <label for="">Tên Mu <span>*</span></label>
            <input class="title" type="text" name="name" disabled placeholder="{{ __('blog.title') }}"
                value="{{ $ads->name }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input ">
            <label for="">Trang chủ<span>*</span></label>
            <input class="title" type="text" name="home" disabled placeholder="Link trang chủ MU"
                value="{{ $ads->home }}">
            @error('home')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input ">
            <label for="">Fanpage hỗ trợ<span>*</span></label>
            <input class="title" type="text" name="fanpage" disabled placeholder="Nhập đường link fanpage hỗ trợ"
                value="{{ $ads->fanpage }}">
            @error('fanpage')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-input ">
            <label for="">Tên server<span>*</span></label>
            <input class="title" type="text" name="server" disabled placeholder="Nhập tên server"
                value="{{ $ads->server }}">
            @error('server')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-input ">
            <label for="">Miêu tả ngắn gọn<span>*</span></label>
            <input class="title" type="text" name="short_description" disabled
                placeholder="Nhập đường link short_description hỗ trợ" value="{{ $ads->short_description }}">
            @error('fanpage')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-input ">
            <label for="">Alpha test<span>*</span></label>
            <input class="title" type="datetime-local" name="alpha_test" disabled placeholder="giờ alpha test"
                value="{{ $ads->alpha_test }}">
            @error('alpha_test')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input ">
            <label for="">Open beta<span>*</span></label>
            <input class="title" type="datetime-local" name="open_beta" disabled placeholder="giờ open beta"
                value="{{ $ads->open_beta }}">
            @error('open_beta')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-input ">
            <label for="">EXP<span>*</span></label>
            <input class="title" type="number" name="exp" disabled
                placeholder="EXP Rate 
                    (vd: 1x, 5x, 100x, 500x, 9999x)" disabled
                value="{{ $ads->exp }}">
            @error('exp')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-input ">
            <label for="">DROP<span>*</span></label>
            <input class="title" type="number" name="drop" disabled
                placeholder="DROP RATE
                    (vd: 10%, 40%, 50%, 80%)" value="{{ $ads->drop }}">
            @error('drop')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-input ">
            <label for="">Anti hack<span>*</span></label>
            <input class="title" type="text" name="anti_hack" disabled placeholder="Nhập tên loại hack"
                value="{{ $ads->anti_hack }}">
            @error('anti_hack')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-input">
            <label class="first" for="image">{{ __('blog.upload_image') }}</label>

            <img src="{{ Storage::url($ads->image) }}" width="100%" alt="Image preview">
        </div>
        <div class="form-input description">
            <label for="">{{ __('blog.description') }} <span>*</span></label>
            <textarea name="description" id="summernote" style="overflow: hidden; ">{{ $ads->description }}</textarea>

            @error('content')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <form action="{{ route('ads.approved', $ads->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-input submit">

                <button
                    class="btn {{ $ads->status == 0 ? 'btn-success' : 'btn-warning' }}">{{ $ads->status == 0 ? 'Hiển thị bài viết' : ' Ẩn bài viết' }}</button>
            </div>
        </form>
    </div>
</section>
<script>
    $('#summernote').summernote({
        placeholder: 'Enter the text',
        tabsize: 1,
        height: 500
    });
    $('#summernote').summernote('disable');
</script>
<script src="{{ asset('resources/js/app.js') }}"></script>
@include('layouts.footer')
