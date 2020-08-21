@extends('layout') 
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="col-lg-12">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3><i class="fa fa-plus"></i>Add Calon</h3>
				</div>
				<div class="card-body ">
				<form role="form" action="{{ url('calon') }}" method="POST" enctype="multipart/form-data"> 
					@csrf
                    <div class="form-group">
						<input type="text" id="calon_id" name="calon_id" value="{{$calons->id}}" class="form-control"/>
					</div>
					 
					<div class="form-group">
						<label for="nama_ketua">NAMA WAKIL</label>
						<select class="form-control" name="nis_wakil" id="nis_wakil">
						@if (!empty($siswa_list))
							<option>-PILIH-</option>
							@foreach($siswa_list as $siswa)
							<option value="{{ $siswa->nrp }}">{{ $siswa->nama }}</option>
							@endforeach
						@endif
						</select>
					</div>  
					
					<div class="form-group">
						<label for="visi">Pasangan Ke</label>
						<input type="text" id="paslon_nomor" name="paslon_nomor" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="visi">VISI</label>
						<textarea type="text" id="visi" name="visi" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="misi">MISI</label>
						<textarea type="text" id="misi" name="misi" class="form-control"></textarea>
					</div>
                    <div class="form-group">
						<label for="slogan">SLOGAN</label>
						<textarea type="text" id="slogan" name="slogan" class="form-control"></textarea>
					</div>
					
					<div class="form-group">
						<label for="foto_paslon">FOTO</label>
						<input type="file" id="foto_paslon" name="foto_paslon" class="form-control-file">
					</div>

				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Add
					</button>
				</div>
			</form>
		</div>
		@include('footer')
	</div>
</div>
@stop