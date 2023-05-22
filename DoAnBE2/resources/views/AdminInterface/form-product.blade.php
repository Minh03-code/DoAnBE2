@extends('AdminInterface/main')

@section('content')
    <div class="container">
        <p class="p-addpr">Ở đây hiển thị là thêm sản phẩm nếu đường dẫn là add-product hoặc là chỉnh sửa sản phẩm nếu đường dẫn là edit-product</p>
        <div class="content-of-add-product">
            <form action="#" method="POST">
                <input type="hidden" name="product-id"> {{-- Nếu là sửa thì phải có id để sửa --}}
                <div class="mb-3">
                    <label for="product-name" class="form-label">Tên món</label>
                    <input type="text" class="form-control" id="product-name" name="product-name">
                </div>
                <div class="mb-3">
                    <label for="product-price" class="form-label">Giá</label>
                    <input type="number" class="form-control" id="product-price" name="product-price">
                </div>
                <div class="mb-3">
                    <label for="product-description" class="form-label">Mô tả món ăn</label>
                    <input type="text" class="form-control" id="product-description" name="product-description">
                </div>
                <div class="mb-3">
                    <label for="product-image" class="form-label">Chọn ảnh</label>
                    <input type="file" class="form-control" id="product-image" name="product-image">
                </div>
                <div class="mb-3">
                    <label for="product-image" class="form-label">Chọn danh mục của món ăn</label>
                    <br>
                    <select id="product-id" name="product-id" class="form-select">
                        <option value="1" selected>Món Nước</option>
                        <option value="2">Món Khô</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ở đây hiển thị là chữ thêm nếu đường dẫn là add-product hoặc là chữ chỉnh sửa nếu đường dẫn là edit-product nếu làm biếng thì để là OK</button>
            </form>
        </div>

    </div>
@endsection
