<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ionic Basics</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js">
    </script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
    <script src="app.js" defer> </script>
</head>

  <body>
  <ion-app>


  <ion-header>
            <ion-toolbar color="primary">
                <ion-title>
                TEMV Clash Royale API teste 1.0
                </ion-title>
            </ion-toolbar>
        </ion-header>


        <ion-content class="ion-padding">
        <form id="formulario" name="formulario" method="post" action="pesquisa.php">
        
        <ion-item>
                <ion-label position="floating">Insira a tag do jogador (Sem o #)</ion-label>
                <ion-input id="tag" name="tag" type="text"></ion-input>
            </ion-item>
      
  <br />



<ion-row>
                    <ion-col>
                      
                  </ion-col> 
               <ion-col>
                <ion-button id="btnenviar" name="btnenviar" type="submit" value="Enviar Dados" >   </ion-icon> Reset </ion-button> 
              </ion-col>
             </ion-row>



  
</form>
</ion-content>

  
</body>
</ion-app>
