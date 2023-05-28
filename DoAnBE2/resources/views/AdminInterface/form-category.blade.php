@extends('AdminInterface/main')

@section('content')
@if(isset($category))
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">Sửa Danh Mục</p>
            <div class="content-of-add-category">
                <form action="#" method="POST">
                    <input type="hidden" name="category-id" value="{{$category->id}}"> {{-- Nếu là sửa thì phải có id để sửa --}}
                    <div class="mb-3">
                        <label for="category-name" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="category-name" name="category-name" value="{{$category->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="category-image" class="form-label">Chọn ảnh</label>
                        <input type="file" class="form-control" id="category-image" name="category-image">
                    </div>
                    <div class="mb-3">
                        <label for="category-description" class="form-label">Mô tả danh mục</label>
                        <input type="text" class="form-control" id="category-description" name="category-description" value="{{$category->description}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                </form>
            </div>

        </div>
    </div>
@else
<div class="form-margin-m">
    <div class="container">
        <p class="title-form-n">Thêm Danh Mục</p>
        <div class="content-of-add-category">
            <form action="#" method="POST">
                <input type="hidden" name="category-id"> {{-- Nếu là sửa thì phải có id để sửa --}}
                <div class="mb-3">
                    <label for="category-name" class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" id="category-name" name="category-name"">
                </div>
                <div class="mb-3">
                    <label for="category-image" class="form-label">Chọn ảnh</label>
                    <input type="file" class="form-control" id="category-image" name="category-image">
                </div>
                <div class="mb-3">
                    <label for="category-description" class="form-label">Mô tả danh mục</label>
                    <input type="text" class="form-control" id="category-description" name="category-description"">
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>

    </div>
</div>
@endif
@endsection

