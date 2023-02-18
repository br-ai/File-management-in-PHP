<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=essai;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$link = mysqli_connect("localhost", "root", "", "essai");


$query = "SELECT * FROM ue";
$ueStatement = $db->prepare($query);
$ueStatement->execute();
$ues = $ueStatement->fetchAll();

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['file']['size'] <= 1000000)
        {

                
                

                $file = $_FILES["file"]["tmp_name"];
                $file_open = fopen($file,"r");
                // $file_open = readfile($file);
                // echo $file_open;
                while(($column = fgetcsv($file_open, 10000, ",")) !== false)
                        {
                   
                        $matricule = $csv[0];
                        $nom = $csv[1];
                        $note = $csv[2];
                        mysqli_query($link, "INSERT into fichiervalide(Matricule,Nom,Note)
                        values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "')");
                        }
                



                if(str_contains($_FILES['file']['name'], "CC") !== false){
                        // echo "Coherence 1 verifiée! Le type epreuve est CC(controle continu)";
                        echo "<script>
                                alert('Coherence 1 verifiée! Le type epreuve est CC(controle continu)');
                                </script>";
                                foreach($ues as $ue){
                                       
                                        if(str_contains($_FILES['file']['name'], $ue['nomUE']) !== false){
                                                // echo "Coherence 2 verifiée! Le nom epreuve est {$ue['nomUE']}";
                                                $fileName = $_FILES["file"]["name"];
                                                $ue = $ue['nomUE'];
                                                $type = "CC";
                                                $insert = $db->query("INSERT INTO fichierTemporaire(nomFichier, ue, type, date_importation) VALUES ('".$fileName."', '".$ue."' , '".$type."',  NOW())");
                                                echo "<script>
                                                        alert('Coherence 2 verifiée !');
                                                        window.location.href='test.php';
                                                        </script>";
                                        }
                                        
                                }
                
                } 

                elseif(str_contains($_FILES['file']['name'], "TP") !== false){
                        echo "<script>
                                alert('Coherence 1 verifiée! Le type epreuve est TP(travaux pratique)');
                                </script>";
                                foreach($ues as $ue){
                                       
                                        if(str_contains($_FILES['file']['name'], $ue['nomUE']) !== false){
                                                // echo "Coherence 2 verifiée! Le nom epreuve est {$ue['nomUE']}";
                                                $fileName = $_FILES["file"]["name"];
                                                $ue = $ue['nomUE'];
                                                $type = "TP";
                                                $insert = $db->query("INSERT INTO fichierTemporaire(nomFichier, ue, type, date_importation) VALUES ('".$fileName."', '".$ue."' , '".$type."',  NOW())");
                                                echo "<script>
                                                        alert('Coherence 2 verifiée !');
                                                        window.location.href='test.php';
                                                        </script>";
                                        }
                                        
                                }
                
                }

                elseif(str_contains($_FILES['file']['name'], "EE") !== false){
                        echo "<script>
                                alert('Coherence 1 verifiée! Le type epreuve est EE(Examen Ecris)');
                                </script>";
                                foreach($ues as $ue){
                                       
                                        if(str_contains($_FILES['file']['name'], $ue['nomUE']) !== false){
                                                // echo "Coherence 2 verifiée! Le nom epreuve est {$ue['nomUE']}";
                                                $fileName = $_FILES["file"]["name"];
                                                $ue = $ue['nomUE'];
                                                $type = "EE";
                                                $insert = $db->query("INSERT INTO fichierTemporaire(nomFichier, ue, type, date_importation) VALUES ('".$fileName."', '".$ue."' , '".$type."',  NOW())");
                                                echo "<script>
                                                        alert('Coherence 2 verifiée !');
                                                        window.location.href='test.php';
                                                        </script>";
                                        }
                                        
                                }
                
                }

                else{
                        echo "<script>
                                alert('Coherence NON verifiée reesayez !');
                                window.location.href='test.php';
                                </script>";
                }
                


                $fileInfo = pathinfo($_FILES['file']['name']);
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . basename($_FILES['file']['name']));
                // echo "L'envoi a bien été effectué !";

                
        }
}

// Ecriture de la requête
// $fileName = $_FILES["file"]["name"];
// $ue = substr($fileName,0,6);
// $type = substr($fileName,7,2);
// $insert = $db->query("INSERT INTO fichierTemporaire(nomFichier, ue, type, date_importation) VALUES ('".$fileName."', '".$ue."' , '".$type."',  NOW())");

// Préparation
// $insertData = $db->prepare($sqlQuery);

// // Exécution ! La recette est maintenant en base de données
// $insertData->execute([
//     // 'id' => 'Cassoulet',
//     'nomFichier' => $fileName,
//     'ue' => substr($fileName,0,6),
//     'type' => substr($fileName,7,9),
//     // 'date_importation' => date('y-m-d H:i:s'), 
// ]);


// echo "<script>
// alert('Information bien posté, veuillez valider!');
// window.location.href='test.php';
// </script>";