@extends('AdminInterface/main')

@section('content')
<main class="content">
	<div class="container-fluid p-0">


		<div class="card flex-fill">
			<div class="card-header">
				<div class="row">
					<div class="col-md-3">
						<h5 class="card-title mb-0">Quản lí sản phẩm</h5>
					</div>
					<div class="col-md-9">
						<a href="{{ route('admin.add-product') }}" class="btn btn-primary">Thêm</a>
					</div>
				</div>
			</div>
			<table class="table table-hover my-0">
				<thead>
					<tr>
						<th>ID</th>
						<th class="d-none d-xl-table-cell">Tên</th>
						<th class="d-none d-xl-table-cell">Giá</th>
						<th>Trang thái</th>
						<th class="d-none d-md-table-cell">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<!-- Hiển thị sản phẩm -->
					<tr>
						<td>#1111</td>
						<td class="d-none d-xl-table-cell">Nguyễn Tấn Dũng</td>
						<td class="d-none d-xl-table-cell">1000 đồng</td>
						<td>
							<a href="#" class="btn btn-danger">Khóa</a>
							<a href="#" class="btn btn-success">Mở khóa</a>
						</td>
						<td class="d-none d-md-table-cell">
							<a href="{{ route('admin.edit-product') }}" class="btn btn-primary">Chỉnh sửa</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>


	</div>
</main>
@endsection