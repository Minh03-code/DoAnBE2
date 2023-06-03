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
					@foreach ($listProduct as $item)
					<tr>
						<td>#{{$item->id}}</td>
						<td class="d-none d-xl-table-cell">{{$item->name}}</td>
						<td class="d-none d-xl-table-cell">{{$item->price}}</td>
						@if ($item->status == 0)
						<td>
							<a href="{{route('admin.changeStt',['id'=>$item->id])}}" class="btn btn-success">Bình thường</a>
						</td>
						@else
						<td>
							<a href="{{route('admin.changeStt',['id'=>$item->id])}}" class="btn btn-danger">Khóa</a>
						</td>
						@endif
						<td class="d-none d-md-table-cell">
							<a href="{{ route('admin.edit-product',['id'=>$item->id]) }}" class="btn btn-primary">Chỉnh sửa</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
				{{$listProduct->links('pagination::bootstrap-5') }}
		</div>
	</div>
</main>
@endsection