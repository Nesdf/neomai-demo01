@extends('layouts.app')

@section('guia')
	<li>
		<i class="ace-icon fa fa-child"></i>
		<a href="#">Personal</a>
	</li>
@stop

@section('content')
    <div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			
			<div class="row">
				<div class="col-xs-12">
					<h3 class="header smaller lighter blue">Permisos de acceso - Macias Group</h3>
					<div class="alert alert-info">
						<i class="glyphicon glyphicon-info-sign"></i>
						Seleccionar a que sección puede ingresará el usuario.
					</div>

					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
						@if (Session::has('message'))
							
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>
								{{  Session::get('message') }}
								<br />
							</div>
							
						@endif
					</div>
					<div class="table-header">
						Agregar Permisos
					</div>
					<div class="col-md-12">
						<div id="resp_message"></div>
					</div>
					<div class="col-md-12">
						<br>
						<div class="alert alert-warning">
							<table>
								<tr>
									<th><span style="text-decoration: underline;">Nombre:</span> {{$empleado[0]->name}} {{$empleado[0]->ap_paterno}} {{$empleado[0]->ap_materno}}</th>
								</tr>
								<tr>
									<th><span style="text-decoration: underline;">Puesto:</span> {{$empleado[0]->job}}</th>
								</tr>
							</table>
						</div>
						<div class="col-md-12">
							<h4><strong>Configuración del sistema</strong></h4>
							<label class="alert alert-info col-md-12">
								INDICACIONES:
								<ul>
									<li>
										Al activar la casilla permites que el usuario pueda realizar la actividad con su usuario.
									</li>
									<li>
										Los campos de color <span style="background-color: blue; color: white;">azul</span> son clave dentro del sistema.
									</li>
								</ul>
							</label><br><br>
						</div>
						{{ csrf_field() }}

						<!-- -->
						<div style="background-color: rgba(150, 150, 150, 0.1); padding: 2%;">
							<h4><strong>Administrar Puestos de Trabajo</strong></h4>
							<p>
								<input type="checkbox" name="mgpuestos"  @if( isset($urlArray['mgpuestos']) ) checked @endif >&nbsp;
								<label>Dashboard Puesto de Trabajo</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="add_puesto-"  @if( isset($urlArray['add_puesto']) ) checked @endif >&nbsp;
								<label>Agregar Puesto de Trabajo</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="edit_puesto-update_puesto"  @if( isset($urlArray['edit_puesto']) ) checked @endif >&nbsp;
								<label>Editar Puesto de Trabajo</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="delete_puesto"  @if( isset($urlArray['delete_puesto']) ) checked @endif >&nbsp;
								<label>Eliminar Puesto de Trabajo</label>
							</p>
						</div>
						<hr>
						<!-- -->
						<div style="background-color: rgba(150, 150, 150, 0.1); padding: 2%;">
							<h4><strong>Administrar Personal</strong></h4>
							<p>
								<input type="checkbox" name="mgpersonal"  @if( isset($urlArray['mgpersonal']) ) checked @endif >&nbsp;
								<label>Dashboard Personal</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="add_personal"  @if( isset($urlArray['add_personal']) ) checked @endif >&nbsp;
								<label>Agregar Personal</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="edit_personal-update_personal"  @if( isset($urlArray['edit_personal']) ) checked @endif >&nbsp;
								<label>Editar Personal</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="delete_personal"  @if( isset($urlArray['delete_personal']) ) checked @endif >&nbsp;
								<label>Eliminar Personal</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="permisos_acceso"  @if( isset($urlArray['permisos_acceso']) ) checked @endif >&nbsp;
								<label>Permisos de acceso</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="add_permisos-permisos_acceso"  @if( isset($urlArray['add_permisos']) ) checked @endif >&nbsp;
								<label>Agregar Permisos</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							</p>
						</div>
						<hr>
						<!-- -->
						<h4><strong>Administrar Clientes</strong></h4>
						<p>
							<input type="checkbox" name="mgclientes-list_countries"  @if( isset($urlArray['mgclientes']) ) checked @endif >&nbsp;
							<label>Dashboard Cliente</label>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							<input type="checkbox" name="add_cliente"  @if( isset($urlArray['add_cliente']) ) checked @endif >&nbsp;
							<label>Agregar Cliente</label>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							<input type="checkbox" name="edit_clientes-update_cliente"  @if( isset($urlArray['edit_cliente']) ) checked @endif >&nbsp;
							<label>Editar Cliente</label>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							<input type="checkbox" name="delete_cliente"  @if( isset($urlArray['delete_cliente']) ) checked @endif >&nbsp;
							<label>Eliminar Cliente</label>
							&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						</p>
						<hr>
						<!-- -->
						<div style="background-color: rgba(150, 150, 150, 0.1); padding: 2%;">
							<h4><strong>Administrar Proyectos</h4>
							<p>
								<input type="checkbox" name="mgproyectos"   @if( isset($urlArray['mgproyectos']) ) checked @endif >&nbsp;
								<label>Dashboard Proyectos</label></label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="add_proyecto"   @if( isset($urlArray['add_proyecto']) ) checked @endif >&nbsp;
								<label>Agregar Proyecto</label></label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="edit_proyecto-update_proyecto"   @if( isset($urlArray['edit_proyecto']) ) checked @endif >&nbsp;
								<label>Editar Proyecto</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="delete_proyecto"   @if( isset($urlArray['delete_proyecto']) ) checked @endif >&nbsp;
								<label>Eliminar Proyecto</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							</p>
						</div>
						<hr>
						<!-- -->
						<div style="background-color: rgba(150, 150, 150, 0.1); padding: 2%;">
							<h4><strong>Administrar Calificación del Material </strong></h4>
							<p >
								<input type="checkbox" name="add_calificar_material" @if( isset($urlArray['add_calificar_material']) ) checked @endif >&nbsp;
								<label>Calificar Material</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="show_calificar_material" @if( isset($urlArray['show_calificar_material']) ) checked @endif >&nbsp;
								<label>Consultar Calificación de Material</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="checkbox" name="edit_calificar_material-update_calificar_material" @if( isset($urlArray['edit_calificar_material']) ) checked @endif >&nbsp;
								<label>Editar Calificación de Material</label>
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							</p>
						</div>
					</div>

				</div>
			</div>		

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
@stop

@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('input').on('click', function(){

				var _token = $('input[name]').val();
				var id = "{{$id}}";
				var name = $(this).attr('name');
				var status = "";

				if($(this).prop('checked')){
					status = 'on';
				} else {
					status = 'off';
				}

				$.ajax({
					url: "{{ url('mgpersonal/save-permisos') }}",
					type: "POST",
					data: {'id':id, '_token':_token, 'name': name, 'status': status},
					success: function( data ){
						if(data.msg == 'success'){
							$('#resp_message').html('<div class="alert alert-success" style="text-align: center;">Exito. Permiso modificado.</div>');
							//$('#resp_message').html().delay(100);
						}
					},
				});
			});
		});
	</script>
@stop


