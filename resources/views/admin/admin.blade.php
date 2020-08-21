@extends('layout') 
@section('content')
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="col-lg-12">
			<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
				<div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
					<div class="bg-overlay bg-overlay--blue"></div>
					<h3>
						<i class="fa fa-cog"></i>Admin</h3>
							<i class="zmdi zmdi-plus"></i>
						</a>
				</div>
				</br>
				<div class="card-body" style="font-size:12px;">
						@if ($message = Session::get('success'))
							<div class="alert alert-success">
								<p>{{ $message }}</p>
							</div>
						@endif
						@if (!empty($admin_list)) 
						<table id="example"class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>NAMA</th>
									<th>EMAIL</th>
									<th>FOTO</th>
								</tr>
								</thead>
								<tbody>
								<?php $i=0; ?>
								@foreach($admin_list as $admin)
								<?php $i++;?>
								<tr>
									<td>{{ $i }}</td>
									<td>{{ $admin->nama }}</td>
									<td>{{ $admin->email }}</td>
									<td><img width="50" height="50" src="{{asset( 'foto/' . $admin->foto) }}"></td></td>
								</tr>
								@endforeach 
								</tbody>
								</table>
									@else
								<p>
									data tidak ada
								</p>
									@endif
							</div>
							<div class="card-footer"></div>
						</div>
					@include('footer')
				</div>
			</div>
		</div>	 
	</div>
@stop