@extends('AdminInterface/main')

@section('content')
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">Quản lí thông tin liên hệ</p>
            <div class="content-of-add-product">
                <form action="changeContact" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="logo-web" class="form-label">Logo</label>
                        <input type="text" class="form-control" id="logo-web" name="logo" value="{{$contact->logo}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$contact->address}}">
                    </div>
                    <div class="mb-3">
                        <label for="open-time" class="form-label">Thời gian mở cửa</label>
                        <input type="text" class="form-control" id="open-time" name="openTime" value="{{$contact->open_time}}">
                    </div>
                    <div class="mb-3">
                        <label for="close-time" class="form-label">Thời gian đóng cửa</label>
                        <input type="text" class="form-control" id="close-time" name="closeTime" value="{{$contact->clone_time}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$contact->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="image-banner-web" class="form-label">Chọn ảnh banner</label>
                        <input type="file" class="form-control" id="image-banner-web" name="imageBannerWeb">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhập</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
