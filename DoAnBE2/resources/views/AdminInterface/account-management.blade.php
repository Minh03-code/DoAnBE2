@extends('AdminInterface/main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">


            <div class="card flex-fill">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <h5 class="card-title mb-0">Quản lí tài khoản</h5>
                        </div>
                    </div>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-xl-table-cell">Tên tài khoản</th>
                            <th class="d-none d-xl-table-cell">Tên khách hàng</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Hiển thị sản phẩm -->
                        <tr>
                            <td>#1111</td>
                            <td class="d-none d-xl-table-cell">tkkh1</td>
                            <td class="d-none d-xl-table-cell">Nguyễn Tấn Dũng</td>
                            <td>
                                <a href="#" class="btn btn-danger">Khóa</a>
                                <a href="#" class="btn btn-success">Mở khóa</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@endsection
