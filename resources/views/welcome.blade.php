<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>JALIYAN ART</title>

</head>
<style>
.card-title {
  text-align: center;
  display: block;
  padding-top: 25px;
  color: white;
  font-size:30px;
  font-weight:3000;
}


#image {
  display: block;
  margin-left: auto;
  margin-right: auto;
  height: 300px;
  width:60%
}



.h1, h1 {
  text-align: center;
  color: white;
  font-size:60px !important;
  padding:40px 0px;
    
}



div.view {
  background-color: rgb(28,24,24);
  padding:60px 0px;
}

div.card {
  background-color: rgb(28,24,24);
  align-items:center;
  padding: 25px;
  border-left:3px solid white !important;
  border-bottom:3px solid white !important;
  
  
}

#c1{
  border-image: conic-gradient(white, white, white, rgb(28,24,24), rgb(28,24,24), rgb(28,24,24), white ) 1 !important;
}

#c2{
  border-image: conic-gradient(rgb(28,24,24), rgb(28,24,24), rgb(28,24,24), rgb(28,24,24),  white, rgb(28,24,24), rgb(28,24,24)) 1 !important;

}

#c3{
  border-image: conic-gradient(rgb(28,24,24), white, rgb(28,24,24), white, rgb(28,24,24), white, rgb(28,24,24), white ) 1 !important;
}

#c4{
  border-image: conic-gradient(rgb(28,24,24), white, rgb(28,24,24), white, rgb(28,24,24), white, rgb(28,24,24)  ) 1 !important;

}



.card-group > .card:not(:first-child) {
  border: none;
}

.card-body {
  background-color:rgb(28,24,24);
  border-radius:10px;
  height:80%;
  width:80%;
  padding: 5px 0px;
  
}

.card-group > .card:not(:last-child) {
  border: none;
}


</style>
<body>
    @extends('layouts.main')
    
    @section('content')
    
     <div class="view" id=card>
     
        <h1>WHAT WE DO</h1>
        
        <div class="card-group">
            <div class="card" id="c1" style="border-left:none !important;">
                <div class="card-body" id="card1"><img id="image" src="assets_card/img/Designing.png">
                    <h4 class="card-title" style="text-align: center;">Designing</h4>
                </div>
            </div>
         
            <div class="card" id="c2">
                <div class="card-body"><img id="image" src="assets_card/img/Printing.png">
                    <h4 class="card-title">Printing</h4>
                </div>
            </div>
            </div>
            <div class="card-group">
            <div class="card" id="c3" style="border-left:none !important; border-bottom:none !important;" >
                <div class="card-body"><img id="image" src="assets_card/img/packaging.png">
                    <h4 class="card-title">Packaging</h4>
                </div>
            </div>
            <div class="card" id="c4" style="border-bottom:none !important;">
                <div class="card-body"><img id="image" src="assets_card/img/Advertising.png">
                    <h4 class="card-title">Advertising</h4>
                </div>
            </div>
        </div>
    </div> 

    
    

    @endsection

  

</body>
</html>