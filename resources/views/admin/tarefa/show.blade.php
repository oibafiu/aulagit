@extends('admin/dashboard')

@section('content')


<div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tarefas</h4>
                                <div class="card-content">
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li>
                                                      
                                                        <label>
                                                          @foreach($tarefas as $tarefa)
                              <input type="checkbox"><i class="bg-primary"></i><span>{{$tarefa->nome}}</span>
                              <small>: {{$tarefa->descricao}}</small>
                              <a type="submit" href="{{route('destroy' , $tarefa->id) }}" class="ti-close"></a>
                            </label>
                                                    </li>
                                                    <li>
                                                    
                                                        <label>
                                                          @endforeach
                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @stop
