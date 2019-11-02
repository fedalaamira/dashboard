
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
          <div class="row" style="margin-bottom:5%;">
            <div class="col-md-4">
              <div class="form-group">
                <label style="color:#DCC209; font-size:16px;">Nom</label>
                <input type="text" class="form-control"  placeholder="Nom" value="">              
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label style="color:#DCC209; font-size:16px;">Prénom</label>
                <input type="text" class="form-control"  placeholder="Prénom" value="">              
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label style="color:#DCC209; font-size:16px;">Numéro de téléphone</label>
                <input type="text" class="form-control"  placeholder="Numéro de téléphone" value="">              
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="col-md-12" >
        <div class="card card-stats" style="height:100%;width:100%;">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-9">
                        <p class="card-category text-align" style=" color:#424242;font-style: normal;font-weight: bold;font-size: 18px;line-height: 22px;padding-right:0;">
                             Mes Chauffeurs
                        </p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-outline-warning "  data-toggle="modal" data-target="#addModal" data-dismiss="modal" style="padding-left:0; margin-top:0vmin; font-size:11px;">
                            <img src="../../assets/img/charges/plus.png" style="width:20px;" />
                             Ajouter un chauffeurs
                        </button>
                    </div>
                </div>
                <div class="alert alert-info" style="background-color:rgba(196, 196, 196, 0.1);">
                    <div class="row">
                        <div class="col-md-4">
                            <span style="color:#C9C9C9;font-size:12px;font-weight: bold;">
                                <img src="../../assets/img/dashboard/image.png" class="rounded-circle" alt="Cinque Terre" width="30" height="30" > 
                                Fedala Amira
                            </span>
                        </div>
                        <div class="col-md-4">
                            <a class="nav-link btn-magnify" style="color:#C9C9C9;font-size:12px;font-weight: bold;">
                                Numéro de téléphone
                            </a> 
                        </div>
                     </div>
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
        </div>
    </div>
    <!-- modal : ajouter un chauffeurs -->
    <div class="modal fade bd-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informations sur le chauffeur</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control"  placeholder="Nom" value="">
                             </div>
                        </div>
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" class="form-control" placeholder="Prénom" value="">
                            </div>
                        </div>
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Numéro de téléphone</label>
                                <input type="text" class="form-control" placeholder="Numéro de téléphone" value="">
                            </div>
                        </div>
                        <div class="col-md-12 pr-1">
                            <label for="exampleInputEmail1">Permis de conduire</label>
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