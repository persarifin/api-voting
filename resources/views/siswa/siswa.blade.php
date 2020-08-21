@extends('layout')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="col-lg-12">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3>
						<i class="fas fa-graduation-cap"></i>Siswa</h3>
						<a href="{{ route('siswa.create') }}" type="submit" class="au-btn-plus">
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
				@if (!empty($siswa_list))
				<table id="example"class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>NRP</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Jurusan</th>
							<th>Tanggal Lahir</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $i=0;?>
						@foreach($siswa_list as $siswa)
						<?php $i++; ?>
						<tr>
							<td>{{ $i }}</td>
							<td>{{ $siswa->nrp }}</td>
							<td>{{ $siswa->nama }}</td>
							<td>{{ $siswa->jk }}</td>
							<td>{{ $siswa->jurusan->kelas }}{{ $siswa->jurusan->kelas }} / {{ $siswa->jurusan->cabang }} {{ $siswa->jurusan->jurusan }}</td>
							<td>{{ $siswa->tgl_lahir }}</td>
							<td><img width="50" height="50" src="{{asset( 'foto/' . $siswa->foto) }}"></td>
							<td>
								<form action="{{ route('siswa.destroy',$siswa->nrp)}}" method="POST">
									<a href="{{ route('siswa.edit', $siswa->nrp) }}" class="fa fa-edit btn-sm btn-success"></a>
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
