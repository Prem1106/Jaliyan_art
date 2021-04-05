<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JALIYAN ART PRODUCTS</title>
</head>
<style>
    .card{
        background-color:rgb(28,24,24) !important;
        display:inline-block;
    }
    .card-title{
        height:80px;
        font-size:52px;
        border-bottom: 1px solid white;
    }

    .card-text{
        font-size:50px;
    }
    .card-title , .card-text{
        color: white;
    }
    .card-group{
        height:600px;
        display:inline-block;
        border-bottom: 1px solid white;
    }
    .card-img-top{
        height:300px;
    }
    
    .login-dark {
  height:1000px !important;
  background: rgb(28,24,24);
  background-size: cover;
  position: relative;
}

.login-dark form:hover{
    box-shadow: 5px 16px 20px -6px #2b2b2b; 
}

.login-dark form {
  max-width: 320px;
  width: 90%;
  background-color: #1e2833;
  padding: 40px;
  border-radius: 4px;
  transform: translate(-50%, -50%);
  position: absolute;
  top: 50%;
  left: 50%;
  color: #fff;
  box-shadow: 3px 3px 4px rgba(0,0,0,0.2);

}

.login-dark .illustration {
  text-align: center;
  padding: 15px 0 20px;
  font-size: 100px;
  color: #FF5F16;
}

.login-dark form .form-control {
  background: none;
  border: none;
  border-bottom: 1px solid #434a52;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
}

.login-dark form .btn-primary {
  background: #214a80;
  border: none;
  border-radius: 4px;
  padding: 11px;
  box-shadow: none;
  margin-top: 26px;
  text-shadow: none;
  outline: none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background: white !important;
  outline: none;
}

.login-dark form .forgot {
  display: block;
  text-align: center;
  font-size: 12px;
  color: #6f7a85;
  opacity: 0.9;
  text-decoration: none;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity: 1;
  text-decoration: none;
}

.login-dark form .btn-primary:active {
  transform: translateY(1px);
}

.btn.btn-primary.btn-block {
  background-color: #fd7d42 !important;
}

.btn.btn-primary.btn-block:hover {
  transition: 0.6s linear !important;
  background-color: #ff5000 !important;
}

</style>
<body>
@extends('layouts.main')

@section('content')


 
    <div class="login-dark">
        <form method="post" action="{{route('storeItems')}}" enctype="multipart/form-data">

            @csrf

            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-android-happy"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="items" placeholder="Item"></div>
            <div class="form-group"><input class="form-control" type="text" name="price" placeholder="Price"></div>
            <div class="form-group"><input class="form-control" type="text" name="range" placeholder="Range"></div>
            <div class="form-group"><input class="form-control" type="file" name="img" placeholder="Browse"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Submit</button></div>
        </form>
    </div>
    @endsection
</body>
</html>

