@extends('admin/dashboard')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Perfil</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                        <form enctype="multipart/form-data" action="/perfil" method="POST">
                     <div  align="center"> <img alt="User Pic" src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" id="avatar" class="img-circle img-responsive"> 
                
               <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">{{Auth::user()->name}}</h4></span>
              <span><p>{{Auth::user()->atuacao}}</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Nome:</div><div class="col-sm-7 col-xs-6 ">{{Auth::user()->name}}</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >CNPJ:</div><div class="col-sm-7"> {{Auth::user()->cnpj}}</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Endereço:</div><div class="col-sm-7">{{Auth::user()->endereco}}</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Telefone:</div><div class="col-sm-7">{{Auth::user()->telefone}}</div>


  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Atuação:</div><div class="col-sm-7">{{Auth::user()->atuacao}}</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>




            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#avatar').on('click', function() {
        $('#avatar').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
   </div>
</div>

@stop