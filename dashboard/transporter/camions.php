
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
<div>
 <?php 
 include('../../layout/header.html');
include('../../layout//sidbar.html');
     
  ?>
   
 <div class="content">
 <div class="col-md-12" >
      <div class="card card-stats" style="height:100%;width:100%;">
        <div class="card-body ">
          <p class="card-category text-left" style=" color:#424242;font-style: normal;font-weight: bold;font-size: 18px;line-height: 22px;">
            Filtrer
          </p>  
          <form>
          <div class="row" style="margin-bottom:3%;">
            <div class='col-md-3'>
              <div class="form-group">
                <label style="color:#DCC209; font-size:16px;">Marque</label>
                <input type="text" class="form-control"  placeholder="Marque" value="">              
              </div>
            </div>
            <div class='col-md-3'>
              <div class="form-group">
                <label style="color:#DCC209;font-size:16px;">Matricule</label>
                <input type="text" class="form-control"  placeholder="Matricule" value="">              
              </div>
            </div>
            <div class="col-md-3 ">
              <label style="color:#DCC209;font-size:16px;">Type Camion</label>
              <div class="dropdown" style="margin-top:-25px;">
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
            <div class="col-md-3">
              <div class="form-group">
                <label style="color:#DCC209;font-size:16px;">Numéro de parque</label>
                <input type="text" class="form-control"  placeholder="Numéro de parque" value="">              
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>
    
      <div class="col-md-12" >
        <div class="card card-stats" style="height:100%;width:100%;">
          <div class="card-body ">
                <div class="row">
                  <div class="col-md-9">
                    <p class="card-category text-align" style="color:#424242;font-style: normal;font-weight: bold;font-size: 18px;line-height: 22px;">
                      Mes Camions
                    </p>
                  </div>
                  <div class="col-md-3">
                    <button class="btn btn-outline-warning "  data-toggle="modal" data-target="#addTruckModal" data-dismiss="modal" style="padding-left:0; margin-top:0vmin;">
                     <img src="../../assets/img/charges/plus.png" style="width:20px;"/>
                      Ajouter un camion
                    </button>
                </div>
          </div>
          <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1);">
            <span>
              <div class="row">
               <div class="col-md-2">
                  <a class="nav-link btn-magnify" style="color:#C9C9C9;font-size:12px;font-weight: bold;"> 
                    Marque
                  </a>
                </div>
                <div class="col-md-3">
                  <a class="nav-link btn-magnify" style="color:#C9C9C9;font-size:12px;font-weight: bold;"> 
                    Matricule
                  </a>
                </div>
                <div class="col-md-2">
                  <a class="nav-link btn-magnify" style="color:#C9C9C9;font-size:12px;font-weight: bold;"> 
                    Type
                  </a>
                </div>
                <div class="col-md-2">
                  <a class="nav-link btn-magnify" style="color:#C9C9C9;font-size:12px;font-weight: bold;"> 
                    Poids
                  </a>
                </div>
                <div class="col-md-3">
                  <a class="nav-link btn-magnify" style="color:#C9C9C9;font-size:12px;font-weight: bold;">
                    Numéro de parque
                  </a> 
                </div>
              </div>
            </span>
          </div>
          <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1);">
            <span></span>
          </div>
          <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1);">
            <span></span>
          </div>
          <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1);">
            <span></span>
          </div>
        </div>
      </div>                            
    
    <!--modal : ajouter un camion -->
    <div class="modal fade bd-example-modal-lg" id="addTruckModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informations sur le camion</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Marque</label>
                                <input type="text" class="form-control"  placeholder="Marque" value="">
                             </div>
                        </div>
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Matricule</label>
                                <input type="text" class="form-control" placeholder="Matricule" value="">
                            </div>
                        </div>
                        <div class="col-md-12 pr-1">
                          <div class="form-group">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-3 px-1">
                                  <label>Type</label>
                                  <div class="dropdown" style="margin-top:-20px;">
                                    <button id="dLabel" class="dropdown-select" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Select
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="first" aria-labelledby="dLabel">
                                      <li>
                                        <img src="../../assets/img/dashboard/trawl.png" />
                                        Option 1
                                      </li>
                                      <li>
                                        <img src="../../assets/img/dashboard/trawl.png" />
                                        Option 1
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-7 pr-1" style="margin-left:3.5%">
                            <div class="form-group">
                                <label>Poids</label>
                                <input type="text" class="form-control"  placeholder="Poids" value="">
                             </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Unité</label>
                                <div class="dropdown" style="margin-top:-25px;">
                                    <button id="dLabel" class="dropdown-select2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%" >
                                      Select
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="second" aria-labelledby="dLabel" style="width:100%">
                                      <li>
                                        Kilogrammes
                                      </li>
                                      <li>
                                        Tonnes
                                      </li>
                                    </ul>
                                  </div>
                             </div>
                            </div>
                        </div>
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Numéro de parque</label>
                                <input type="text" class="form-control"  placeholder="Numéro de parque" value="">
                             </div>
                        <div class="col-md-12 px-1" style="height:110px;">
                            <label for="exampleInputEmail1">Assurance</label>
	                        <input id="file-upload" type="file" name="fileUpload"  />
	                        <label for="file-upload" id="file-drag" style="height:59px;">
                                <img src="../../assets/img/user/paperclip.png" style="width:20px;height:20px;"/>
                                Ajoutez une photo ou faites glisser une version scannée 
	                            <br /><br />
	                        </label>
	
	                        <progress id="file-progress" value="0">
		                        <span>0</span>%
	                        </progress>
	                        <output for="file-upload" id="messages"></output>
                        </div>
                        <div class="col-md-12 px-1" style="height:110px;" >
                            <label for="exampleInput1">Carte grise</label>
	                        <input id="file-upload" type="file" name="fileUpload"  />
	                        <label for="file-upload" id="file-drag" style="height:59px;">
                                <img src="../../assets/img/user/paperclip.png" style="width:20px;height:20px;"/>
                                Ajoutez une photo ou faites glisser une version scannée 
	                            <br /><br />
	                        </label>
	
	                        <progress id="file-progress" value="0">
		                        <span>0</span>%
	                        </progress>
	                        <output for="file-upload" id="messages"></output>
                        </div>                  
                        <div class="col-md-12 px-1" >
                            <label for="exampleInputEmail1">Controle technique</label>
	                        <input id="file-upload" type="file" name="fileUpload" />
	                        <label for="file-upload" id="file-drag" style="height:59px;">
                                <img src="../../assets/img/user/paperclip.png" style="width:20px;height:20px;"/>
                                Ajoutez une photo ou faites glisser une version scannée 
	                            <br /><br />
	                        </label>
	
	                        <progress id="file-progress" value="0">
		                        <span>0</span>%
	                        </progress>
	                        <output for="file-upload" id="messages"></output>
                        </div>                                   
                    </form>
                </div>
                
                <div class="modal-footer" style="padding-right:38%;">
                    <button type="button" class="btn " id="signin" style="background-color:#F6DA14;" data-dismiss="modal" >
                        Ajouter
                    </button>
                </div>
                </div>
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