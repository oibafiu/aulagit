@extends('user/dashboard')
@section('content')


<div class="row">

	
                    <div class="col-md-12">   
                        <br />
                        <h3 id="center"><b>Documentos Empresariais </b></h3>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        
                                        <th>Nome do Documento</th>
                                         <th id="center">Tipo</th>
                                          <th id="center">Enviado há</th>
                                           <th id="center">Baixar</th>
                                          
                                                      
                                                                    
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($files as $file)
                                   @if($file->documento == 'OUTROS')
                                    <tr>
                                        
                                        <td title="Nome">{{$file->nome}}</td>
                                        <td title="CNPJ">{{$file->documento}}</td>
                                        
                                        <td title="criado">{{ $file->created_at->diffForHumans() }}</td>
                                        <form action="{{ route('deletefile', $file->id) }}" method="post">
						@csrf
						@method('DELETE')
						<td><a href="{{ route('downloadfile', $file->id) }}" class="fa fa-download"></a></td>
						
					</form>


                                        
                                        @endif
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


