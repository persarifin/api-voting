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
				<form role="form" action="{{ url('ketua') }}" method="POST" > 
					@csrf
					<div class="form-group">
						<label for="nama_ketua">NAMA KETUA</label>
						<select class="form-control" name="nis_ketua" id="nis_ketua">
						@if (!empty($siswa_list))
							<option>-PILIH-</option>
							@foreach($siswa_list as $siswa)
							<option value="{{ $siswa->nrp }}">{{ $siswa->nama }}</option>
							@endforeach
						@endif
						</select>
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