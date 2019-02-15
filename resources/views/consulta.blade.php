@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar artigo</div>
                <div class="panel-body">
                <form class="form-horizontal col-md-10" role="form" method="GET" action="{{ url('/pesquisar') }}"> 
                    						
                        <div class="form-group" >
							<label class="col-md-4 control-label">Digite o termo</label>
							<div class="col-md-8">
								<input type='text' placehoder="digite aqui" class="form-control" name="consulta">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-md-10 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Capturar</button>
						</div>
				</form>
                <div class="container center">
                    <div class="row center">
                    @if(count($errors)>0)    
                        <div class=" col-md-8 alert alert-danger">
                                <ul>                
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                 </ul>
                         </div>
                     @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
