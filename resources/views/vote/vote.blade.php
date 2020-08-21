@extends('layout')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="col-lg-12">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3>
						<i class="fa fa-tasks"></i>Progress Voting</h3>
				</div>
				</br>
                <div class="content" style="margin-bottom: 10px;">
                    <div class="col-lg-12">
					@if($up->count() ==1)
					<form action="{{route('up.destroy',[1])}}" method="POST">
						@csrf
						@method('delete')
						<a href="{{url('delete')}}" class=" btn btn-sm btn-danger"> Hapus Riwayat</a>
							<button type="submit" class=" btn btn-sm btn-warning"> Close Vote</button>
							<span style="color: grey; font-size: 10px;">Status : Voting Dibuka</span>
						</form>
						
					@else
					<form action="{{url('up')}}" method="POST">
						@csrf
						<a href="{{url('delete')}}" class=" btn btn-sm btn-danger"> Hapus Riwayat</a>
							<input type="hidden" name="status" value="1"/>
							<button type="submit" class=" btn btn-sm btn-success"> Open Vote</button>
							<span style="color: grey; font-size: 10px;">Status : Voting Ditutup</span>
						</form>
						
					@endif

                </div>
				<div class="card-body" style="font-size:12px;">
				@if (!empty($vote_list))
				<table id="example"class="table table-bordered table-striped" >
					<thead>
						<tr>
							<th>No</th>
							<th>Pasangan Dipilih</th>
							<th>Nama Pemilih</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>Kelas & Jurusan</th>
						</tr>
						</thead>
						<tbody>
						<?php $i = 0; ?>
						@foreach($vote_list as $vote)
						<?php $i++; ?>
						<tr>
							<td>{{$i}}</td>
							<td>No {{ $vote->calon->paslon_nomor }}</td>
							<td>{{ $vote->siswa->nama }}</td>
							<td>{{ $vote->siswa->jk }}</td>
							<td>{{ $vote->siswa->tgl_lahir }}</td>
							<td>{{ $vote->siswa->jurusan->kelas }} / {{ $vote->siswa->jurusan->cabang }} {{ $vote->siswa->jurusan->jurusan }}</td>
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
		</div>
		</div>
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3>
						<i class="fa fa-tasks"></i>Siswa Belum Voting</h3>

				</div>
				<div class="card-body" style="font-size:12px;">
				@if (!empty($notvote))
				<table id="example"class="table table-bordered table-striped" >
					<thead>
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
					@foreach($notvote as $siswa)
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
								<a href="{{ route('siswa.edit', $siswa->nrp) }}" class="fa fa-edit btn-sm btn-success" value="Edit" ></a>
								@csrf
								@method('delete')
								<button type="submit" onclick="return confirm('yakin menghapus data?')" class="fa fa-trash btn-sm btn-primary"></button>
							</form>
						</td>
						@endforeach

					</tbody>
				</table>
				@else
				<p>
					data tidak ada
				</p>
				@endif
				</div>
			</div>
			@include('footer')
		</div>
	</div>
</div>
@stop
