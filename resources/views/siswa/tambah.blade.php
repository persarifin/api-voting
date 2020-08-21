@extends('layout')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
	<div class="col-lg-12">
		<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
			<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
				<div class="bg-overlay bg-overlay--blue"></div>
				<h3>
					<i class="fa fa-plus"></i>Add Mahasiswa</h3>
			</div>
			<div class="card-body ">
				<form role="form" action="{{ url('siswa') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nrp">NRP</label>
						<input type="text" id="nrp" name="nrp" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="nama">NAMA</label>
						<input type="text" id="nama" name="nama" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="jurusan_id">KELAS</label>
						<select class="form-control" name="jurusan_id" id="jurusan_id">
						@if (!empty($jurusan_list))
							<option>-PILIH-</option>
							@foreach($jurusan_list as $jurusan)
							<option value="{{ $jurusan->id }}">{{ $jurusan->kelas }} / {{ $jurusan->cabang }} {{ $jurusan->jurusan }} </option>
							@endforeach
							@else
							<option>Harap inputkan jurusan terlebih dahulu</option>
						@endif
						</select>
					</div>
					<div class="form-group">
						<label for="jk">JENIS KELAMIN</label>
						<div class="form-group">
							<label for="">
							<input type="radio" class="form-input" name="jk" id="jk" value="Pria"> Pria &emsp;</label>
							<label for="">
							<input type="radio" class="form-input" name="jk" id="jk"value="Wanita"> Wanita</label>
						</div>
					</div>
					<div class="form-group">
						<label for="tgl_lahir">TANGGAL LAHIR</label>
						<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"/>
					</div>
					<div class="form-group">
					<label for="nama">FOTO</label>
						<input type="file" id="foto" name="foto" class="form-control-file">
					</div>
				</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary btn-sm">
					<i class="fa fa-cog"></i> Add
				</button>
			</div>
		</form>
	</div>
	@include('footer')
</div>
</div>
@stop
