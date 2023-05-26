@extends('AdminInterface/main')

@section('content')
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">Đổi mật khẩu</p>
            <div class="content-of-add-product">
                <form action="#" method="POST">
                    <input type="hidden" name="account-id"> {{-- Phải có category để biết đang sửa của tài khoản nào --}}
                    <div class="mb-3">
                        <label for="old-password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="edit-password" name="edit-password">
                    </div>

                    <div class="mb-3">
                        <label for="new-password" class="form-label">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="new-password" name="new-password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Xác nhận mật khẩu mới</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                    </div>
                    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                </form>
            </div>

        </div>
    </div>
@endsection
