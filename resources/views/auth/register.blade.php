@extends('layouts.guest')

@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">REGISTRATE </h1>
                        </div>
                        <form class="user" action="{{ URL::to('/register') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" name="name" class="form-control form-control-user" id="32637234" placeholder="INGRESA TU NUMERO DE USUARIO">
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder=" INGRESA TU CORREO ELECTRONICO">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="password" type="password" class="form-control form-control-user" id="********" placeholder="Contraseña">
                                </div>
                                <div class="col-sm-6">
                                    <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repite tu contraseña">
                                </div>
                            </div>
                            <br><br/> 
                            
                            <input value="Registrate" type="submit" class="btn btn-primary btn-user btn-block" />

                            <br><br/> 
                            <br><br/> 
                            <br><br/> 
                            <br><br/> 
                            </form>



                            
                             <!--
                            <button type="submit" class="btn btn-primary btn-user btn-block">  </button>                   
                            
                           
                            <br><br/> 
                            <br><br/> 
                            <br><br/> 
                            <br><br/> 
                            </form>
                           
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> 
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> 
                            </a>
                        
                    -->
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password">Olvide mi contraseña</a>
                        </div>
                    
                        <div class="text-center">
                            <a class="small" href="login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection