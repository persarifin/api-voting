@extends('layout')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="col-lg-12">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3><i class="fa fa-line-chart"></i>Jurusan</h3>
						<a href="{{route('jurusan.create')}}" type="submit" class="au-btn-plus">
							<i class="zmdi zmdi-plus"></i>
						</a>
				</div>
				</br>
				<div class="card-body" style="font-size:12px;">
				@if ($message = Session::get('success'))
					<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
						<span class="badge badge-pill badge-primary">Success</span>
						{{ $message }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				@if (!empty($jurusan_list))
				<table id="example"class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Jurusan</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $i=0;?>
						@foreach($jurusan_list as $jurusan)
						<?php $i++; ?>
						<tr>
							<td>{{ $i }}</td>
							<td>{{ $jurusan->kelas }}/ {{ $jurusan->cabang }} {{ $jurusan->jurusan }}</td>
                            <td>
								<form action="{{ route('jurusan.destroy',$jurusan->id)}}" method="POST">
								<a href="{{ route('jurusan.edit', $jurusan->id) }}" class="fa fa-edit btn-sm btn-success" value="Edit" ></a>
									@csrf
									@method('delete')
									<button type="submit" onclick="return confirm('yakin menghapus data?')" class="fa fa-trash btn-sm btn-primary"></button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@else
				<p>
					data tidak ada
				</p>
				@endif
				</div>
			<div class="card-footer"></div>
			</div>
			@include('footer')
		</div>
	</div>
</div>
@stop
