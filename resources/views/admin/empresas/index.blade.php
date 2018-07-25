@extends('admin/dashboard')

@section('content')

<div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                
                                                <th>Empresa</th>
                                                <th>CNPJ</th>
                                                <th>Endereço</th>
                                                <th>Telefone</th>
                                                <th>Atuação</th>
                                                <th>E-Mail</th>
                                                <th>Excluir</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                               
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->cnpj}}</td>
                                                <td>{{$user->endereco}}</td>
                                                <td>{{$user->telefone}}</td>
                                                <td>{{$user->atuacao}}</td>
                                                <td>{{$user->email}}</td>
                                    
                                                <form action="{{route('delete' , $user->id) }}" method="post">
                                                    @csrf
                        @method('DELETE')
                                                <td><button type="submit" class="fa fa-trash-o"></button></td>                                                  
                                                 </form>
                                                 
                                                 
                                                                                              
                                                 </form>
                                                 

                                        

                                            </tr>
                                        
                                            @endforeach
                                        </tbody>
                                    </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




@stop