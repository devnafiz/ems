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
           <nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
                <div class="container">
                <a href="/" class="navbar-brand">
                <i class="fas fa-blog"></i> &nbsp;
                <img src="{{ asset('assets/img/Unice_Education_Logo.jpg') }}" width="100px">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            About
                        </a>
                    </li>
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
                @if($searchResult)
                <div class="col-10 offset-md-1">
                    <div class="card" style="margin-top: 100px;">
                        <div class="card-header py-4">
                            <h3>Application Status</h3>
                        </div>
                        <div class="card-body">
                            <div class="status-border">
                                <div class="row">

                                    <div class="col-md-4">


                                        <div class="progress blue">
                                            <span class="progress-left">
                                              <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">90%</div>
                                        </div>
        
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Summary</h3>
                                        <hr>
                                        <h5>Full Name: Hasan Imtiaz</h5>
                                        <h5>Student Id: ST0012</h5>
                                        <h5>Application Number: 12</h5>
                                        <h5>Application Type: New</h5>
                                        <h5>Application Status: EMGS Approval Letter</h5>

                                        <p>As per the announcement from the Malaysian Government on the transition to the endemic phase on 1 April 2022, the Travel Authorisation Letter is no longer part of the requirements for International Students to enter Malaysia.</p>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                       
                        
                    </div>

                    <div class="card" style="margin-top: 100px;">
                        <div class="card-header py-4">
                          
                        </div>
                        <div class="card-body">
                            <div class="status-border">
                                <div class="row">

                                    <div class="col-md-7">

                                        <div id="accordion1" class="status-exp">
                                            <h3>
                                                <strong>What does the percentage mean?
                                                </strong>
                                            </h3>
                                            <div>
                                                <table>
                                                    <tbody><tr>
                                                        <td style="padding:10px;  border-radius:5px; vertical-align:middle; color:white; background-color:#098136; border-right:none; text-align:center;">
                                                            <h2>
                                                                70%                        </h2>
                                                        </td>
                                                        <td style="padding:10px;border-radius: 8px; vertical-align:middle; background-color:#ededed;border-left:none;">
                                                            <p>
                                                                <b>Congratulations, your VAL is ready for download. </b>
                                    <br><br>
                                    <b>Important notes:</b>
                                    <br><br>
                                    <b>Preparing to travel to Malaysia; </b>
                                    <br>
                                    1- Your VAL is ready for download.  Please make sure that your VAL is approved  and printed before traveling to Malaysia.
                                    <br>
                                    2- You MUST notify your institution of your travel details and arrival dates. Please ensure that your university representative is ready to receive you because you will not be able to go through Immigration without your institution representative being ready at the airport. 
                                    <br> 
                                    3- If you need a visa to enter Malaysia, you will be required to obtain a Single Entry Visa (SEV) from the Malaysian Embassy before traveling to Malaysia. Please contact the Malaysian Embassy to know what documents you will need for the SEV.
                                    <br>
                                    4- The VAL is only valid for six (6) months. Please make sure you have travelled to Malaysia within this period.
                                    <br><br>
                                    <b>Upon arrival to Malaysia;</b>
                                    <br>
                                    1- Present your VAL/ SEV to the Immigration desk upon arrival at the point of entry to get your entry stamp.
                                    <br>
                                    2- You will be required to attend medical screening in Malaysia within seven (7) days upon arrival.
                                    <br>
                                    3- Please submit your passport to your institution to proceed with the Student Pass process.
                                    <br>
                                    4- Please note that the VAL and SEV are not the Student Pass. You will only receive the student pass sticker once you have completed the post-arrival processes.
                                    <br>
                                    5. Students arriving at KLIA are recommended to proceed to the International Student Arrival Centre (ISAC) immediately after arrival. Our EMGS officers will provide information of your arrival preparation along with what to expect when you arrive in Malaysia. Please download the 'Arrival Guidelines' under <em>Summary</em> for more information.
                                    <br><br>
                                    <b>NOTE:</b> The instructions above do NOT apply for Variation (changing your course or institution) and Progression (advancing from one level to another e.g. Bachelors to Masters degree) applications.                        </p>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-5">
                                       
                                        <div class="status-exp2">
                                            <h2 style="width: 135px; background: #f6a317; padding: 6px; position: absolute;margin-top: -17px; margin-left: 74px; text-align: center;border-radius: 5px;font-size: 21px;">
                                                Color Info:        </h2>
                                            <table style="border:#c30e2e solid 2px;">
                                                <tbody><tr style="border-bottom: #c30e2e solid 1px;">
                                                    <td style="padding: 10px; vertical-align: middle; padding-top: 17px; width: 10%; text-align: center; min-width:62px;">
                                                        <img style="width:80%;" src="{{asset('uploads/status/green.png')}}">
                                                    </td>
                                                    <td style="padding:5px; vertical-align:middle; padding-left:10px; padding-top:17px; font-size:14px;">
                                                        Your application is progressing accordingly.                </td>
                                                </tr>
                                                <tr style="border-bottom: #c30e2e solid 1px;">
                                                    <td style="padding: 10px; vertical-align: middle; width: 10%; text-align: center;min-width:62px;">
                                                        <img style="width:80%;" src="{{asset('uploads/status/amber.png')}}">
                                                    </td>
                                                    <td style="padding:5px; vertical-align:middle;padding-left:10px; font-size:14px;">
                                                        Your application is pending additional documents or correction by your institution.                </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px; vertical-align: middle; width: 10%; text-align: center;min-width:62px;">
                                                        <img style="width:80%;" src="{{asset('uploads/status/red.png')}}">
                                                    </td>
                                                    <td style="padding:5px; vertical-align:middle;padding-left:10px; font-size:14px;">
                                                        Your application has been rejected/expired at the current stage. Please contact your institution for advice.                </td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                       
                        
                    </div>
                   
                    
                </div>
                
            </div>
            @else
                <div class="card"  style="margin-top: 100px;">
                     <div class="card-header py-4 ">
                            <h3 style="color:red;text-align: center;display: block;">You have not any application here</h3>
                        </div>
                    
                </div>

            @endif
             
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
                .status-border {
                border: #f9a51c solid 1px;
                border-radius: 5px;
                padding: 5px;
                width: 100%;
                float: left;
                margin-top: 10px;
             }

            .progress{
                width: 150px;
                height: 150px;
                line-height: 150px;
                background: none;
                margin: 0 auto;
                box-shadow: none;
                position: relative;
                top: 60px;
                margin-bottom: 10px;
                margin-bottom: 76px !important;
            }
            .progress:after{
                content: "";
                width: 100%;
                height: 100%;
                border-radius: 50%;
                border: 12px solid #fff;
                position: absolute;
                top: 0;
                left: 0;
            }
            .progress > span{
                width: 50%;
                height: 100%;
                overflow: hidden;
                position: absolute;
                top: 0;
                z-index: 1;
            }
            .progress .progress-left{
                left: 0;
            }
            .progress .progress-bar{
                width: 100%;
                height: 100%;
                background: none;
                border-width: 20px;
                border-style: solid;
                position: absolute;
                top: 0;
            }
            .progress .progress-left .progress-bar{
                left: 100%;
                border-top-right-radius: 80px;
                border-bottom-right-radius: 80px;
                border-left: 0;
                -webkit-transform-origin: center left;
                transform-origin: center left;
            }
            .progress .progress-right{
                right: 0;
            }
            .progress .progress-right .progress-bar{
                left: -100%;
                border-top-left-radius: 80px;
                border-bottom-left-radius: 80px;
                border-right: 0;
                -webkit-transform-origin: center right;
                transform-origin: center right;
                animation: loading-1 1.8s linear forwards;
            }
            .progress .progress-value{
                width: 90%;
                height: 90%;
                border-radius: 50%;
                background: #ffffff;
                font-size: 24px;
                color: #1c1b1b;
                line-height: 135px;
                text-align: center;
                position: absolute;
                top: 5%;
                left: 5%;
            }
            .progress.blue .progress-bar{
                border-color: #2b7844;
            }
            .progress.blue .progress-left .progress-bar{
                animation: loading-2 1.5s linear forwards 1.8s;
            }






            @keyframes loading-1{
                0%{
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100%{
                    -webkit-transform: rotate(180deg);
                    transform: rotate(180deg);
                }
            }
            @keyframes loading-2{
                0%{
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100%{
                    -webkit-transform: rotate(144deg);
                    transform: rotate(144deg);
                }
            }
            @keyframes loading-3{
                0%{
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100%{
                    -webkit-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
            }
            @keyframes loading-4{
                0%{
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100%{
                    -webkit-transform: rotate(36deg);
                    transform: rotate(36deg);
                }
            }
            @keyframes loading-5{
                0%{
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100%{
                    -webkit-transform: rotate(126deg);
                    transform: rotate(126deg);
                }
            }
            @media only screen and (max-width: 990px){
                .progress{ margin-bottom: 20px; }


}

 .status-exp2 {
    width: 100%;
    float: left;
    margin-right: 1%;
    margin-left: 1%;
    margin-top: 27px;
}
         </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
