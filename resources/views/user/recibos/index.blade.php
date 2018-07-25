@extends('user/dashboard')
@section('content')


<div class="row">

	
                    <div class="col-md-12">   
                        <br />
                        <h3 id="center"><b>Meus Recibos</b></h3>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                            
                                        <th>Referente</th>
                                         <th id="center">Valor</th>
                                          <th id="center">Data</th>
                                           <th id="center">Gerar</th>
                                          
                                                      
                                                                    
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($recibos as $recibo)
                                   @if(auth()->user()->name == $recibo->empresa)
                                    <tr>
                                        <td id="center">{{$recibo->referente}}</td>
                                        <td title="Valor">{{$recibo->valor}}</td>
                                        <td title="Data">{{$recibo->data}}</td>
                
                                       </td>
						<td><a href="{{ route('downloadrecibo', $recibo->id) }}" class="fa fa-download"></a></td>
						
					</form>


                                        
                                        @endif
                                      @endforeach
                                            
                                        
                                                     
                                                            
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
            </body>
            </html>



@endsection


