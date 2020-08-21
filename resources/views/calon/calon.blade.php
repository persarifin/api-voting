@extends('layout')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="col-lg-12">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3>
						<i class="fas fa-users"></i>Calon</h3>
						<a href="{{ route('ketua.create') }}" type="submit" class="au-btn-plus">
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
					@if (!empty($calon_list))
					<table id="example"class=" table table-bordered table-striped">
						<thead>
							<tr>
								<th>Pasangan</th>
								<th>NIS Ketua</th>
								<th>Nama Ketua</th>
								<th>NIS Wakil</th>
								<th>Nama Wakil</th>
								<th>Foto Paslon</th>
								<th>Admin</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($calon_list as $calon)
							<tr>
								<td>No {{ $calon->paslon_nomor  }}</td>
								<td>{{ $calon->ketua->nis_ketua }}</td>
								<td>{{ $calon->ketua->siswa->nama }}</td>
								<td>{{ $calon->nis_wakil }}</td>
								<td>{{ $calon->siswa->nama }}</td>
								<td><img width="50" height="50" src="{{asset('foto_paslon/' . $calon->foto_paslon) }}"></td></td>
								<td>{{ $calon->admin->nama }}</td>
								<td>
									
									<form action="{{ route('calon.destroy',$calon->ketua->id)}}" method="POST">
									<a href="{{ route('view', $calon->id) }}" class="fa fa-warning btn-sm btn-warning"></a>
										<a href="{{ route('ketua.edit', $calon->ketua->id) }}" class="fa fa-edit btn-sm btn-success" value="Edit" ></a>
										@csrf
										@method('delete')
										<button type="submit"  onclick="return confirm('yakin menghapus data?')" class="fa fa-trash btn-sm btn-primary"></button>
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
</div>
@stop
