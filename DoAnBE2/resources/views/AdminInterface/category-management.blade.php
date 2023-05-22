@extends('AdminInterface/main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <h5 class="card-title mb-0">Quản lí danh mục</h5>
                        </div>
                        <div class="col-md-9">
                            <a href="{{ route('admin.add-category') }}" class="btn btn-primary">Thêm</a>
                        </div>
                    </div>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-xl-table-cell">Tên danh mục</th>
                            <th>Trạng thái</th>
                            <th class="d-none d-md-table-cell">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Hiển thị sản phẩm -->
                        <tr>
                            <td>#1111</td>
                            <td class="d-none d-xl-table-cell">Nguyễn Tấn Dũng</td>
                            <td>
                                <a href="#" class="btn btn-danger">Khóa</a>
                                <a href="#" class="btn btn-success">Mở khóa</a>
                            </td>
                            <td class="d-none d-md-table-cell">
                                <a href="{{ route('admin.edit-category') }}" class="btn btn-primary">Chỉnh sửa</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@endsection
