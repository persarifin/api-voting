@include('css')
<div class="page-wrapper">
	<div class="page-content--bge5">
		<div class="container">
			<div class="login-wrap">
				<div class="login-content">
					<div class="login-logo">
						<span><a href="">ADMIN</a></span>
					</div>
					<div class="login-form">
						<form method="POST" action="{{ route('login') }}">
							 @csrf
							<div class="form-group row">
								<label for="email">{{ __('E-Mail Address') }}</label>
								<input type="email" id="email" class="au-input au-input--full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
								    <strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group row">
								<label for="password">{{ __('Password') }}</label>
								<input id="password" type="password" class="au-input au-input--full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
								    <strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<!-- <div class="login-checkbox">
								<label>
								<input type="checkbox" name="remember">Remember Me</label>
								<label>
								<a href="#">Forgotten Password?</a>
								</label>
                            </div> -->

							<button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">{{ __('Login') }}</button>
						</form>
						<!-- <div class="register-link">
							<p>
                                 Don't you have account?
                                 @if (Route::has('register'))
                                 <a class="btn btn-link" href="{{ route('register') }}">{{ __('register') }}</a>
								@endif
							</p>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('js')
