 @extends('admin/dashboard')

@section('content')



<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('empresas') }}" method="post" enctype="multipart/form-data">
                        @csrf
                                <h4 class="card-title">Cadastrar Empresas</h4>
                                <form class="form p-t-20">
                                    <div class="form-group">
                                        <label for="name">Nome da Empresa</label>
                                        <div class="input-group">

                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="cnpj">CNPJ</label>
                                        <div class="input-group">
                                            <input id="cnpj" type="tel"  class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}" name="cnpj" value="{{ old('cnpj') }}" required autofocus>
                                           
                                            
                                            <div class="input-group-addon"><i class="ti-id-badge"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="endereco">Endereço</label>
                                        <div class="input-group">
                                            <input id="endereco" type="text" class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" value="{{ old('endereco') }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-home"></i></div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <div class="input-group">
                                            <input id="telefone" type="text" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{ old('telefone') }}" required autofocus data-inputmask="'mask' : '(999)99999-9999'">
                                            <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="atuacao">Atuação</label>
                                        <div class="input-group">
                                            <input id="atuacao" type="text" class="form-control{{ $errors->has('atuacao') ? ' is-invalid' : '' }}" name="atuacao" value="{{ old('atuacao') }}" required autofocus>
                                            <div class="input-group-addon"><i class="ti-truck"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <div class="input-group">
                                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <div class="input-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                        </div>
                                    </div>
                                    <select name="role">
   <option name="role" value="admin">Administrador</option>
   <option name="role" value="user">Cliente</option>
   
</select>  
 <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Cadastrar</button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Limpar</button>         
</div>
</div>
                                    <div class="text-left">
                                       
                                    </div>
                                </form>
                            </form>
                            </div>
                        </div>
                    </div>


                                            @stop
