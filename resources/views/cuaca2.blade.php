<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuaca</title>
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
    <style>
    .tengah{
        margin-left: auto;
        margin-right: auto;
    }
    .spasi_bawah{
        margin-bottom: 30px;        
    }
    .spasi_atas{
        margin-top: 30px;
    }
    .txt_tengah{
        text-align: center;
    }
    </style>
</head>
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container spasi_bawah">
            <div class="row text-lg-center">
                <div class="col">
            <h1>Percobaan Yang Q Cinta</h1>
        </div>
    </div>
    </div>    
            <div class="container spasi_bawah">
                    <div class="row">
                      <div class="col">
                        <h1>Cuaca saat ini</h1>
                        <div class="row">
                            <div class="col">
                        <?php echo $cuaca; ?>
                      </div>
                    </div>
                    </div>
                      <div class="col">
                          <div class="row">
                              <div class="col">
                                  <div class="row spasi_bawah">
                                      <div class="col-md-3">
                                          <img src="<?php echo $yutub['items'][0]['snippet']['thumbnails']['medium']['url']; ?>" alt="<?php echo $yutub['items'][0]['snippet']['title']; ?>"
                                          class="rounded-circle img-thumbnail" width="100">
                                      </div>                                                                
                                      <div class="col-md-9">                                                                        
                                          <h5><?php echo $yutub['items'][0]['snippet']['title']; ?></h5>
                                          <p><?php echo $yutub['items'][0]['statistics']['subscriberCount']; ?> Subscriber</p>
                                      </div>                                     
                              </div>
                              <div class="row">
                                  <div class="col">
                                      <div class="embed-responsive embed-responsive-16by9">
                                          <iframe src="https://www.youtube.com/embed/<?php echo $video['items'][0]['id']['videoId'] ?>" frameborder="0" allowfullscreen></iframe>
                                      </div>                                      
                                  </div>
                              </div>
                                  </div>                   
                              </div>
                          </div>                        
                      </div>                      
                      <div class="container-fluid text-lg-center spasi_atas">
                          Another trial
                          <a href="{{url('film')}}"> Click Me ;) 🔥🔥🔥🔥🔥 </a>
                      </div>
                    </div>
@endsection