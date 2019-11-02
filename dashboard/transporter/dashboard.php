
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <title>
  Opticharge
 </title>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <!--     Fonts and icons     -->
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 <!-- CSS Files -->
 <link href="../../assets/vendor/assets/css/bootstrap.min.css" rel="stylesheet" />
 <link href="../../assets/vendor/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
 <!-- CSS Just for demo purpose, don't include it in your project -->
 <link href="../../assets/vendor/assets/demo/demo.css" rel="stylesheet" />
 <link href="../../assets/css/usercss.css" rel="stylesheet" />
 <link href="../../assets/css/dashboard.css" rel="stylesheet" />

</head>

<body>
<div >
 <?php 
 include('../../layout/header.html');
include('../../layout//sidbar.html');
     
  ?>
   
 <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <!-- le nombre des proposals-->
                  <div class="col-7 col-md-12">
                    <div class="numbers">
                      <p class="card-category text-center" style="padding-bottom:20px; ">Proposals</p>
                      <p class="card-title text-center" >3
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-7 col-md-12">
                    <!-- le nombre des livraison en cours-->
                    <div class="numbers">
                      <p class="card-category text-center" >Livraison en cours</p>
                      <p class="card-title text-center">1
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-7 col-md-12">
                    <!-- le nombre des livraison finies -->
                    <div class="numbers">
                      <p class="card-category text-center" >Livraison finies</p>
                      <p class="card-title text-center">9
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-7 col-md-12">
                    <!-- poids des charges expidées-->
                    <div class="numbers">
                      <p class="card-category text-center">Charge expidiée</p>
                      <p class="card-title text-center">923 Kg
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row second"> 
          <div class="col-md-12">
            <div class="card card-stats">
              <div class="card-body ">
                <!-- les offres reçues-->
                  <p class="card-category text-align" >Charges</p>
                  <div class="alert alert-info">
                    <span>
                      <div class="row">
                        <div class="col-md-8 ">
                          <a class="nav-link btn-magnify" style="color:#C9C9C9;font-size:12px;font-weight: bold;">
                            <img src="../../assets/img/charges/image.png" class="rounded-circle" width="25" height="25"> 
                            Nom de l'entreprise
                          </a>
                        </div>
                        <div class="col-md-2 offset-md-2" style="margin-top:1.5%;">
                          <span style="font-style: normal;font-weight: 500;font-size: 11px; line-height: 13px;background-color:#DCC209;color:white;border-radius:3px; padding :12px;">
                            En cours
                          </span> 
                        </div>
                      </div>
                    </span>
                  </div>
                  <div class="alert alert-info">
                    <span></span>
                  </div>
                  <div class="alert alert-info">
                    <span></span>
                  </div>
                  <div class="alert alert-info">
                    <span></span>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-stats">
          <div class="card-body ">
            <div class="row">
              <div class="col-7 col-md-12">
                <!--toutes les activités disponible (activités des expéditeurs) -->
                <div class="numbers" >
                  <p class="card-category text-left" style="margin-bottom:2%;">Activités</p>
                </div>
                <div class="progress progress-bar-vertical" id="bar">
                 <div class="progress-bar " id="verticalbar" role="progressbar" data-transitiongoal="40" style="height:50%"></div>
                 </div>
                 <style>
                   #bar {
    width: 20px;
    min-height: 400px;
    display: flex;
    margin-right: 20px;
    float: left;
  }
  
  #verticalbar{
    color:black ;
    width: 100%;
    height: 20%;
    -webkit-transition: height 0.6s ease;
    -o-transition: height 0.6s ease;
    transition: height 0.6s ease;
  }
                   </style>
                   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Tableau des offres des expéditeurs-->
    <div class="row second" style="padding-top:5vmin;">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" style=""> Offres</h4>
          </div>
          <div class="card-body ">
          <p class="card-category text-left" style=" color:#92959D;font-style: normal;font-weight: bold;font-size: 18px;line-height: 22px;">
            Filtrer
          </p>  
          <form>
          <div class="row">
            <div class='col-sm-3'>
              <div class="form-group">
                <label style="color:#DCC209; font-size:16px;">Départ</label>
                <input type="text" class="form-control"  placeholder="Départ" value="">              
              </div>
            </div>
            <div class='col-sm-3'>
              <div class="form-group">
                <label style="color:#DCC209;font-size:16px;">Arrivé</label>
                <input type="text" class="form-control"  placeholder="Arrivé" value="">              
              </div>
            </div>
            <div class='col-sm-3'>
              <div class="form-group">
                <label style="color:#DCC209;font-size:16px;">Date Début</label>
                <input type="text" class="form-control"  placeholder="01/02/2018" value="">              
              </div>
            </div>
            <div class='col-sm-3'>
              <div class="form-group">
                <label style="color:#DCC209;font-size:16px;">Date Fin</label>
                <input type="text" class="form-control"  placeholder="01/07/2019" value="">              
              </div>
            </div>
          </div>
          <div class="row" style="margin-bottom:5%;">
            <div class="col-md-6">
              <label style="color:#DCC209;font-size:16px;">Type Camion</label>
              <div class="dropdown" style="margin-top:-20px;">
                <button id="dLabel" class="dropdown-select" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%">
                  Select
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="first" aria-labelledby="dLabel" style="width:100%">
                  <li>
                    <img src="../../assets/img/dashboard/trawl.png" style="width:15%;" />
                      Option 1
                  </li>
                  <li>
                    <img src="../../assets/img/dashboard/trawl.png" style="width:15%;" />
                    Option 1
                  </li>
                </ul>
              </div>
            </div>
            </form>
            <div class="col-md-6">
              <label style="color:#DCC209;font-size:16px;">Type Charge</label>
              <div class="dropdown" style="margin-top:-20px;">
                <button id="dLabel" class="dropdown-select2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%">
                  Select
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="second" aria-labelledby="dLabel" style="width:100%">
                  <li>
                    LTL
                  </li>
                  <li>
                    FTL
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <div class="card-body">
            <div class="table-responsive" >
              <table class="table">
                <thead class=" text-primary">
                  <th class="text-left">
                    Expéditeurs
                  </th>
                  <th class="text-left">
                    Départ
                  </th>
                  <th class="text-left">
                    Arrivé
                  </th>
                  <th class="text-left">
                    Charge
                  </th>
                  <th class="text-left">
                    Camion
                  </th>
                  <th class="text-left">
                    Prix
                  </th>
                  <th class="text-left">
                    Status
                  </th>
                </thead>
                <tbody>
                  <tr   data-toggle="modal" data-target="#exampleModal" >
                    <!--nom de l'expediteur -->
                    <td>
                      Fedala Amira
                    </td>
                    <!-- lieu de départ-->
                    <td>
                      Alger
                    </td>
                    <!-- l'arrivé-->
                    <td>
                      Blida
                    </td>
                    <!--le poids de la charge -->
                    <td>
                      66 Kg
                    </td>
                    <!-- Type du camion-->
                    <td>
                      Plateau
                    </td>
                    <!-- le prix -->
                    <td>
                      25000
                    </td>
                    <!-- le status -->
                    <td>
                      Active
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>




   <!-- premier modal : plus de détails sur l'offre -->
                          <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                              <div class="modal-dialog modal-lg" role="document" >
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Détails de charge</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="alert alert-info">
                                            <span>
                                              <div class="row">
                                              <div class=col-md-6>
                                                  <div class="row">
                                                <a style="color:#C4C4C4;">Départ</a>
                                                </div>
                                                   <div class="row">
                                                <a style="color:black; padding-top:1vmin;">BabEzzouar,Algerie</a>
                                                </div>
                                              </div>
                                              <div class=col-md-6>
                                                  <div class="row">
                                                  <a style="color:#C4C4C4;" >Arrivé</a>
                                                  </div>
                                                  <div class="row">
                                                      <a style="color:black; padding-top:1vmin;">BabEzzouar,Algerie</a>
                                                      </div>
                                                </div>
                                              </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="map-container-google-2" class="z-depth-1-half map-container" >
                                            <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed"  style="margin-left:2.5%;width:95%;" frameborder="0"
                                              allowfullscreen> </iframe>
                                        </div>
                                          
                                    </div>
                                    <div class="row">
                                        <div class="alert alert-info" style="margin-top:2%;">
                                           <span>
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <span style="color:#424242; font-style: normal;
                                                  font-weight: bold;
                                                  font-size: 16px;
                                                  line-height: 20px;">
                                                    <img src="../../assets/img/dashboard/calendar.png" />
                                                    Date 
                                                    </span>
                                              </div>
                                              <div class="col-md-4">
                                                <span style="color:#B7B7B7;">
                                                  Date de Début:  <span style="color:#424242;">09-05-2019</span> 

                                                </span>
                                              </div>
                                              <div class="col-md-4">
                                                    <span style="color:#B7B7B7;">
                                                        Date de Fin:  <span style="color:#424242;">09-05-2019</span> 
      
                                                      </span>
                                                  </div>
                                            </div>
                                           </span>
                                          </div>

                                    </div>
                                   
                                  
                                  <div class="row">
                                      <div class="alert alert-info">
                                         <span>
                                            <div class="row">
                                              <div class="col-md-3 ">
                                               <h1 class="dim text-center">Largeur</h1>
                                               <h1 class="dim2 text-center">5m</h1>
                                              </div>
                                              <div class="col-md-3">
                                                <h1 class="dim text-center">Longeur</h1>
                                                <h1 class="dim2 text-center">8m</h1>
                                             
                                              </div>
                                              <div class="col-md-3">
                                                  <h1 class="dim text-center">hauteur</h1>
                                                  <h1 class="dim2 text-center">3m</h1>
                                               
                                              </div>
                                              <div class="col-md-3">
                                                    <h1 class="dim text-center">Poids</h1>
                                                    <h1 class="dim2 text-center">120Kg</h1>
                                               
                                              </div>
                                            </div>
                                         </span>
                                        </div>

                                  </div>
                              
                                  <div class="row">
                                      <div class="alert alert-info">
                                         <span>
                                            <div class="row" style="margin-left:0.5%;" >
                                              <div class="col-md-8">
                                                <div class="row">
                                                  <span style="color:#424242;font-style: normal;font-weight: bold;font-size: 14px;line-height: 20px;">
                                                    <img src="../../assets/img/dashboard/truck.png"/>
                                                    Type de camion
                                                  </span>

                                                </div>
                                                <div class="row" style="margin-top:5%;">
                                                  <span style="color: #424242;font-style: normal;font-weight: 300;font-size: 24px;line-height: 29px;">
                                                  PLATEAU
                                                </span>
                                                </div>

                                              </div>
                                              <div class="col-md-2 offset-md-2">
                                                <img src="../../assets/img/dashboard/trawl.png"/>  
                                               </div>
                                            </div>
                                         </span>
                                        </div>

                                 
                                  </div>
                           
                                <div class="row">
                                    <div class="alert alert-info" style=" margin-left:2.5%;width:95%;margin-top:1%;">
                                       <span>
                                          <div class="row">
                                          <div class="col-md-2" style="margin-top:0.5%;">
                                            <span style="color:#424242;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;">
                                            <img src="../../assets/img/dashboard/dollar-sign.png"/>
                                            Prix
                                          </span>
                                          </div>
                                          <div class="col-md-8">
                                            <span style="font-style: normal;
                                            font-weight: 300;
                                            font-size: 24px;
                                            line-height: 130.9%; color:#424242;">12000 DZD</span>
                                          </div>
                                            </div>
                                       </span>
                                   </div>  

                                </div>
                                </div>
                              
                                  <div class="modal-footer">
                                    <button type="button" class="btn " id="signin" style="background-color:#F6DA14;" data-dismiss="modal" >Je suis intéréssé</button>
                                    <button type="button" class="btn" id="signin2" style="background-color:#F6DA14;" data-dismiss="modal">Négociez une offre</button>
                                  </div>
    
                                </div>
                              </div>
                            </div>
                     

<!--  2eme modal : si intéréssé  . si il clique sur le button <je suis intéréssé> il n'aura plus accés au premier modal  -->
                            <div class="modal fade bd-example-modal-lg" style="overflow: scroll;" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                              <div class="modal-dialog modal-lg" role="document" >
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: #505050;font-family: Montserrat;font-style: normal;font-weight:bold;font-size: 22px;line-height: 128.9%;">Détails de charge</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;">
                                            <span>
                                              <div class="row">
                                              <div class=col-md-6>
                                                  <div class="row">
                                                <a style="color:#C4C4C4;">Départ</a>
                                                </div>
                                                <div class="row">
                                                     
                                                <a style="color:black; padding-top:1vmin;">BabEzzouar,Algerie</a>
                                                </div>
                                              </div>
                                              <div class=col-md-6>
                                                  <div class="row">
                                                  <a style="color:#C4C4C4;" >Arrivé</a>
                                                  </div>
                                                  <div class="row">
                                                      <a style="color:black; padding-top:1vmin;">BabEzzouar,Algerie</a>
                                                      </div>
                                                </div>
                                            </div>
                                            </span>
                                          </div>
                                        </div>
                                     
                                  <div class="row">
                                        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height:200px;width:95%;margin-left:2.5%;
                                        
                                        position:relative;
                                        ">
                                            <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width:100%;" frameborder="0"
                                          
                                              allowfullscreen></iframe>
                                          </div>
                                          
                                    </div>
                                    <div class="row">
                                        <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;margin-top:2%;">
                                           <span>
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <span style="color:#424242; font-style: normal;
                                                  font-weight: bold;
                                                  font-size: 16px;
                                                  line-height: 20px;">
                                                    <img src="../../assets/img/dashboard/calendar.png" />
                                                    Date 
                                                    </span>
                                              </div>
                                              <div class="col-md-4">
                                                <span style="color:#B7B7B7;">
                                                  Date de Début:  <span style="color:#424242;">09-05-2019</span> 

                                                </span>
                                                </div>
                                                <div class="col-md-4">
                                                    <span style="color:#B7B7B7;">
                                                        Date de Fin:  <span style="color:#424242;">09-05-2019</span> 
      
                                                      </span>
                                                  </div>
                                            </div>
                                           </span>
                                          </div>

                                    </div>
                                  
                                  
                                  <div class="row">
                                      <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;margin-top:2%;">
                                         <span>
                                           
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h1 class="dam text-center">Type</h1>
                                                    <h1 class="dam2 text-center">VRAC</h1>
                                               
                                                  </div>
                                              <div class="col-md-2 ">
                                               <h1 class="dam text-center" >Largeur</h1>
                                               <h1 class="dam2 text-center">5m</h1>
                                            </div>
                                            <div class="col-md-2">
                                                <h1 class="dam text-center">Longeur</h1>
                                                <h1 class="dam2 text-center">8m</h1>
                                             
                                              </div>
                                              <div class="col-md-2">
                                                  <h1 class="dam text-center">hauteur</h1>
                                                  <h1 class="dam2 text-center">3m</h1>
                                               
                                                </div>
                                                <div class="col-md-2">
                                                    <h1 class="dam text-center">Poids</h1>
                                                    <h1 class="dam2 text-center">120Kg</h1>
                                               
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h1 class="dam text-center">Quantité</h1>
                                                      <h1 class="dam2 text-center">300</h1>
                                                 
                                                    </div>
                                            </div>
                                         </span>
                                        </div>

                                  </div>
                            
                                  <div class="row">
                                      <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;margin-top:2%;">
                                         <span>
                                            <div class="row" style="margin-left:0.5%;" >
                                              <div class="col-md-8">
                                                <div class="row">
                                                  <span style="color:#424242;font-style: normal;font-weight: bold;font-size: 14px;line-height: 20px;">
                                                    <img src="../../assets/img/dashboard/truck.png"/>
                                                    Type de camion
                                                  </span>

                                                </div>
                                                <div class="row" style="margin-top:5%;">
                                                  <span style="color: #424242;font-style: normal;font-weight: 300;font-size: 24px;line-height: 29px;">PLATEAU</span>
                                                </div>

                                              </div>
                                              <div class="col-md-2 offset-md-2">
                                                <img src="../../assets/img/dashboard/trawl.png"/>  
                                               </div>
                                            </div>
                                         </span>
                                        </div>

                                 
                                  </div>
                          
                                <div class="row">
                                    <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;margin-top:1%;">
                                       <span>
                                          <div class="row">
                                          <div class="col-md-2" style="margin-top:0.5%;">
                                            <span style="color:#424242;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;">
                                            <img src="../../assets/img/dashboard/dollar-sign.png"/>
                                            Prix
                                          </span>
                                          </div>
                                          <div class="col-md-8">
                                            <span style="font-style: normal;
                                            font-weight: 300;
                                            font-size: 24px;
                                            line-height: 130.9%; color:#424242;">12000 DZD</span>
                                          </div>
                                            </div>
                                       </span>
                                   </div>  

                                </div>
                                </div>
                              
                                  <div class="modal-footer" style="padding-right:30%;">
                                   
                                      <span style="font-style: normal;
                                     font-weight: bold;font-size: 12px;line-height: 130.9%;
                                      background-color:#F6DA14;
                                      color:white;
                                      border-radius:3px; 
                                      padding :2%;"
                                      >Vous êtes marqué comme transporteur intéressé
                                    <img src="../../assets/img/dashboard/check1.png"/>
                                    </span> 
                                  </div>
                                </div>
                              </div>
                            </div>


<!--  3eme modal :  si il clique sur le button <négociez une offre> -->
                            <div class="modal fade bd-example-modal-lg" style="overflow: scroll;" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                <div class="modal-dialog modal-lg" role="document" >
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel" style="color: #C9C9C9;font-family: Montserrat;font-style: normal;font-weight:bold;font-size: 22px;line-height: 128.9%;">Vous avez une meilleure offre</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col-md-12" style="padding-bottom:1%;">
                                            <a class="nav-link btn-magnify" href="#" style="color:#424242;font-size:14px;font-weight: bold;">
                                      
                                     
                                                <img src="../../assets/img/dashboard/image.png" class="rounded-circle" alt="Cinque Terre" width="50" height="50"> 
                                                Fedala Amira
                                        </a>
                                        </div>
                                      </div>
                                      <div class="row">
                                          <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;">
                                              <span>
                                                <div class="row">
                                                <div class=col-md-6>
                                                    <div class="row">
                                                  <a style="color:#C4C4C4;">Départ</a>
                                                  </div>
                                                     <div class="row">
                                                       
                                                  <a style="color:black; padding-top:1vmin;">BabEzzouar,Algerie</a>
                                                  </div>
                                                </div>
                                                <div class=col-md-6>
                                                    <div class="row">
                                                    <a style="color:#C4C4C4;" >Arrivé</a>
                                                    </div>
                                                    <div class="row">
                                                        <a style="color:black; padding-top:1vmin;">BabEzzouar,Algerie</a>
                                                        </div>
                                                  </div>
                                                </div>
                                              </span>
                                           
                                          </div>
                                          </div>
                                    <div class="row">
                                        
                                      </div>
                                      <div class="row">
                                          
                                      </div>
                                    
                                    <div class="row">
                                        <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;margin-top:2%;">
                                           <span>
                                             
                                              <div class="row">
                                                  <div class="col-md-2">
                                                      <h1 class="dam text-center">Type</h1>
                                                      <h1 class="dam2 text-center">VRAC</h1>
                                                 
                                                    </div>
                                                <div class="col-md-2 ">
                                                 <h1 class="dam text-center">Largeur</h1>
                                                 <h1 class="dam2 text-center">5m</h1>
                                              </div>
                                              <div class="col-md-2">
                                                  <h1 class="dam text-center">Longeur</h1>
                                                  <h1 class="dam2 text-center">8m</h1>
                                               
                                                </div>
                                                <div class="col-md-2">
                                                    <h1 class="dam text-center">hauteur</h1>
                                                    <h1 class="dam2 text-center">3m</h1>
                                                 
                                                  </div>
                                                  <div class="col-md-2">
                                                      <h1 class="dam text-center" >Poids</h1>
                                                      <h1 class="dam2 text-center">120Kg</h1>
                                                 
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h1 class="dam text-center">Quantité</h1>
                                                        <h1 class="dam2 text-center">300</h1>
                                                   
                                                      </div>
                                           </span>
                                          </div>
  
                                    </div>
                                  </div>
                                    <div class="row">
                                        <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1); margin-left:2.5%;width:95%;margin-top:2%;">
                                           <span>
                                              <div class="row" style="margin-left:0.5%;" >
                                                <div class="col-md-6">
                                                  <div class="row">
                                                    <span style="color:#424242;font-style: normal;font-weight: bold;font-size: 14px;line-height: 20px;">
                                                      <img src="../../assets/img/dashboard/truck.png"/>
                                                      Selectionnez un camion
                                                    </span>
  
                                                  </div>
                                                  <!-- -->
                                                  <div class="container">
                                                  <div class="row">
                                                  <div class="col-xs-12">
                                                  <div class="dropdown">
                                                 <button id="dLabel" class="dropdown-select" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Select
                                                <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" id="first" aria-labelledby="dLabel">
                                                <li>
                                                <img src="../../assets/img/dashboard/trawl.png" />
                                                 Option 1</li>
                                                 <li>
                                                <img src="../../assets/img/dashboard/trawl.png" />
                                                Option 1</li>
                                                </ul>
                                               </div>
                                                </div>
                                               </div>
                                               </div>

                                                </div>
                                              </div>
                                           </span>
                                          </div>
                                    </div>
                                  </div>
       
                                  <div class="row">
                                      <div class="col-md-12">

                                          <div class="input-group mb-4" style="width:97%;padding-left:2.5%; height:10%; ">

                                              <input id="msg" type="text" class="form-control text-align" style="padding-bottom:5%;"  placeholder="Proposez votre prix">
                                              <div class="input-group-append">
                                                  <span class="input-group-text" style=" color:#F6DA14;font-style: normal;
                                                  font-weight: bold;
                                                  font-size: 20px;
                                                  line-height: 130.9%;">DZD</span>
                                                </div>
                                            </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <textarea class="form-control" placeholder="  Ecrivez un message..."rows="5" style="width:95%;margin-left:2.5%;border-block-end-color: #C9C9C9; border-radius:4px;margin-bottom:2%;"></textarea>
                                    </div>
                                  </div>
                                
                                    <div class="modal-footer" style="padding-right:45%;">
                                     
                                        <button type="button" class="btn " id="signin" style="background-color:#F6DA14;" data-dismiss="modal" >Envoyer</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
      <!--   Core JS Files   -->
      <script src="../../assets/vendor/js/core/jquery.min.js"></script>
  <script src="../../assets/vendor/js/core/popper.min.js"></script>
  <script src="../../assets/vendor/js/core/bootstrap.min.js"></script>
  <script src="../../assets/vendor/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../../assets/vendor/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/vendor/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/vendor/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/vendor/demo/demo.js"></script>
   <script src="../../assets/js/dash.js"></script>
   <script src="../../assets/js/user.js"></script>


</body>
</html>