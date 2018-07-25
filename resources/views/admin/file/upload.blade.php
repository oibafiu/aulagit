@extends('admin/dashboard')

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-6 col-offset-md-4">
			<div class="card">
				<h5 class="card-header">Documentos</h5>
				<div class="card-body">
					
					<form action="{{ route('uploadfile') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input type="file" name="file[]" multiple>
							
							<select name="documento">
   								<option name="documento" value="DARF">Darf</option>
   								<option name="documento" value="FGTS">FGTS</option>
   								<option name="documento" value="GPS">GPS</option>
   								<option name="documento" value="FATURAS">BOLETOS</option>
   								<option name="documento" value="OUTROS">Outros</option>
							</select>

							

							<select  name="user_id">
								@foreach($users as $user)
   								<option name="user_id" value="{{$user->id}}">{{$user->name}}</option>
   								@endforeach
							</select>		
</div>
						<button type="submit" class="btn-rounded btn-success">Enviar</button>
						<a href="{{ route('viewfile') }}" class="btn-rounded btn-dark">Voltar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




@stop