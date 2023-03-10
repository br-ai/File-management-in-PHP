
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <!-- Title -->
    <title>File Uploader</title>
    <!-- Title end -->


    

    <!-- Import Css file -->
    <link href="/static/css/bootstra.min.css" rel="stylesheet" type="text/css">
    <link href="/static/css/jqueryscripttop.css" rel="stylesheet" type="text/css">
    <link href="/static/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/static/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css"/>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    

    <!-- CSS only -->



    <!-- Import Icon -->
    <link rel="icon" href="/static/img/drop.png" type="image/png">

</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

    <!-- header start -->
    <div class="header">

        <!-- left header -->
        <div class="header__left">
            <div class="sidebarr">
                <div class="blocker"></div>
                <div class="content">

                   

                    <div class="sidebarRow online">
                        
                        <h4>Bienvenu</h4>

                    </div>
                    <br>

                    <div class="sidebarRow" onclick="location.href='goto_home()';">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1c87c9"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                        <h4>Acceuil</h4>
                    </div>

                    <div class="sidebarRow" onclick="location.href='historique';">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1c87c9"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.25 2.52.77-1.28-3.52-2.09V8z"/></svg>
                        <h4>Historiques</h4>
                    </div>

                    <div class="sidebarRow" onclick="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1c87c9"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
                        <h4>Verifier Coherence</h4>
                    </div>

                    <div class="sidebarRow" onclick="">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#1c87c9"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M3,13c0-2.45,1.76-4.47,4.08-4.91L5.59,9.59L7,11l4-4.01L7,3L5.59,4.41l1.58,1.58l0,0.06C3.7,6.46,1,9.42,1,13 c0,3.87,3.13,7,7,7h3v-2H8C5.24,18,3,15.76,3,13z"/><path d="M13,13v7h9v-7H13z M20,18h-5v-3h5V18z"/><rect height="7" width="9" x="13" y="4"/></g></g></svg>
                        <h4>Contacter support</h4>
                    </div>

            
                    <div class="sidebarRow">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#1c87c9"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><g><circle cx="10" cy="8" r="4"/><path d="M10.67,13.02C10.45,13.01,10.23,13,10,13c-2.42,0-4.68,0.67-6.61,1.82C2.51,15.34,2,16.32,2,17.35V20h9.26 C10.47,18.87,10,17.49,10,16C10,14.93,10.25,13.93,10.67,13.02z"/><path d="M20.75,16c0-0.22-0.03-0.42-0.06-0.63l1.14-1.01l-1-1.73l-1.45,0.49c-0.32-0.27-0.68-0.48-1.08-0.63L18,11h-2l-0.3,1.49 c-0.4,0.15-0.76,0.36-1.08,0.63l-1.45-0.49l-1,1.73l1.14,1.01c-0.03,0.21-0.06,0.41-0.06,0.63s0.03,0.42,0.06,0.63l-1.14,1.01 l1,1.73l1.45-0.49c0.32,0.27,0.68,0.48,1.08,0.63L16,21h2l0.3-1.49c0.4-0.15,0.76-0.36,1.08-0.63l1.45,0.49l1-1.73l-1.14-1.01 C20.72,16.42,20.75,16.22,20.75,16z M17,18c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S18.1,18,17,18z"/></g></g></svg>
                        <h4>Mon compte</h4>
                    </div>
                    <br> <br> <a href="{% url 'logout' %}" class="learn_more2" style="display:inline-block;">Deconnexion</a>

             

                </div>
            </div>

            <a onclick="toggle()">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
                </svg>
            </a>

        </div>
        <!-- middle -->
        <div class="header__middle" id="header__middle">
            <img src="/static/img/drop.png">
        </div>
        <!-- right -->
        <div class="header__right">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><rect fill="none" height="24" width="24" y="0"/><path d="M7,20h4c0,1.1-0.9,2-2,2S7,21.1,7,20z M5,19h8v-2H5V19z M16.5,9.5c0,3.82-2.66,5.86-3.77,6.5H5.27 C4.16,15.36,1.5,13.32,1.5,9.5C1.5,5.36,4.86,2,9,2S16.5,5.36,16.5,9.5z M14.5,9.5C14.5,6.47,12.03,4,9,4S3.5,6.47,3.5,9.5 c0,2.47,1.49,3.89,2.35,4.5h6.3C13.01,13.39,14.5,11.97,14.5,9.5z M21.37,7.37L20,8l1.37,0.63L22,10l0.63-1.37L24,8l-1.37-0.63L22,6 L21.37,7.37z M19,6l0.94-2.06L22,3l-2.06-0.94L19,0l-0.94,2.06L16,3l2.06,0.94L19,6z"/></svg>
        </div>
    </div>
    <!-- header end -->


    <div class="main__body">
        <?php include("db_connect.php");?>

        <div class="container" class="dropzone" id="dropzone-area">
            <h1>Deposez des fichiers (*CSV, *XLS)</h1>
            <p> Le Systeme de gestion de fichier vous permet d'importer des fichiers *csv ou *xls et d'effectuer une verification de la coherence du fichier, en plus de visualiser directement les notes.</p>
            <div class="form__container">
                <form enctype="multipart/form-data" action="createFile.php" method="post" class="form" id="form">
                    <input type="file" name="file" accept=".csv,.xlsx" hidden id="file-input" />
                    <i class='bx bx-cloud-upload icon'></i>
                    <p class="helper__text">Browse File to Upload</p>
                    <button type="submit" id="submit" name="import" class="btn-submit">Go</button>
                </form>
                <section class="progress-area" id="progress-area">
                </section>
                <section class="uploaded-area" id="uploaded-area">
                </section>
            </div>
        </div>

        <!-- js -->
        <script src="main.js"></script>

    </div>
    <div class="container">
    <h1> Historique d'importation </h1>
    <?php


$query = "SELECT id, nomFichier, ue, type, date_importation, etat, etatExecuter FROM fichierTemporaire";
$result = $conn->query($query);
?>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<table border="1" cellspacing="0" cellpadding="10" id="customers">
  <tr>
  
    <th>id</th>
    <th>nomFichier</th>
    <th>ue</th>
    <th>type</th>
    <th>date_importation</th>
    <th>action</th>

  </tr>
<?php
if ($result->num_rows > 0) {

  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
  
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['nomFichier']; ?> </td>
   <td><?php echo $data['ue']; ?> </td>
   <td><?php echo $data['type']; ?> </td>
   <td><?php echo $data['date_importation']; ?> </td>
   <td>
    

<?php if($data['etatExecuter']==1) : ?>
    <button class = "actionV">executer</button>


<?php else : ?>
    <a href="execute.php?varname=<?php echo $data['id'] ?>">
  <button class = "action">executer</button>
</a>
<?php endif; ?>




  <a href="uploads/<?php echo $data['nomFichier'] ?>">
  <button class = "action">telecharger</button></a>

  <?php if($data['etat']==1) : ?>

    
        <button class = "actionV">Valider</button>
        
        
        <button class = "actionV">supprimer</button>
        </td>
        
    <?php else : ?>
        <a href="valide.php?varname=<?php echo $data['id'] ?>">
        <button class = "action">valider</button>
        </a>
        <a href="supprime.php?varname=<?php echo $data['id'] ?>">
        <button class = "action">supprimer</button>
        </a></td>
    <?php endif; ?>

  
 <tr>
 <?php
  }} else { ?>
    

 <?php } ?>
  </table>
  <br/><br/><br/><br/>
    </div>

    <div class="info">
        

    </div>

    


    <script>
        const sidebar = document.querySelector('.sidebarr');
        sidebar.querySelector('.blocker').onclick = hide;
        function show() { // swipe right
        sidebar.classList.add('visible');
        document.body.style.overflow = 'hidden';
        }
        function hide() { // by blocker click, swipe left, or url change
        sidebar.classList.remove('visible');
        document.body.style.overflow = '';
        }
        function toggle() {
        sidebar.classList.contains('visible') ? hide() : show();
        }
    window.toggle = toggle;
    </script>

    <script>
        function goto_register() {
            window.location.href = 'https://www.imobbis.com/n/register';
        }

        function goto_login() {
            window.location.href = 'https://www.imobbis.com/login';
        }

        function goto_home() {
            window.location.href = 'https://www.imobbis.com/';
        }

    </script>
</body>
</html>
