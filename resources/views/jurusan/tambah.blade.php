@extends('layout')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
	<div class="col-lg-12">
		<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
			<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
				<div class="bg-overlay bg-overlay--blue"></div>
				<h3>
					<i class="fa fa-plus"></i>Add Jurusan</h3>
			</div>
			<div class="card-body ">
				<form role="form" action="{{ url('jurusan') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="kelas">Kelas</label>
						<select class="form-control" name="kelas" id="kelas">
						<option>-PILIH-</option>
						<option>X</option>
						<option>XI</option>
						<option>XII</option>
						</select>
					</div>
					<div class="form-group">
						<label for="cabang">Cabang</label>
						<input type="text" id="cabang" name="cabang" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<input type="text" id="jurusan" name="jurusan" class="form-control"/>
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
