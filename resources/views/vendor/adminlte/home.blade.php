@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table class="table">
						  <thead>
						  	
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Nombre</th>
						      <th scope="col">email</th>
						      <th scope="col">Site</th>
						      <th scope="col">logo</th>
						      <th scope="col">Acción</th>
						    </tr>
						    
						  </thead>
						  <tbody>
						  	
						    <tr>
						      <th scope="row">1</th>
						      <td>blackhost.S.A.S</td>
						      <td>soporte@blackhost.</td>
						      <td>blackhost.com.co</td>
						      <td style="background: #000;"><img src="https://test.midsoluciones.com/wp-content/uploads/2019/04/logoblack@2x.png" alt="" style="max-width: 100px;height: 100px;width: 100%;"></td>
						       <td style="width: 30px;">
						      	<button class="btn btn-primary" type="submit"><i class="material-icons">remove_red_eye</i></button></td>
						      <td style="width: 30px;">
						      	<button class="btn btn-danger" type="submit"><i class="material-icons">delete</i></button>
						      </td>
						      <td style="width: 30px;"><button class="btn btn-warning" type="submit"><i class="material-icons">create</i></button></td>
						    </tr>
						    <tr>
						   
						      
						  </tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
