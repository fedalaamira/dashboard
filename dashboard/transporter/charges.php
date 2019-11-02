
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/css/bootstrap-datetimepicker.css" integrity="sha256-SuYKgtmruRUippYns8Nl81BZFAmFN4oViu1cI0otrVc=" crossorigin="anonymous" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/css/bootstrap-datetimepicker.min.css" integrity="sha256-8riFEEbGWNOr0/7pWjMYUWHgozz3+9w3ShpQUrt2BM8=" crossorigin="anonymous" />
</head>

<body>
  
    
  <?php 
/*  dans le header vous devez activer la class  charges au lieu de dashboard (désactiver celui de dashboard) */ 

include('../../layout/header.html');
include('../../layout/sidbar.html');
  
  ?>

  <div class="content">
   <div class="col-md-12" >
      <div class="card card-stats" style="height:100%;width:100%;">
        <div class="card-body ">
          <p class="card-category text-left" style=" color:#424242;font-style: normal;font-weight: bold;font-size: 18px;line-height: 22px;">
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
                        <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" readonly />
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div> 
              </div>
              <script>
    $("#date").datepicker({
        dateFormat: "MM - DD - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });
                </script>
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

      </div>
    </div>
 
          
    <div class="col-md-12" >
      <div class="card card-stats" style="height:100%;width:100%;">
        <div class="card-body ">
          <div class="row">
            <div class="col-7 col-md-12">
              <div class="numbers">
                <p class="card-category text-left" style=" color:#424242;font-style: normal;font-weight: bold;font-size: 18px;line-height: 22px;">
                  Mes Charges
                </p>
                       
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:6%; margin-bottom:3%;"  data-toggle="modal" data-target="#exampleModal">
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
          <div class="trait" style="  background-color: rgb(226, 222, 222); height: 0.4pt;"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal: plus de détails -->
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
            <div class="alert alert-info">
              <span>
                <div class="row">
                  <div class=col-md-6>
                    <div class="row">
                      <a style="color:#C4C4C4;">Date de début</a>
                    </div>
                    <div class="row">
                      <a style="color:black; padding-top:1vmin;">01/01/2019</a>
                    </div>
                  </div>
                  <div class=col-md-6>
                    <div class="row">
                      <a style="color:#C4C4C4;" >Date de fin</a>
                    </div>
                    <div class="row">
                      <a style="color:black; padding-top:1vmin;">02/01/2019</a>
                    </div>
                  </div>
                </div>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="alert alert-info">
              <span>
                <div class="row">
                  <div class=col-md-6>
                    <div class="row">
                      <a style="color:#C4C4C4;">Type charge</a>
                    </div>
                    <div class="row">
                      <a style="color:black; padding-top:1vmin;">LTL/FTL</a>
                    </div>
                  </div>
                  <div class=col-md-6>
                    <div class="row">
                      <a style="color:#C4C4C4;" >Type camion</a>
                    </div>
                    <div class="row">
                      <a style="color:black; padding-top:1vmin;">Plateau</a>
                    </div>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/js/bootstrap-datetimepicker.min.js" integrity="sha256-YWql6rZy8OFt926alOdxO0ievDdKQXDb/032Un0rbTE=" crossorigin="anonymous"></script>

</body>

</html>
