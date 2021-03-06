@extends('adminlte::page')

@section('title', 'Tarefas')

@section('content_header')
    <h1>Projetos</h1>

    <ol class='breadcrumb'>
    	<li><a ref=""></a></li>
    	<li><a ref=""></a></li>
    	<li><a ref=""></a></li>
    </ol>
@stop

@section('content')
	<div class="box box-solid box-info">
		<div class="box-header" with-border>
			<h3>Selecione o Arquivo de Projetos a ser Importado</h3>
		</div>
		<div class="box-body">
			<form method="POST" action="{{ route('importar.save_projetos')}}" enctype="multipart/form-data">
					{!! csrf_field() !!}
				<div class="form-row">
					@include('admin.includes.alerts')
						<div class="form-group">
						<div class="form-row">
							<label for="file">Arquivo de Projetos Anexo:</label>
							<input type="file" name="arquivo" id="file">
							<input type="hidden" value="{{ csrf_token() }}" name="_token">
						</div>
						<div class="form-group">
						<button type="submit" class="btn btn-success">Enviar</button> 
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop