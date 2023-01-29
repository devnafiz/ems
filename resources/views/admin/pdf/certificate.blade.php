<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="border-pattern">
      <div class="content">
          <div class="inner-content">
             <div style="">
                @if($items->signature_image)
                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/malysia.png'))) }}" width="200" height="100">
                @endif 
               </div> 
              <h1>Unice Education Malaysia</h1><br/>

              <h2>Certificate OF Appointment</h2>
              <h3>{{$items->user->agency_name}}</h3><br/>

                <p>Has</p>
                <p>been appointed as an authorized</p>
                <p>representative for a period of 1 year</p>
                <p>From</p><br/>

                <p>{{date('jS \o\f F Y', strtotime($items->updated_at))}} to {{date('jS \o\f F Y', strtotime('+ 364 days',strtotime($items->updated_at)))}} </p>
               
               <div style="">
                @if($items->signature_image)
                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/0099_ceo.png'))) }}" width="200" height="70">
                @endif 
                <p>.......................................................................</p>
              </div>
             
              <p style="font-size:13px;"> Engr. Md Omar Faruk </p>
              <p style="font-size:13px;">CEO  issue date: {{date('jS \o\f F Y', strtotime($items->updated_at))}} </p>
              <p style="font-size:11px;float:left;"> SL no: {{$items->generated_id}}</p>
              <div style="float: right;left: 100px;position: relative;">
                @if($items->signature_image)
                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/Certified-Stamp-PNG-Clipart-Background.png'))) }}" width="150" height="150">
                @endif 
               
              </div>

              <div class="badge">
              </div>
          </div>
      </div>
  </div>
  <style type="text/css">
    
    @page{
    size:A4 ;
    margin:10mm;
}

body{
    margin:0;
    padding:0;
   /* border:1mm solid  #00b2ff;*/
    height:320mm;
}

.border-pattern{
    position:absolute;
   /* left:4mm;*/
    top:-6mm;
    height:280mm;
    width:190mm;
    /*border:1mm solid  #00b2ff;*/
   
    background-color: #d6d6e4;
 
}

.content{
    position:absolute;
    left:10mm;
    top:10mm;
    height:260mm;
    width:167mm;
   /* border:1mm solid # #00b2ff;*/
    background:white;
}

.inner-content{
    border:1mm solid  #00b2ff;
    margin:4mm;
    padding:10mm;
    height:230mm;
    text-align:center;
}

h1{
    text-transform:uppercase;
    font-size:24pt;
    margin-bottom:4px;
}

h2{
    font-size:20pt;
    margin-top:0;
    padding-bottom:1mm;
    display:inline-block;
    border-bottom:1mm solid #991B1B;
}

h2::after{
    content:"";
    display:block;
    padding-bottom:1mm;
    
}

h3{
    font-size:20pt;
    margin-bottom:0;
    margin-top:10mm;
}

p{
    font-size:16pt;
}

.badge{
    width:40mm;
    height:40mm;
    position:absolute;
    right:10mm;
    bottom:10mm;
  
}
  </style>
</body>
</html>