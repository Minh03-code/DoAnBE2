@extends('AdminInterface/main')

@section('content')
    <div class="container">
        <p class="p_addpr">Sửa Thông Tin</p>
        <div class="content_of_add_product">
            <form>
                <div class="mb-3">
                    <label for="edit_password" class="form-label">Mật Khẩu</label>
                    <input type="text" class="form-control" id="edit_password" name="edit_password">
                </div>

                <div class="mb-3">
                    <label for="edit_name_customer" class="form-label">Tên Người Dùng</label>
                    <input type="text" class="form-control" id="edit_name_customer" name="edit_name_customer">
                </div>
                <div class="mb-3">
                    <label for="edit_email" class="form-label">Địa Chỉ Email</label>
                    <input type="text" class="form-control" id="edit_email" name="edit_email">
                </div>
                <div class="mb-3">
                    <label for="edit_phone" class="form-label">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="edit_phone" name="edit_phone">
                </div>

                <button type="submit" class="btn btn-primary">Chấp Nhận Thay Đổi</button>
            </form>
        </div>

    </div>
@endsection
