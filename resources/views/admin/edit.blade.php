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
								<form role="form" action="{{ route('admin.update', $admin->id) }}" method="POST">
                                    @csrf
                                    @method('put')
									<div class="form-group">
										<label for="nama" class=" form-control-label">{{ __('Name') }}</label>
										<input type="text" id="nama" value="{{ $admin->nama }}"name="nama" class="form-control  @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="name" autofocus/>
									</div>
									<div class="form-group">
                                        <label for="email" class=" form-control-label">{{ __('E-Mail Address') }}</label>
                                        <input type="email" id="email" value="{{ $admin->email }}" name="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                        @error('email') 
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
								        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class=" form-control-label">{{ __('Password') }}</label>
                                        <div class="input-group">
                                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                                            <div class="input-group-addon">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </div>
                                        @error('password') 
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="c-password" class=" form-control-label">{{ __('Confirm Password') }}</label>
                                        <div class="input-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                                            <div class="input-group-addon">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-cog"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>  
                    @include('footer')  
                </div>
            </div>
        </div>
    </div>
</div>
@stop