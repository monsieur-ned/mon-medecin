<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--style css-->
    <link rel="stylesheet" href="static/css/style.css">
    <!--style boostrap-->
    <link rel="stylesheet" href="static/Bootstrap/css/bootstrap.css">
    <!--font awsome-->
    <link rel="stylesheet" href="static/fontawesome/css/all.css">
    <title>Mon Médecin</title>

    <style type="text/css">
       
    </style>
</head>
<body>

    
    <!--menu nav-->
    <div class="container-fluid nav-bg">

        <div class="container">

            <div class="row nav py-2 ">

                <div class="col-md-7">
                    <h1>Mon Médecin</h1>
                </div>

               
                
                <div class="col-md-5  d-flex justify-content-evenly">
                         <a href="#">Acceuil</a>
                    
                        <a href="#about">A propos</a>  

                        <a href="departement.html">Département</a> 

                        <a href="#f-rendez_vous">Contact</a>
                </div>

                <button id="btn" onclick="Toggle()">
                    <i class="fa fa-bars"></i>
                </button>
                        
            </div>
        </div>
    </div> 

    <!--menu deroulement-->

    <div id="menu" class="">
        <a href="#">Acceuil</a>
        
        <a href="#about">A propos</a>  

        <a href="departement.html">Département</a> 

        <a href="#f-rendez_vous">Contact</a>
    </div>

    <!--header-->
    
    <div class="container-fluid header p-0"  id="btn_float">
        <div class="container-fluid header-color">
            <div class="container">
                <div  class="header-t d-none d-md-block d-lg-block">
                    <h3>Le meilleur endroit pour les soins de qualités</h3>
        
                    <p class="para-1">La qualité et l'excellence de notre clinique fait la différence.</p>
        
                        <a href="#f-rendez_vous" class="btn-contact">Contacter-nous</a>

                </div>
               </div>
        </div>
    </div>

    <!--Content-->

<div class="container mt-4">
    <div class="row" id="about">
        <div class="col-md-6 about">
            <h3>A propos</h3>

            <p>Mon Médecin est un centre de hospitalier opérant dans diverses domaines médicales, avec son expérience il a pu traiter
                plusieurs cas de maladies, faisant recours aussi aux conseils pour une santé meilleure et parfaite!
                D'où notre devise votre santé notre préocupation.
            </p>

                <a href="#" class="mb-2">En savoir plus</a>
        </div>

        <div class="col-md-5 img-medecin">
            <img src="static/img/fd6c952feb11db441b1a1821db1bad02.jpg" alt="image d'une équipe médicale">
        </div>
    </div>
</div> 

<div class="container">
    <div class="row  mt-4 mb-2">
        <h3 style="color: #fff; background-color: #083B32; max-width: 250px; padding: 5px; margin-left: 10px;">Nos spécialistes</h3>
    </div>

    <div class="row text-center doc-img">
        <div class="col-md-4">
            <img src="static/img/docteur-heureux-restant-bras-croises.jpg" alt="image docteur">
            <h6>Dr Christian KEURTIS </h6>
            <small>Ophtamologue</small>
        </div>

        <div class="col-md-4">
            <img src="static/img/jeune-femme-pharmacien-2.jpg" alt="image médecin">
            <h6>Dr Estelle JONHSON </h6>
            <small>Pédiatre</small>
        </div>

        <div class="col-md-4">
            <img src="static/img/medecin-africain-.jpg" alt="image docteur">
            <h6>Dr Darvely GYDEM</h6>
            <small>Denstiste</small>
           
        </div>
    </div>
</div>

<!--button float-->
<div class="btn-float">
    <a href="#btn_float">
        <i class="fa-solid fa-arrow-up-long"></i>
    </a>
</div>

<!--galérie photos-->

<div class="container mt-4"> 
    <div class="row mb-2">
        <h3 style="color: #fff; background-color: #083B32; max-width: 250px; padding: 5px; margin-left: 10px;">Notre clinique</h3>
    </div>

  
    <div class="row ">  
          <img class="col-md-4 mt-1"  src="static/img/pexels-pixabay-247786.jpg" alt="">
          <img class="col-md-4 mt-1" src="static/img/african-american.jpg" alt=""> 
          <img class="col-md-4 mt-1" src="static/img/pexels-pixabay-236380.jpg" alt=""> 
          
    </div>
  
    <div class="row mt-3">  
      <img class="col-md-4 mt-1"  src="static/img/pexels-erik-mclean-9538601.jpg" alt="">
      <img class="col-md-4 mt-1" src="static/img/femme-medecin-afro-americaine-.jpg" alt="">
      <img class="col-md-4 mt-1" src="static/img/4cd80b1b16e0138d5cf7f3f65c89fcf8.jpg" alt="">  
  </div>
</div>
  <!--Formulaire-->
 <div class="container mt-4">
     <div class="row mb-2">
         <h3 style="color: #fff; background-color: #083B32; max-width: 290px; padding: 5px; margin-left: 12px;">Prendre rendez-vous</h3>
     </div>

     <div class="row">
             <img class="col-md-6 mb-2" id="img-contact" src="static/img/concept-rendu-3d-du-recepteur-telephonique-.jpg" alt="" style="object-fit: cover;">
    
         <div class="col-md-6" id="f-rendez_vous">
             <form action="">
                 <div class="form-group">
                    <label for="" class="form-label">Nom complet: <span style="color: red;">*</span></label>
                    <input type="text" name="" id="" class="form-control" required="" autocomplete="off">
                 </div>
                
                 <div class="form-group">
                    <label for="" class="form-label">Age:<span style="color: red;">*</span></label>
                    <input type="text" name="" id="" class="form-control"required="" autocomplete="off">
                 </div>
                
                 <div class="form-group">
                    <label for="" class="form-label">Date du rendez-vous:<span style="color: red;">*</span></label>
                    <input type="date" name="" id="" class="form-control"required="" autocomplete="off">
                 </div>
               
                 <div class="form-group">
                    <label for="" class="form-label">Heure du rendez-vous:<span style="color: red;">*</span></label>
                     <input type="time" name="" id="" class="form-control"required="" autocomplete="off">
                 </div>
                
                 <div class="form-group mb-3">
                    <label for=""classform-label>Motif:<span style="color: red;">*</span> </label>
                     <textarea name="" id=""class="form-control"required="" autocomplete="off" ></textarea>
                 </div>
                <input type="submit" name="" id="" style="background-color: #083B32; padding: 8px; color: #fff;border-radius: 3px; border: none; max-width: 150px;" value="Envoyer">
             </form>
         </div>
     </div>
 </div>

 <!--footer-->

 <div class="container-fluid mt-4 bg-dark pt-3">
     <div class="container">
         <div class="row">
            <div class="col-md-6 text-muted footer adresse">
                <div class="col-md-6">
                   <h6>Mon Médecin</h6>
                </div>
                
                <div class="col-md-6">
                   <strong>
                       <i class="fa-solid fa-location-dot"></i> 01 rue Limba/Diata
                   </strong>
                </div>
               
                <div class="col-md-6">
                   <strong>
                       <i class="fa-solid fa-phone"></i> +242 06 603 80 29
                   </strong>

                   <strong>
                    <i class="fa-solide fa"></i> Ouvert tous les jours de 06h à 22h 
                  </strong>
                </div>
            </div>
   
            <div class="col-md-6 block-reseaux">
   
               <a href="#" class="icone-resaux">
                   <i class="fab fa-facebook-f square"></i>
               </a>
   
               <a href="#" class="icone-resaux">
                   <i class="fab fa-telegram-plane square"></i>
               </a>

               <a href="#" class="icone-resaux">
                <i class="fab fa-whatsapp square"></i>
              </a>
   
               <a href="#" class="icone-resaux">
                   <i class="fab fa-instagram square"></i>
               </a>
   
           </div>
         </div>
     </div>

     <div class="row text-center text-light p-1 mt-2" style="background-color:#000;">
        <div class="col-md-12">
            <small>Copyrigth&copy;GOOD TECH-2022</small>
        </div>
     </div>   
 </div>

 <!--java script-->
 <script>
     const btn=document.getElementById("btn")
     let menu=document.getElementById("menu")

     function Toggle(){
         menu.classList.toggle("active")
     }
 </script>
</body>
</html>