<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unice</title>
       <!-- Horizontal Stepper -->
            <link rel="stylesheet" href="{{ asset('assets/css/style.bundle.css') }}">
            <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
            
            <!-- Bootstrap CDN Links -->
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
            <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
         <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           <nav class="navbar navbar-dark navbar-expand-sm bg-gray-500 fixed-top">
                <div class="container">
                <a href="/" class="navbar-brand">
                <i class="fas fa-blog"></i> &nbsp;
                <img src="{{ asset('assets/img/Unice-Education_Malaysia.png') }}" width="100px">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link active">
                            Home
                        </a>
                    </li>
                  <!--   <li class="nav-item">
                        <a href="" class="nav-link active">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            About
                        </a>
                    </li> -->
                     @if (Route::has('login'))
                      @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link active">
                           Dashboard
                        </a>
                    </li>
                     @else
                      <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link active">
                           Log in
                        </a>
                       
                    </li>

                         @if (Route::has('register'))
                          <li class="nav-item">
                            <a href="{{ route('student') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                     @endauth
                     @endif
                </ul>
                </div>



            </div>
        </nav>
            
          </div>
         <div class="container">
            <div class="row">
                <div class="col-8 offset-md-2">
                     <a href="{{url('/')}}"> <img src="{{asset('assets/img/Unice-Education_Malaysia.png')}}" width="100%" class="max-w-xl  h-30 fill-current text-gray-500 px-4" style="padding: 68px;"></a>
                </div>   
                <div class="col-8 offset-md-2">
                    <div class="card" style="margin-top: 100px;">
                        <div class="card-header py-4">
                            <h3>Check Application Status</h3>
                        </div>
                        <form method="GET" action="{{route('student.application')}}">
                            <div class="card-body">
                            <div class="col-sm-12">
                              <label for="lastName" class="form-label">Student Id<span style="color: red;">*</span></label>
                              <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Enter Student Id" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <label for="lastName" class="form-label"> Passport Number<span style="color:red;">*</span></label>
                              <input type="text" class="form-control" id="passport_number" placeholder="Enter Passport Number" name="passport_number" value="" required>
                              <div class="invalid-feedback">
                                Valid last name is required.
                              </div>
                            </div>
                            <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Track My Application</button>
                            
                        </div>
                            
                        </form>
                        
                        
                    </div>
                   
                    
                </div>
                
            </div>
             
         </div>

         <style type="text/css">
             
             .navbar .navbar-brand {
                  font-size: 30px;
                }
                .navbar .nav-item {
                  padding: 10px 20px;
                }
                .navbar .nav-link {
                  font-size: 20px;
                  margin-left: 10px;
                }
                .fa-bars {
                  color: #007bff;
                  font-size: 30px;
                }
         </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
