@extends('AdminInterface/main')

@section('content')
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">Sửa thông tin</p>
            <div class="content-of-add-product">
                <form action="#" method="POST">
                    <input type="hidden" name="account-id"> {{-- Phải có category để biết đang sửa của tài khoản nào --}}
                    <div class="mb-3">
                        <label for="edit-name-customer" class="form-label">Tên người dùng</label>
                        <input type="text" class="form-control" id="edit-name-customer" name="edit-name-customer">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="edit-email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="edit-email" name="edit-email">
                    </div>
                    <div class="mb-3">
                        <label for="edit-phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="edit-phone" name="edit-phone">
                    </div>

                    <button type="submit" class="btn btn-primary">Chấp nhận thay đổi</button>
                </form>
            </div>

        </div>
    </div>
@endsection
