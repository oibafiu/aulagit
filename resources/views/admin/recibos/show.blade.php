@extends('admin/dashboard')

@section('content')

<div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                    
                                                <th>Recibo</th>
                                                <th>Data</th>
                                                <th>Valor</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                   @foreach($recibos as $recibo)
                                   
                                    <tr>
                                        <td id="center">{{$recibo->empresa}}</td>
                                        <td title="Nome">{{$recibo->data}}</td>
                                        <td title="CNPJ">{{$recibo->valor}}</td>
                                        <td><a href="{{ route('downloadrecibo', $recibo->id) }}" class="fa fa-download"></a></td>
                                            </tr>
                                        </tbody>
                                    </form>
                                     
                                      @endforeach
                                            
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




@stop