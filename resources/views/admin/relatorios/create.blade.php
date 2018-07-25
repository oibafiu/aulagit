 @extends('admin/dashboard')

@section('content')



<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('financas') }}" method="post" enctype="multipart/form-data">
                        @csrf
                                <h4 class="card-title">Relatórios</h4>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="mes">Mês:</label>
                                        <select  name="mes">
                            
                                <option name="mes" value="Janeiro">Janeiro</option>
                                <option name="mes" value="Fevereiro">Fevereiro</option>
                                <option name="mes" value="Março">Março</option>
                                <option name="mes" value="Abril">Abril</option>
                                <option name="mes" value="Maio">Maio</option>
                                <option name="mes" value="Junho">Junho</option>
                                <option name="mes" value="Julho">Julho</option>
                                <option name="mes" value="Agosto">Agosto</option>
                                <option name="mes" value="Setembro">Setembro</option>
                                <option name="mes" value="Outubto">Outubro</option>
                                <option name="mes" value="Novembro">Novembro</option>
                                <option name="mes" value="Dezembro">Dezembro</option>

                                
                            </select>
                            </div>
                                        <div class="input-group">
                                        </div>
                                        <label for="cliente">Empresa</label>
                                        <div class="input-group">
                                            <select  name="cliente">
                                @foreach($users as $user)
                                <option name="cliente" value="{{$user->name}}">{{$user->name}}</option>
                                @endforeach
                            </select>   
                                        </div>

                                    
                                    <div class="form-group">
                                        <label for="valor_entrada">Valor Entrada</label>
                                        <div class="input-group">
                                            <input type="text" name="valor_entrada" 
                                       class="form-control" 
                                       required>
                                            
                                            <div class="input-group-addon"><i class="ti-id-badge"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="valor_saida">Valor Saída</label>
                                        <div class="input-group">
                                            <input type="text" name="valor_saida" 
                                       class="form-control" 
                                       required>
                                            
                                            <div class="input-group-addon"><i class="ti-id-badge"></i></div>
                                        </div>
                                    </div>

                                    
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Cadastrar</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Limpar</button>
                                    </div>
                                </form>
                            </form>
                            </div>
                        </div>
                    </div>


                                            @stop
