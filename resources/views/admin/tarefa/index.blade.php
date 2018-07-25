 @extends('admin/dashboard')

@section('content')



<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('tarefas') }}" method="post" enctype="multipart/form-data">
                        @csrf
                                <h4 class="card-title">Tarefas</h4>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="nome">Título</label>
                                        <input type="text" name="nome" 
                                       class="form-control" 
                                       required>
                            </div>
                                        <div class="input-group">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <div class="input-group">
                                            <input type="text" name="descricao" 
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
