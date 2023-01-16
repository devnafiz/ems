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
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
           <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css"> -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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


                                        <div class="bg-white rounded-lg p-5 shadow">
                                          <h2 class="h6 font-weight-bold text-center mb-4">Application Status Progress</h2>

                       
                                           <div class="progress mx-auto" data-value='{{$searchResult->appstatus->percentage ?? "0"}}'>
                                               <span class="progress-left">
                                                 <span class="progress-bar border-success"></span>
                                                 </span>
                                                 <span class="progress-right">
                                                 <span class="progress-bar border-success"></span>
                                                 </span>
                                             <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                 <div class="h2 font-weight-bold">{{$searchResult->appstatus->percentage ?? "0"}}<sup class="small">%</sup></div>
                                                </div>
                                             </div>
                       

                       
                                            </div>
        
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Summary</h3>
                                        <hr>
                                        <h5>Full Name: {{ $searchResult->student_name}}</h5>
                                        <h5>Student Id: {{$searchResult->generated_id}}</h5>
                                        <h5>Application Number: {{$searchResult->id}}</h5>
                                       <!--  <h5>Application Type: New</h5> -->
                                        <h5>Application Status: {{$searchResult->appstatus->name ?? 'N/A'}}</h5>

                                        @if($student_status)
                                           @foreach($student_status as $val)
                                             <h5>{{$val->appstatus->name ?? 'N/A'}}:  @if ($val->status_file &&
                                                    file_exists(public_path('uploads/status/' . $val->status_file)))
                                                    <a class="text-black badge badge-danger"
                                                        href="{{ asset('uploads/status/' . $val->status_file) }}"
                                                        download><i class="fa fa-file fa-2x" aria-hidden="true"></i>Download</a>
                                                @else
                                                   <span class="badge badge-danger">no file</span>
                                                   <i class="fa-sharp fa-solid fa-file-arrow-down"></i>
                                                @endif</h5>


                                           @endforeach

                                        @endif

                                        <p>As per the announcement from the Malaysian Government on the transition to the endemic phase on 1 April 2022, the Travel Authorisation Letter is no longer part of the requirements for International Students to enter Malaysia.</p>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                       
                        
                    </div>

                     <div class="card" style="margin-top: 100px;">   
                                <div id="accordion" class="mobile-desktop card-header py-4">
                                    <h3 ></span>
                                        <strong>Application Progress History</strong>
                                    </h3>
                                    <div class="col-xs-12 app-his  ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="display: block;">
                                        <div class="content">
                                            <div class="card-body">
                                                 <div class="status-border">
                                                <table id="form-table" class="table table-striped ">
                                                    
                                                    <thead>
                                                        <tr class="first last">
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Remark </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($student_status as $st_status)
                                                        
                                                          <tr class="first odd">
                                                            <td class="a-center"> {{date('d/m/Y',strtotime($st_status->created_at))}}  </td>
                                                            <td>    {{$st_status->appstatus->name ?? 'N/A'}}   </td>
                                                            <td class="last">
                                                               {{$st_status->feedback ?? 'N/A'}} </td>
                                                        </tr>


                                                        @endforeach

                                                      
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
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
                                                               {{$searchResult->appstatus->percentage ?? '0'}}%                        </h2>
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
             /*   .status-border {
                border: #f9a51c solid 1px;
                border-radius: 5px;
                padding: 5px;
                width: 100%;
                float: left;
                margin-top: 10px;
             }
*/



         .status-exp2 {
            width: 100%;
            float: left;
            margin-right: 1%;
            margin-left: 1%;
            margin-top: 27px;
        }
      



         </style>

<style type="text/css">
.status-border {
    border: #f9a51c solid 1px;
    border-radius: 5px;
    padding: 5px;
    width: 100%;
    float: left;
    margin-top: 10px;
}

.progress {
  width: 150px;
  height: 150px;
  background: none;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {
  position: absolute;
  top: 0;
  left: 0;
}


  </style>

       

<script type="text/javascript">
     // $(function() {

   $(document).ready(function(){

     

  $(".progress").each(function() {

    var value = $(this).attr('data-value');
    var left = $(this).find('.progress-left .progress-bar');
    var right = $(this).find('.progress-right .progress-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }

  });

  function percentageToDegrees(percentage) {

    return percentage / 100 * 360

  }
 });  
//});
  </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
    </body>
</html>
