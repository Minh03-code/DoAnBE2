@extends('AdminInterface/main')

@section('content')
    <div class="container">
        <p class="p_addpr">Ở đây hiển thị là thêm sản phẩm nếu đường dẫn là add-category hoặc là chỉnh sửa sản phẩm nếu đường dẫn là edit-category</p>
        <div class="content_of_add_category">
            <form>
                <div class="mb-3">
                    <label for="category_name" class="form-label">Tên Danh Mục</label>
                    <input type="text" class="form-control" id="category_name" name="category_name">
                </div>

                <div class="mb-3">
                    <label for="category_description" class="form-label">Mô Tả Danh Mục</label>
                    <input type="text" class="form-control" id="category_description" name="category_description">
                </div>

                <button type="submit" class="btn btn-primary">Ở đây hiển thị là chữ thêm nếu đường dẫn là add-category hoặc là chữ chỉnh sửa nếu đường dẫn là edit-category nếu làm biếng thì để là OK</button>
            </form>
        </div>

    </div>
@endsection
