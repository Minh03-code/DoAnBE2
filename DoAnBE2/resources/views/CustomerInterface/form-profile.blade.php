@extends('CustomerInterface/main')

@section('content')
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">Sửa thông tin</p>
            <div class="content-of-add-product">
                <form action="{{route('change-profile')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id-account" class="form-label">ID người dùng</label>
                        <input type="number" class="form-control" name="account-id" value="{{ Session::has('account') ? Session::get('account'): '' }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="edit-name-customer" class="form-label">Tên người dùng</label>
                        <input type="text" class="form-control" id="edit-name-customer" name="edit-name-customer" value="{{Session::has('account') ? $profile->name: ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{Session::has('account') ? $profile->address: ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="edit-email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="edit-email" name="edit-email" value="{{Session::has('account') ? $profile->email: ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="edit-phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="edit-phone" name="edit-phone" value="{{Session::has('account') ? $profile->phone_number: ''}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Chấp nhận thay đổi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
