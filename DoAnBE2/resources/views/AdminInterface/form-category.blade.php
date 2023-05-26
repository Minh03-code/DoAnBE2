@extends('AdminInterface/main')

@section('content')
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">Ở đây hiển thị là thêm sản phẩm nếu đường dẫn là add-category hoặc là chỉnh sửa sản phẩm
                nếu đường dẫn là edit-category</p>
            <div class="content-of-add-category">
                <form action="#" method="POST">
                    <input type="hidden" name="category-id"> {{-- Nếu là sửa thì phải có id để sửa --}}
                    <div class="mb-3">
                        <label for="category-name" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="category-name" name="category-name">
                    </div>

                    <div class="mb-3">
                        <label for="category-description" class="form-label">Mô tả danh mục</label>
                        <input type="text" class="form-control" id="category-description" name="category-description">
                    </div>

                    <button type="submit" class="btn btn-primary">Ở đây hiển thị là chữ thêm nếu đường dẫn là add-category
                        hoặc là chữ chỉnh sửa nếu đường dẫn là edit-category nếu làm biếng thì để là OK</button>
                </form>
            </div>

        </div>
    </div>
@endsection
