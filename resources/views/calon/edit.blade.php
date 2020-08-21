@extends('layout') 
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Edit data</div>	
							<div class="card-body ">
								<form role="form" action="{{ route('ketua.update',$ketua->id) }}" method="POST" enctype="multipart/form-data"> 
									@csrf
									@method('put')
									
									<div class="form-group">
										<label for="nama_ketua">NAMA KETUA</label>
										<select class="form-control" name="nis_ketua" id="nis_ketua">
										@if (!empty($siswa_list))
											@foreach($siswa_list as $siswa)
											<option value="{{ $siswa->nrp }}"<?php echo $ketua->siswa->nama == $siswa->nama ? 'selected' : '' ?>>
											{{ $siswa->nama }}</option>
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
					</div>	
					
				</div>
				@include('footer')
			</div>
		</div>
	</div>
@stop