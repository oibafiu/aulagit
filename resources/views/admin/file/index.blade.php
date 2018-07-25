@extends('admin/dashboard')
@section('content')


<div class="row">

	
                    <div class="col-md-12">   
                        <br />
                        <h3 id="center"><b>Documentos Enviados </b></h3>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    
                                        <th>Nome do Documento</th>
                                         <th id="center">Tipo</th>
                                          <th id="center">Cliente</th>
                                          <th id="center">Enviado há</th>
                                           <th id="center">Exluir/Baixar</th>
                                          
                                                      
                                                                    
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($files as $file)
                                    <tr>
                                        
                                        <td title="Nome">{{$file->nome}}</td>
                                        <td title="Documento">{{$file->documento}}</td>
                                        <td title="Cliente">{{$file->user_id}}</td>
                                        <td title="Criado Em:">{{ $file->created_at->diffForHumans() }}</td>
                                        <form action="{{ route('deletefile', $file->id) }}" method="post">
						@csrf
						@method('DELETE')
						<td><button type="submit" class="fa fa-trash-o"></button><a href="{{ route('downloadfile', $file->id) }}" class="fa fa-download"></a></td>
						
					</form>


                                        
                                        
                                      @endforeach
                                            
                                        
                                                     
                                                            
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
            </body>
            </html>



@endsection


