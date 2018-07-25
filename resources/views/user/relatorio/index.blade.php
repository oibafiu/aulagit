@extends('admin/dashboard')
@section('content')


<div class="row">

	
                    <div class="col-md-12">   
                        <br />
                        <h3 id="center"><b>Relatório Mensal </b></h3>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Mês</th>
                                         <th id="center">Valor Entrada</th>
                                          <th id="center">Valor Saída</th>
                                          <th id="center">Total</th>
                                           <th id="center">Gerar</th>
                                          
                                                      
                                                                    
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($files as $file)
                                    <tr>
                                        <td id="center">{{$file->id}}</td>
                                        <td title="Nome">{{$file->nome}}</td>
                                        <td title="CNPJ">{{$file->documento}}</td>
                                        <td title="telefone">{{$file->user_id}}</td>
                                        <td title="criado">{{ $file->created_at->diffForHumans() }}</td>
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


