@extends('layout')
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Update data</div>
							<div class="card-body ">
								<form role="form" action="{{ route('siswa.update', $siswa->nrp) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
									<div class="form-group">
										<label for="nama">NAMA</label>
										<input type="text" id="nama" value="{{ $siswa->nama }}"name="nama" class="form-control"/>
									</div>
									<div class="form-group">
                                        <label for="jurusan_id">JURUSAN</label>
                                        <select class="form-control" name="jurusan_id" id="jurusan_id">
                                            @if (!empty($jurusan_list))
                                            @foreach($jurusan_list as $jurusan)
                                            <option value="{{ $jurusan->id }}" <?php echo $siswa->jurusan->jurusan == $jurusan->jurusan ? 'selected' : '' ?>>{{ $jurusan->jurusan }}</option>
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">JENIS KELAMIN</label>
                                        <div class="form-group">
                                            <label for="">
                                            <input type="radio" id="jk" name="jk" value="Pria" class="form-input" {{ ($siswa->jk == 'Pria') ? 'checked' : '' }} > Pria &emsp;</label>
                                            <label for="">
                                            <input type="radio" id="jk" name="jk" value="Wanita" class="form-input" {{ ($siswa->jk == 'Wanita') ? 'checked' : '' }} > Wanita</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <img width="50" height="50" src="{{asset( 'foto/' . $siswa->foto) }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" id="foto" name="foto" class="form-control-file">
                                    </div>
                                </div>
                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @include('footer')
            </div>
        </div>
    </div>
</div>
@stop
