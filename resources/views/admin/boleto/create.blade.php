 @extends('admin/dashboard')

@section('content')



<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('boletos') }}" method="post" enctype="multipart/form-data">
                        @csrf
                                <h4 class="card-title">Gerar Recibo</h4>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="name">Empresa</label>
                                        <div class="input-group">
                                            <select  name="beneficiario">
                                @foreach($users as $user)
                                <option name="beneficiario" value="{{$user->name}}">{{$user->name}}</option>
                                @endforeach
                            </select>   
                                        </div>

                                    </div>
                                     <div class="form-group">
                                    <label for="refente">Referente há</label>
                                        <div class="input-group">
                                        <select name="referente">
                                <option name="referente" value="Honorário Contábeis">Honorários Contábeis</option>
                                <option name="referente" value="Taxas Pagas">Taxas Pagas</option>
                                
                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-lg-4 col-form-label" for="emissao">No dia <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="emissao" name="emissao" placeholder="dd/mm/yyyy">
                                            </div>


                                    </div>
                                    <div class="form-group">
                                       <label for="pagador">Recebemos de:</label>
                                        <div class="input-group">
                                            <select  name="pagador">
                                @foreach($users as $user)
                                <option name="pagador" value="{{$user->name}}">{{$user->name}}</option>
                                @endforeach
                            </select>   
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                            <label class="col-lg-4 col-form-label" for="valor"> O Valor <span class="text-danger"></span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="valor" name="valor" placeholder="$00.00">
                                            </div>
                                    </div>
                                    
   
      
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
