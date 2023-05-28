@extends('AdminInterface/main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">


            <div class="card flex-fill">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <h5 class="card-title mb-0">Quản lí hóa đơn</h5>
                        </div>
                    </div>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-xl-table-cell">Tên khách hàng</th>
                            <th class="d-none d-xl-table-cell">Email</th>
                            <th class="d-none d-xl-table-cell">Địa chỉ nhận hàng</th>
                            <th class="d-none d-xl-table-cell">Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th class="d-none d-md-table-cell">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Hiển thị sản phẩm -->
                        @foreach ($listBills as $bill)
                        <tr>
                            <td>#{{$bill->id}}</td>
                            <td class="d-none d-xl-table-cell">{{ $bill->name}}</td>
                            <td class="d-none d-xl-table-cell">{{ $bill->email}}</td>
                            <td class="d-none d-xl-table-cell">{{ $bill->address}}</td>
                            <td class="d-none d-xl-table-cell">{{ $bill->phone_number}}</td>
                            <td>
                                @if ($bill->status == 0)
                                <a href="#" class="btn btn-success">chưa giao</a>
                                
                                @else
                                <a href="#" class="btn btn-danger">Đã giao</a>
                                @endif
                                
                                
                            </td>
                            <td class="d-none d-md-table-cell">
                                <a href="#" class="btn btn-primary">Hủy</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            {{$listBills->links('pagination::bootstrap-5')}}
        </div>
    </main>
@endsection
