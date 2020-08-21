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
								<form role="form" action="{{ route('calon.update',$wakil->id) }}" method="POST" enctype="multipart/form-data"> 
									@csrf
									@method('put')
									
                                    <div class="form-group">
                                        <input type="text" id="calon_id" name="calon_id" value="{{$ketua->id}}" class="form-control"/>
                                    </div>
									<div class="form-group">
										<label for="nama_ketua">NAMA WAKIL</label>
										<select class="form-control" name="nis_wakil" id="nis_wakil">
										@if (!empty($siswa_list))
											@foreach($siswa_list as $siswa)
											<option value="{{ $siswa->nrp }}"<?php echo $wakil->siswa->nama == $siswa->nama ? 'selected' : '' ?>>{{ $siswa->nama }}</option>
											@endforeach
										@endif
										</select>
									</div>  
                                    <div class="form-group">
                                        <label for="visi">Pasangan Ke</label>
                                        <input type="text" id="paslon_nomor" name="paslon_nomor" value="{{ $wakil->paslon_nomor }}" class="form-control"/>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="visi">VISI</label>
                                        <textarea type="text" id="visi" name="visi" value="{{ $wakil->visi }}" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="misi">MISI</label>
                                		<textarea type="text" id="misi" name="misi" value="{{ $wakil->misi }}" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="slogan">SLOGAN</label>
                                        <textarea type="text" id="slogan" name="slogan" value="{{ $wakil->slogan }}" class="form-control"></textarea>
                                    </div>
									<div class="form-group">
                                    <img width="50" height="50" src="{{asset( 'foto_paslon/' . $wakil->foto_paslon) }}">
                                    </div>
									<div class="form-group">
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
					</div>	
					
				</div>
				@include('footer')
			</div>
		</div>
	</div>
@stop