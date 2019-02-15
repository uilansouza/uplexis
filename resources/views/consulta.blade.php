@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar artigo</div>
                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="" novalidate> 
						
                        <div class="form-group" >
							<label class="col-md-4 control-label">Digite o termo</label>
							<div class="col-md-8">
								<input type='text' placehoder="digite aqui" class="form-control" name="name">
                            </div>
						</div>
                        <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Buscar</button>
						</div>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection