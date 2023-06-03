@extends('CustomerInterface/main')

@section('content')
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">Đổi mật khẩu</p>
            <div class="content-of-add-product">
                <form action="{{route('change-password')}}" method="POST">
                    @if (isset($thongbao))

                        @if($thongbao==1)
                        <div class="alert alert-success">
                            Đổi mật khẩu thành công!
                        </div>
                        @else
                        <div class="alert alert-danger">
                            Đổi mật khẩu không thành công!
                        </div>
                        @endif
                    @endif
                    @method('post')
                    @csrf
                    <input type="hidden" name="account-id"> {{-- Phải có category để biết đang sửa của tài khoản nào --}}
                    <div class="mb-3">
                        <label for="oldPassword" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                    </div>

                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Xác nhận mật khẩu mới</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                </form>
            </div>

        </div>
    </div>
@endsection
