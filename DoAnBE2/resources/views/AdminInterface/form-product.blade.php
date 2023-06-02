@extends('AdminInterface/main')

@section('content')
    @if(isset($product))
    <div class="form-margin-m">
        <div class="container">
            <p class="title-form-n">
               Sửa Món Ăn
            </p>
            <div class="content-of-add-product">
                <form action="#" method="POST">
                    <input type="hidden" name="product-id" value="{{$product->id}}"> 
                    <div class="mb-3">
                        <label for="product-name" class="form-label">Tên món</label>
                        <input type="text" class="form-control" id="product-name" name="product-name" value="{{$product->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="product-price" class="form-label">Giá</label>
                        <input type="number" class="form-control" id="product-price" name="product-price" value="{{$product->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="product-description" class="form-label">Mô tả món ăn</label>
                        <input type="text" class="form-control" id="product-description" name="product-description" value="{{$product->description}}">
                    </div>
                    <div class="mb-3">
                        <label for="product-image" class="form-label">Chọn ảnh</label>
                        <input type="hidden" value="{{asset($product->image)}}" name="imageOld">
                        <input type="file" class="form-control" id="product-image" name="product-image" >
                    </div>
                    <div class="mb-3">
                        <label for="product-image" class="form-label">Chọn danh mục của món ăn</label>
                        <br>
                        <select id="product-id" name="product-id" class="form-select">
                            @foreach($categories as $cate)
                            <option value="{{$cate->id}}" {{$product->category_id == "$cate->id" ? "selected":""}}>{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Hoàn tất chỉnh sửa</button>
                </form>
            </div>

        </div>
    </div>
    @else
    <div class="form-margin-m">
        <div class="container">
        
            <p class="title-form-n">
               Thêm Món Ăn
            </p>
            <div class="content-of-add-product">
                <form action="{{ route('admin.createNewProduct') }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    <input type="hidden" name="product-id" > 
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
                        <label for="category-id" class="form-label">Chọn danh mục của món ăn</label>
                        <br>
                        <select id="category-id" name="category-id" class="form-select">
                            @foreach($categories as $cate)
                            @if($cate->id==$categories->first()->id)
                            <option value="{{$cate->id}}" selected>{{$cate->name}}</option>
                            @else
                            <option value="{{$cate->id}}" >{{$cate->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Thêm món ăn</button>
                </form>
            </div>

        </div>
    </div>
    @endif
@endsection
