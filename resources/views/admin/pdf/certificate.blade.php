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
              <h1>Certificate</h1>
              <h2>of Excellence</h2>
              <h3>This Certificate Is Proudly Presented To</h3>
              <p>Jane Doe</p>
                <u>Owner signature</u>
               <div style="">
                @if($items->signature_image)
                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/uploads/signature/'.$items->signature_image))) }}" width="200" height="100">
                @endif 
              </div>
              <!-- <h3>Has Completed</h3>
              <p>PrintCSS Basics Course</p> -->
              <h3>On</h3>
              <p>Feburary 5, 2021</p>

              <div class="badge">
              </div>
          </div>
      </div>
  </div>
  <style type="text/css">
    
    @page{
    size:A4 landscape;
    margin:10mm;
}

body{
    margin:0;
    padding:0;
   /* border:1mm solid  #00b2ff;*/
    height:188mm;
}

.border-pattern{
    position:absolute;
   /* left:4mm;*/
    top:-6mm;
    height:200mm;
    width:267mm;
    /*border:1mm solid  #00b2ff;*/
   
    background-color: #d6d6e4;
 
}

.content{
    position:absolute;
    left:10mm;
    top:10mm;
    height:178mm;
    width:245mm;
   /* border:1mm solid # #00b2ff;*/
    background:white;
}

.inner-content{
    border:1mm solid  #00b2ff;
    margin:4mm;
    padding:10mm;
    height:148mm;
    text-align:center;
}

h1{
    text-transform:uppercase;
    font-size:48pt;
    margin-bottom:0;
}

h2{
    font-size:24pt;
    margin-top:0;
    padding-bottom:1mm;
    display:inline-block;
    border-bottom:1mm solid #991B1B;
}

h2::after{
    content:"";
    display:block;
    padding-bottom:4mm;
    border-bottom:1mm solid #991B1B;
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