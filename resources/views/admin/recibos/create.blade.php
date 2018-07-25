 @extends('admin/dashboard')

@section('content')



<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('recibo') }}" method="post" enctype="multipart/form-data">
                        @csrf
                                <h4 class="card-title">Recibos</h4>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="empresa">Recebemos de:</label>
                                        <select  name="empresa">
                                @foreach($users as $user)
                                <option name="empresa" value="{{$user->name}}">{{$user->name}}</option>
                                @endforeach
                            </select>

                                    </div>
                                    <div class="form-group">
                                            <label class="col-lg-4 col-form-label" for="valor"> O Valor <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="valor" name="valor" placeholder="$00.00">
                                            </div>
                                   
                                    <div class="form-group">
                                            <label class="col-lg-4 col-form-label" for="data">No dia <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="data" name="data" placeholder="dd/mm/yyyy">
                                            </div>
                                             </div>
                                     <label for="referente">Referente a:</label>
                                        <input type="text" name="referente" 
                                       class="form-control" 
                                       required>
                            </div>


                                    </div>
                                    
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Gerar</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Limpar</button>
                                    </div>
                                </form>
                            </form>
                            </div>
                        </div>
                    </div>


                                            @stop
