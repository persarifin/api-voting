@extends('layout') 
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="overview-wrap">
						<h2 class="title-1">Detail Calon OSIS</h2>
					</div>
					</br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<p class="text-center">KETUA</p>
						</div>	
						<div class="card-body ">
							<form action="">
								<div class="form-group text-center">
								<img width="200" height="200" src="{{asset( 'foto/' . $calon->ketua->siswa->foto) }}">
								</div>
								<div class="form-group">
									<label for="nama_ketua" style="font-size:12px; ">NIS </label>
									<input type="text" readonly value="{{$calon->ketua->siswa->nrp}}" class="form-control-file">
								</div> 
								<div class="form-group">
									<label for="nama_ketua "style="font-size:12px;" >NAMA </label>
									<input type="text" readonly value="{{$calon->ketua->siswa->nama}}" class="form-control-file">
								</div> 
								
								<div class="form-group">
									<label for="jurusan" style="font-size:12px; ">Kelas & Jurusan </label>
									<input type="text" readonly value="{{$calon->ketua->siswa->jurusan->kelas}} / {{$calon->ketua->siswa->jurusan->cabang}} {{$calon->ketua->siswa->jurusan->jurusan}}" class="form-control-file">
								</div> 
								<div class="form-group">
									<label for="jk" style="font-size:12px;">Jenis Kelamin</label>
									<input type="text" readonly value="{{$calon->ketua->siswa->jk}}" class="form-control-file">
								</div> 
								<div class="form-group">
									<label for="nama_ketua" style="font-size:12px;">Tanggal Lahir</label>
									<input type="text" readonly value="{{$calon->ketua->siswa->tgl_lahir}}" class="form-control-file">
								</div> 
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header"><p class="text-center">WAKIL</p></div>	
								<div class="card-body ">
								<form action="">
										<div class="form-group text-center">
										<img  width="200" height="200" src="{{asset( 'foto/' . $calon->ketua->siswa->foto) }}">
										</div>
										<div class="form-group">
											<label for="nama_ketua" style="font-size:12px;">NIS </label>
											<input type="text" readonly value="{{$calon->siswa->nrp}}" class="form-control-file">
										</div> 
										<div class="form-group">
											<label for="nama_ketua" style="font-size:12px;">NAMA </label>
											<input type="text" readonly value="{{$calon->siswa->nama}}" class="form-control-file">
										</div> 
										
										<div class="form-group">
											<label for="jurusan" style="font-size:12px;">Kelas & Jurusan </label>
											<input type="text" readonly value="{{$calon->siswa->jurusan->kelas}} / {{$calon->siswa->jurusan->cabang}} {{$calon->siswa->jurusan->jurusan}}" class="form-control-file">
										</div> 
										<div class="form-group">
											<label for="jk" style="font-size:12px;">Jenis Kelamin</label>
											<input type="text" readonly value="{{$calon->siswa->jk}}" class="form-control-file">
										</div> 
										<div class="form-group">
											<label for="nama_ketua" style="font-size:12px;">Tanggal Lahir</label>
											<input type="text" readonly value="{{$calon->siswa->tgl_lahir}}" class="form-control-file">
										</div> 
										</form>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<p class="text-center">VISI</p>
							</div>	
							<div class="card-body ">
								<p class="text-center">{{$calon->visi}}</p>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<p class="text-center">MISI</p>
							</div>	
							<div class="card-body ">
								<p class="text-center">{{$calon->misi}}</p>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<p class="text-center">Slogan</p>
							</div>	
							<div class="card-body">
								<p class="text-center">{{$calon->slogan}}</p>
							</div>
						</div>								
					</div>	
				</div>
				@include('footer')
			</div>
		</div>
	</div>
@stop