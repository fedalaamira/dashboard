

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
/*  dans le header vous devez activer la class  profil au lieu de dashboard (désactiver celui de dashboard) */ 

include('../../layout/header.html');
include('../../layout//sidbar.html');
  
  ?>

<div class="content" >
   
  <div class="row">
    <div class="col-md-4">
            <div class="card card-user">
              <div class="image"> 
              </div>
              <div class="card-body">
                <div class="author">
                 
                    <img class="avatar border-gray" src="../../assets/img/user/image.png" alt="..." onClick="triggerClick()" id="profileDisplay">

                    	<input type="file"  name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" >	 
			
        
                    <h5 class="title" style="color:#212529;">Fedala Amira</h5>
                    <p class="text-center"style="color:#9EA0A5;"> Casbah, Alger</p>
                  </a>
                
                </div>
                <div class="trait" style="  background-color: rgb(226, 222, 222); height: 1.2pt;"></div>
                <div class="row" style="padding-bottom:25px;">
                    <div class="col-md-6" >
                <div class="wrap">
                
                    <button class="button">Supprimer</button>
                  
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="wrap">
                      <button class="button">Valider</button>
                    
                    </div>
                  </div>
                  </div>
              </div>
           
            </div>
    </div>
            
        
   <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Modifiez Votre Profile</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control"  placeholder="Nom" value="">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" placeholder="Prénom" value="">
                      </div>
                    </div>
                 
                  </div> 
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Numéro De Télephone</label>
                        <input type="text" class="form-control" placeholder="Numéro De Télephone" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Addresse</label>
                        <input type="text" class="form-control" placeholder="adresse" value="">
                      </div>
                    </div>
                
                 
                    <div class="col-md-5 px-1">
                      <div class="form-group">
                        <label>Pays</label>
                        <input type="text" class="form-control" placeholder="Pays" value="">
                      </div>
                    </div>
                  </div>
                   
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      
                      <button type="submit" class="btn btn-secondry btn-round" style="background-color:#DCC209;">enregistrer</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

   </div>
  </div>
       
                    <!-- si utilisateur non vérifié -->
    
    <div class="row">
      <div class="col-md-11">
          <div class="card card-user" style="width:103%; margin-left:5vmin;">
              <div class="card-header">
                <h5 class="card-title"style="color: #424242;font-style: normal;font-weight: bold;font-size: 16px;line-height: 26px;">Vérifiez Votre Identité</h5>
                <div class="trait" style="  background-color: rgb(226, 222, 222); height: 0.5pt; width:100%;"></div>
                <div class="row" style="padding-top:3vmin;">
                    <div class="col-md-3 offset-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                        <label for="inlineRadio1"> Carte d’identité </label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                        <label for="inlineRadio2"> Passport </label>
                      </div>
                    </div>
                      <div class="col-md-3">
                      <div class="radio radio-inline">
                          <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
                          <label for="inlineRadio3"> Permis de Conduire </label>
                        </div>
                      </div>
                    
                  </div>
                </div>
                <div class="row" style="padding-top:3vmin;">
                   
                  <form id="file-upload-form" action="">
	                  <input id="file-upload" type="file" name="fileUpload" />
	                  <label for="file-upload" id="file-drag" style="height:39px;">
                     <img src="../../assets/img/user/paperclip.png" style="width:20px;height:20px;"/>
                       Ajoutez une photo ou faites glisser une version scannée de votre carte identité ou passport
		
		                  <br /><br />
                  	</label>
	
	                  <progress id="file-progress" value="0">
		                  <span>0</span>%
	                  </progress>
	
	                  <output for="file-upload" id="messages"></output>
                  </form>
                </div>
                 <div class="row">
                    <div class="update ml-auto mr-auto">
                      
                      <button type="submit" class="btn btn-secondry btn-round" style="background-color:#DCC209;">Valider</button>
                    </div>
                    </div>
                    <!-- si utilisateur vérifié -->
                    <div class="row">
                 <span style="color:#219E6C; font-style: normal; font-weight: bold;font-size: 16px;line-height: 22px;margin-left:25%;margin-top:2%;margin-bottom:3%;">
                 <img src="../../assets/img/user/check.png"/>
                 Félicitation, Amira. Vous êtes un transporteur vérifié.
               </span>
                    </div>
        
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
