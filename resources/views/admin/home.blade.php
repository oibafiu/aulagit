@extends('admin/dashboard')

@section('content')
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Empresas Cadastradas: {{$todas}}</h5>
        <a href="/cadastrar" class="btn btn-info">Cadastrar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Documentos Enviados: {{$docs}}</h5>
        
        <a href="upload" class="btn btn-info">Enviar Documentos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Relatórios</h5>
        
        <a href="relatorios" class="btn btn-info">Gerar Relatórios</a>
      </div>
    </div>
  </div>
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Recibos emitidos</h5>
        
        <a href="todos" class="btn btn-info">Ver recibos</a>
      </div>
    </div>
  </div>
   <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="calendar"></div>
                            </div>
                        </div>
                    </div>



<div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lista de compromissos!</h4>
                                <div class="card-content">
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li>
                                                      
                                                        <label>
                                                          @foreach($tarefas as $tarefa)
                              <input type="checkbox"><i class="bg-warning"></i><span>{{$tarefa->nome}}</span>
                              <small>: {{$tarefa->descricao}}</small>
                              
                            
                            </label>
                                                    </li>
                                                    <li>
                                                    
                                                        <label>
                                                          @endforeach
                              
                                    </div>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
Criar
</button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Button trigger modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compromissos:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('tarefas') }}" method="post" enctype="multipart/form-data">
                        @csrf
      <div class="modal-body">
         <form class="form p-t-20">
          <div class="form-group">
            <label for="nome" class="col-form-label">Título:</label>
            <input type="text" class="form-control" name="nome">
          </div>
          <div class="form-group">
            <label for="descricao" class="col-form-label">Descrição:</label>
            <textarea class="form-control" name="descricao"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success waves-effect waves-light">Criar</button>
        <button type="reset" class="btn btn-inverse waves-effect waves-light">Limpar</button>
      </div>
    </div>
  </div>
</form>
</form>
</div>

                   
              




      



@endsection
