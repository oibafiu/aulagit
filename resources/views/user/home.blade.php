@extends('user/dashboard')

@section('content')
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Minhas Despesas </h5>
        <a href="/entradas" class="btn btn-info">Relatório</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Recibos</h5>
        
        <a href="recibo" class="btn btn-info">Ver Recibos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Meus Documentos</h5>
        
        <a href="docs" class="btn btn-info">Documentos</a>
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





                   
              




      



@endsection
