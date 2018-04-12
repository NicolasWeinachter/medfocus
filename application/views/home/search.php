<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/medfocus.css"); ?>" >
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.3.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <link rel='stylesheet' href="<?php echo base_url("assets/calendar/fullcalendar.css"); ?>">
    <script src="<?php echo base_url("assets/calendar/lib/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/calendar/lib/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/calendar/fullcalendar.js"); ?>"></script>
    <script>
        function afficher_cacher(id)
            {
                if(document.getElementById(id).style.display=="none")
                {
                    document.getElementById(id).style.display="inline";
                    document.getElementById('bouton_'+id).innerHTML='Cacher les commentaires sur ce médecin.';
                }
                else
                {
                    document.getElementById(id).style.display="none";
                    document.getElementById('bouton_'+id).innerHTML='Afficher les commentaires sur ce médecin.';
                }
                return true;
            };
    </script>
    <script>$(function() {
        $('#calendar').fullCalendar({
            defaultView: 'agendaFourDay',
    groupByResource: true,
    header: {
      left: 'prev,next',
      center: 'title',
      right: 'agendaDay,agendaFourDay'
    },
    views: {
      agendaFourDay: {
        type: 'agenda',
        duration: { days: 4 }
      }
    },
  });
    });</script>
    <title>MedFocus</title>
</head>

<body>
    <div class="page d-flex">
        <header class="container1 container1_search">
            <div id="head">
                <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-light" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
                        <li><a class="btn btn-outline-light" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
                    </ul>
                </div>
            </div> 
            <nav class="navbar col-md-12" id="navbar_search">
  			<form class="form-inline">
				<input class="form-control mr-sm-2" id ="spécialité" type="search" placeholder="Spécialité, praticien, établissement..." aria-label="Search">
				<input class="form-control mr-sm-2" id="location" type="search" placeholder="Où ?" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit" value="search">Rechercher</button>
             </form>
            </nav> 
            <table class="col-md-12 background-white">
                 <tr>
                     <td>
                        <p class="col-md-12">Filtrer par</p>
                     </td>
                    <td>
                        <select class="custom-select col-md-10" id="dispo">
                            <option value="0">Disponibilité:</option>
                            <option value="1">Aujourd'hui</option>
                            <option value="2">Dans les 3 prochains jours</option>
                            <option value="3">Dans les deux prochaines semaines</option>
                            <option value="4">Dans le mois</option>                        
                        </select>
                    </td>
                    <td>
                        <select class="custom-select col-md-10" id="honoraires">
                            <option value="0">Honoraires:</option>
                            <option value="1">Pas de dépassement d'honoraires</option>
                            <option value="2">Avec dépassement d'honoraires</option>                      
                        </select>
                    </td>
                    <td>
                        <select class="custom-select col-md-10" id="proximité">
                            <option value="0">Proximité:</option>
                            <option value="1">Dans un rayon d'un kilomètre</option>
                            <option value="2">Dans le quartier/arrondissement</option>
                            <option value="3">Dans la ville</option> 
                            <option value="4">Dans le département</option>                     
                        </select>
                    </td>
                    <td>
                        <select class="custom-select col-md-10" id="lumière">
                            <option value="0">Critère de lumière:</option>
                            <option value="1">Qualité de l'accueil</option>
                            <option value="2">Temps d'attente (hors urgences)</option>                   
                        </select>
                    </td>

                 </tr>
             </table>
        </header>
        <main class="site-content col-md-12">

            <div class="container_lumiere col-md-11">
                <h2 class="title_h2 lumiere_title">
                    Lumière sur ces <!--variable--> nom_de_la_spécialité qui rayonnent près de chez vous
                </h2>
                <div class="d-flex flex-row lumiere">
                    <div class="col-md-3">
                        <div class="d-flex flex-row">
                            <div class="col-md-6">
                                <!-- variable-->
                                <img class="col-md-8 photo_profile_med_lum" src="<?php echo base_url('/assets/images/website/photo_profile_med_default.png'); ?>" >
                            </div>
                            <div class="col-md-6"> 
                                <!--variable-->
                                <p class="light"><b>Nom</b> Prénom</p>
                                <p class="light">CP, Ville</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-row">
                            <div class="col-md-6">
                                <!-- variable-->
                                <img class="col-md-8 photo_profile_med_lum" src="<?php echo base_url('/assets/images/website/photo_profile_med_default.png'); ?>" >
                            </div>
                            <div class="col-md-6"> 
                                <!--variable-->
                                <p class="light"><b>Nom</b> Prénom</p>
                                <p class="light">CP, Ville</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-row">
                            <div class="col-md-6">
                                <!-- variable-->
                                <img class="col-md-8 photo_profile_med_lum" src="<?php echo base_url('/assets/images/website/photo_profile_med_default.png'); ?>" >
                            </div>
                            <div class="col-md-6"> 
                                <!--variable-->
                                <p class="light"><b>Nom</b> Prénom</p>
                                <p class="light">CP, Ville</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-row">
                            <div class="col-md-6">
                                <!-- variable-->
                                <img class="col-md-8 photo_profile_med_lum" src="<?php echo base_url('/assets/images/website/photo_profile_med_default.png'); ?>" >
                            </div>
                            <div class="col-md-6"> 
                                <!--variable-->
                                <p class="light"><b>Nom</b> Prénom</p>
                                <p class="light">CP, Ville</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7 border d-flex flex-row">
                <div class="col-md-5 p-2">
                    <div class="row">
                        <!-- variable-->
                        <img class="col-md-8 photo_profile_med" src="<?php echo base_url('/assets/images/website/photo_profile_med_default.png'); ?>" > 
                        <!--variable-->
                        <div class="col-md-4 nom_prenom_spe_adresse">
                            <p class="light"><b>Nom</b> Prénom</p> 
                            <p class="light">Spécialité</p>
                            <br>
                            <p class="light">Adresse</p>
                        </div>
                    </div>
                    <div class="row lumiere">
                        <!--variable-->
                        <p class="light col-md-12">Honoraire :</p> <br>
                        <p class="light col-md-12">Propreté :</p> <br>
                        <p class="light col-md-12">Qualité de l'accueil :</p> <br>
                        <p class="light col-md-12">Ponctualité (hors urgences) : </p>
                        <p class="bouton lien-normal aff_comm" id="bouton_texte" onclick="javascript:afficher_cacher('texte');">Afficher les commentaires sur ce médecin.</p>
                                <div id="texte" class="texte col-md-12">
                                <p class="light">Premier commentaire</p>
                                <p class="light">Deuxième commentaire</p>
                                <p class="light">Troisième commentaire</p>
                                <p class="light">Quatrième commentaire</p>
                                <p class="light"><a class="lien-normal" href="<?php echo site_url("home/profil_doc_rdv"); ?>">Plus d'infos</a></p>
                                </div>
                        <p>
                        <script type="text/javascript">
                            //<!--
                            afficher_cacher('texte');
                            //-->
                        </script>
                    </div>
                </div>
                <!--variable-->
                <div class="col-md-6.5 calendar2 p-2" id='calendar'></div>
            </div>
        </main>

        <footer>
		    <div id="containerFin">
		        <img class="logo-fin" src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px>
		        <table class="table">
			        <thead>
				        <tr>
					
                            <th scope="col">MedFocus</th>
                            <th scope="col">CGU</th>
                            <th scope="col">Professionnel de santé ?</th>
				        </tr>
			        </thead>
 			        <tbody>
 				        <tr>
				            <td>
                                <a class =" lien-normal text-blanc" href = "<?php echo site_url("home/about"); ?>">A propos de nous<br></a>
                                <a class =" lien-normal text-blanc" href ="<?php echo site_url("home/faq"); ?>">Questions fréquentes<br></a>
                                <a class =" lien-normal text-blanc" href="<?php echo site_url("home/recrutement"); ?>">Recrutement<br></a>
                                <a class =" lien-normal text-blanc" href="<?php echo site_url("home/contact"); ?>">Contact</a>
                            </td>
                            <td>
                                <a class =" lien-normal text-blanc" href = "<?php echo site_url("home/cgu"); ?>">Conditions générales d'utilisation<br></a>
      				        </td> 
                            <td>
                                <a class =" lien-normal text-blanc text-blanc" href ="<?php echo site_url("home/services"); ?>">Nos services<br></a>
                                <a class =" lien-normal text-blanc" href ="<?php echo site_url("home/tarifs"); ?>">Nos tarifs<br></a>
                                <a class =" lien-normal text-blanc" href ="<?php echo site_url("home/eds"); ?>">Etablissements de santé<br></a>
                            </td>
   				        </tr>
  			        </tbody>
                </table>
            </div>      
	    </footer>
    </div>
</body>
</html>