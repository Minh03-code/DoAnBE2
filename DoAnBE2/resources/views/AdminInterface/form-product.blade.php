@extends('AdminInterface/main')

@section('content')
    <div class="container">
        <p class="p_addpr">Ở đây hiển thị là thêm sản phẩm nếu đường dẫn là add-product hoặc là chỉnh sửa sản phẩm nếu đường dẫn là edit-product</p>
        <div class="content_of_add_product">
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="product_name" class="form-label">Tên Món</label>
                    <input type="text" class="form-control" id="product_name" name="product_name">
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label">Đơn Giá</label>
                    <input type="number" class="form-control" id="product_price" name="product_price">
                </div>
                <div class="mb-3">
                    <label for="product_description" class="form-label">Mô Tả Món Ăn</label>
                    <input type="text" class="form-control" id="product_description" name="product_description">
                </div>
                <div class="mb-3">
                    <label for="product_image" class="form-label">Chọn Ảnh</label>
                    <input type="file" class="form-control" id="product_image" name="product_image">
                </div>
                <div class="mb-3">
                    <label for="product_image" class="form-label">Chọn Danh Mục Của Món Ăn</label>
                    <br>
                    <select id="product_id" name="product_id" class="form-select">
                        <option value="1" selected>Món Nước</option>
                        <option value="2">Món Khô</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ở đây hiển thị là chữ thêm nếu đường dẫn là add-product hoặc là chữ chỉnh sửa nếu đường dẫn là edit-product nếu làm biếng thì để là OK</button>
            </form>
        </div>

    </div>
@endsection
