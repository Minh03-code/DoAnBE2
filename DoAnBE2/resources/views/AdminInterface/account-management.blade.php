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
                        <!-- Hiển thị tất cả account -->
                        @foreach ($listAccount as $item)
                        <tr>
                            <td>#{{$item->id}}</td>
                            <td class="d-none d-xl-table-cell">{{$item->username}}</td>
                            @if ($item->profileAccount != null)
                            <td class="d-none d-xl-table-cell">{{$item->profileAccount->name}}</td>
                            @else
                            <td class="d-none d-xl-table-cell">Chua co ten khach hang</td>
                            @endif
                            @if ($item->status == '0')
                            <td>
                                <a href="{{route('admin.ChangeStatusAccountByAccountID', ['accountId' => $item->id])}}" class="btn btn-success">Bình thường</a>
                            </td>
                            @else
                            <td>
                                <a href="{{route('admin.ChangeStatusAccountByAccountID', ['accountId' => $item->id])}}" class="btn btn-danger">Khóa</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    {{ $listAccount->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
@endsection
