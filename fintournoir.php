<?php 
  session_start();

  //////
  
$SCORE1p=0;
$SCORE2p=0;
if(!empty($_POST['SCORE1p'])){
    
    
    if($_POST['SCORE1p']<1){
        $SCORE1p=0;
       
    }
    else
    setcookie('couk1p',$_POST['SCORE1p']);

    $SCORE1p=$_POST['SCORE1p'];
}
if(!empty($_POST['SCORE2p'])){
    if($_POST['SCORE2p']<1){
        $SCORE2p=0;
       
    }
    else
   
    setcookie('couk2p',$_POST['SCORE2p']);
    $SCORE2p=$_POST['SCORE2p'];
}

$champions='----';
$deuxieme='----';
$p_final='----';
if($SCORE1p>$SCORE2p){
$p_final=$_SESSION[' $petitfinal1'];

}else 
if($SCORE1p<$SCORE2p){
    $p_final=$_SESSION[' $petitfinal2'];
}else{
    $p_final='.....';
}
  ////////fin
  
$SCORE3F=0;
$SCORE4F=0;

if(!empty($_POST['SCORE3F'])){
   
    
    if($_POST['SCORE3F']<1){
        $SCORE3F=0;
       
    }
    else
    setcookie('couk3F',$_POST['SCORE3F']);
    $SCORE3F=$_POST['SCORE3F'];

}

if(!empty($_POST['SCORE4F'])){
    if($_POST['SCORE4F']<1){
        $SCORE4F=0;
       
    }else
    setcookie('couk4F',$_POST['SCORE4F']);
    $SCORE4F=$_POST['SCORE4F'];
}
if($SCORE3F>$SCORE4F){
$champions=$_SESSION['$califier'] ;
$deuxieme=$_SESSION['$califier1'];
}else
if($SCORE3F<$SCORE4F){
    $champions=$_SESSION['$califier1'];
    $deuxieme=$_SESSION['$califier'];
}

?>
      
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
      <title> accueil </title>
    <link rel="StyleSheet" href="2.css"> 
</head>

<body>

    <header role="header"> </header>
<div class="menu" >
   
    
    <div class="inner">
       
        <div class="m-left">
           
            <h1 class="logo">Tournoi</h1>

    
        </div>
        </div></div></header>
        <img src="pol.png"/>
        <center>
        <br>
            <div class="je" >
                <table  >
                    <thead>
                        <tr> 
                            <td>lot 1</td>
                            <td>lot 2</td>
                            <td>lot 3</td>
                            <td>lot4</td>
                        </tr>

                    </thead>
                    <tbody>
                        <tr> 
                            <td>Bresil</td>
                            <td>France</td>
                            <td>Espagne</td>
                            <td>Portugale</td>
                        </tr>
                        <tr>
                            <td>Argentine</td>
                            <td>italie</td>
                            <td>Allemagne</td>
                            <td>Haiti</td>
                        </tr>

                    </tbody>
                </table>

             </div>
             <form action="premiere_page.php" >
             <input type="submit" value=" recormencez le tirage" > 
            </form>

<BR>
<table>
        <h2> TIRAGE </h2>
        <thead>
            <tr> 
                <td>-------</td>
                <td>Groupe A</td>
                <td>Groupe B</td>
               
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>1 tete de serie </td>
                <td><?= $_SESSION['1tir2']?></td>
                <td><?= $_SESSION['1tir'] ?></td>
            
            </tr>
            <tr>
                <td>2 tete de serie</td>
                <td><?= $_SESSION['tira']?></td>
                <td><?=  $_SESSION['tira2']?></td>
            

            </tr>
            <tr>
                <td>3 tete de serie</td>
                <td><?= $_SESSION['tirb2']?></td>
                <td><?= $_SESSION['tirb'] ?></td>
            </tr>
            <tr><td>4 tete de serie</td>
                <td><?=$_SESSION['tirc2']?></td>
                <td><?=$_SESSION['tirc']?></td>
            </tr>
        </tbody>
        </table>
        </div>
<center>
<div > 
    
<div class="troi">
        <table>
            <h2> Groupe A</h2>
            <thead>
                <tr> 
                    
                    <td>Groupe A</td>
                    <td>Affiche</td>
                    <td>SCore</td>
                   
                </tr>
    
            </thead>
            <tbody>
                
                <tr>
                    <td>match1</td>
                    
                    <td><?= $_SESSION['1tir2']?> vs <?=$_SESSION['tira']?></td>
                    <td><form  method="POST" >
                     
                    <table>
                      <td><?=$_SESSION['$SCR']?></td>
                      <td><?=$_SESSION['$SCR2']?></td>
                      
                                         
                                       
                      </table>    
                 
</td>
<tr>
                    <td>match2</td>

                    <td><?=$_SESSION['tirb2']?> vs <?=$_SESSION['tirc2']?></td>
                    <td><form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR3']?></td>
                      <td><?=$_SESSION['$SCR4']?></td>
                      
                                         
                                       
                      </table>   
                   
                  
                  
</td>
</tr>
<tr>
                    <td>match3</td>
                    <td><?= $_SESSION['1tir2']?> vs <?=$_SESSION['tirb2'] ?></td>

                    <td><form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR5']?></td>
                      <td><?=$_SESSION['$SCR6']?></td>
                      
                                         
                                       
                      </table>   
                   
</td>
</tr>

                    <tr>
                    <td>match4</td>
                    <td><?=$_SESSION['tira']?> vs <?=$_SESSION['tirc2']?></td>
                    <td>
                    <form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR7']?></td>
                      <td><?=$_SESSION['$SCR8']?></td>
                      
                                         
                                       
                      </table>   
                    
           </td>
</tr>
<tr>
                    <td>match5</td>
                    <td><?= $_SESSION['1tir2']?> vs <?=$_SESSION['tirc2']?></td>
                    <td>
                    <form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR9']?></td>
                      <td><?=$_SESSION['$SCR10']?></td>
                      
                                         
                                       
                      </table>   
                   </td>

</tr>

<tr>
                    <td>match6</td>
                    <td> <?= $_SESSION['tira']?> vs <?=$_SESSION['tirb2']?> </td>
                    <td>
                    <form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR11']?></td>
                      <td><?=$_SESSION['$SCR12']?></td>
                      
                                         
                                       
                      </table>   
                    </td>

</tr>

                                </table>
                                   
            <div class="quatre">
            <table>
                <h2>Groupe B</h2>
                <thead>
                    <tr> 
                        
                        <td>Groupe B</td>
                        <td>Affiche</td>
                        <td>SCore</td>
                       
                    </tr>
        
                </thead>
                <tbody>
                                
                                <tr>
                    <td>match7</td>
                    
                    <td><?= $_SESSION['1tir']?> vs <?=$_SESSION['tira2']?></td>
                    <td><form  method="POST" >
                      
                    <table>
                      <td><?=$_SESSION['$SCRa']?></td>
                      <td><?=$_SESSION['$SCR2a']?></td>
                      
                                         
                                       
                      </table>   
                 
</td>
<tr>
                    <td>match8</td>
                    <td> <?= $_SESSION['tirb']?> vs <?= $_SESSION['tirc']?></td>
                    <td><form  method="POST" >
                   
                    <table>
                      <td><?=$_SESSION['$SCR3a']?></td>
                      <td><?=$_SESSION['$SCR4a']?></td>
                      
                                         
                                       
                      </table>  
                    
                  
</td>
</tr>

<tr>
                    <td>match9</td>
                    <td><?= $_SESSION['1tir']?> vs <?= $_SESSION['tirb']?> </td>

                    <td><form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR5a']?></td>
                      <td><?=$_SESSION['$SCR6a']?></td>
                      
                                         
                                       
                      </table>  
                 
</td>
</tr>
<tr>
                    <td>match10</td>
                    <td><?=$_SESSION['tira2']?> vs <?=$_SESSION['tirc']?> </td>
                    <td>
                    <form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR7a']?></td>
                      <td><?=$_SESSION['$SCR8a']?></td>
                      
                                         
                                       
                      </table>  
                
           </td></tr>
           
<tr>
                    <td>match11</td>
                    <td><?= $_SESSION['1tir']?> vs <?= $_SESSION['tirc']?>  </td>
                    <td>
                    <form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR9a']?></td>
                      <td><?=$_SESSION['$SCR10a']?></td>
                      
                                         
                                       
                      </table>  
                  </td>

</tr>

<tr>
                    <td>match12</td>
                    <td> <?=$_SESSION['tira2']?> vs <?= $_SESSION['tirb']?>  </td>
                    <td>
                    <form  method="POST" >
                        
                    <table>
                      <td><?=$_SESSION['$SCR11a']?></td>
                      <td><?=$_SESSION['$SCR12a']?></td>
                      
                                         
                                       
                      </table>  
                    </td>

</tr>

                                </table>


            <table>
                    <h2> Groupe A</h2>
                    <thead>
                        <tr> 
                            
                            <td>Groupe A</td>
                           
                           
                        </tr>
            
                    </thead>
                    <tbody>
                        <tr> 
                            
                            <td></td>
                            <td>match joue</td>
                            <td>match gagne</td>
                            <td>Match nul</td>
                            <td>match perdu</td>
                            <td>but pour</td>
                            <td>but encaiser</td>
                            <td>dif but</td>
                            <td>point</td>
                            <td>ekip</td>
                           
                        </tr>
                        <tr>
                            <td>premier</td>
                
                 <td><?=$_SESSION[' $mj']?></td>
                 <td><?=$_SESSION['$mg']?></td>
                 <td><?=$_SESSION['$mn']?></td>
                 <td><?=$_SESSION['   $mp']?></td>
                 <td><?=$_SESSION['$BP']?></td>
                 <td><?=$_SESSION[' $BC']?></td>
                 <td><?=$_SESSION['$dif']?></td>
                 <td><?=$_SESSION['  $PT']?></td>
              <td><?=$_SESSION['  $place1']?></td>
                        <tr>
                            <td>Deuxieme</td>
                                 
                 <td><?=$_SESSION[' $mj2']?></td>
                 <td><?=$_SESSION[' $mgg2']?></td>
                 <td><?=$_SESSION['$mn2']?></td>
                 <td><?=$_SESSION['$mp2']?></td>
                 <td><?=$_SESSION[' $BP2']?></td>
                 <td><?=$_SESSION['$BC2']?></td>
                 <td><?=$_SESSION[' $dif2']?></td>
                 <td><?=$_SESSION['$PT2']?></td>
              <td><?= $_SESSION[' $place2']?></td>
                        
                        </tr>
                      
                        
                        <tr>
                            <td>troisieme</td>
       
                            <td><?=$_SESSION['$mj3']?></td>
                 <td><?=$_SESSION['$mgg3']?></td>
                 <td><?=$_SESSION[' $mp3']?></td>
                 <td><?=$_SESSION['$mn3']?></td>
                 <td><?=$_SESSION['$BP3']?></td>
                 <td><?=$_SESSION['$BC3']?></td>
                 <td><?=$_SESSION['$dif3']?></td>
                 <td><?=$_SESSION['$PT3']?></td>
                 <td><?=$_SESSION['$place3']?></td>
                         
                        
            
                        </tr>
                        <tr>
                            <td>quatrieme</td>
           
                 <td><?= $_SESSION['  $mj4']?>
                 <td><?=$_SESSION[' $mgg4']?></td>
                 <td><?= $_SESSION['  $mp4']?></td>
                 <td><?=$_SESSION['  $mp4']?></td>
                 <td><?=$_SESSION[' $BP4']?></td>
                 <td><?=$_SESSION[' $BC4']?></td>
                 <td><?=$_SESSION['  $dif4']?></td>
                 <td><?=$_SESSION['  $PT4']?></td>
                 <td><?=$_SESSION[' $place4']?></td>
                        
            
                        </tr>
                       
                       
                    </tbody>
                    </table>





                    <table>
                                        <h2> Groupe B</h2>
                                        <thead>
                                            <tr> 
                                                
                                                <td>Groupe B </td>
                                               
                                               
                                            </tr>
                                
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                
                                                <td></td>
                                                <td>match joue</td>
                                                <td>match gagne</td>
                                                <td>Match nul</td>
                                                <td>match perdu</td>
                                                <td>but pour</td>
                                                <td>but encaiser</td>
                                                <td>dif but</td>
                                                <td>point</td>
                                                <td>ekip</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>premier</td>
                                
                                    
                                     <td><?=$_SESSION['  $mjx']?></td>
                                     <td><?=$_SESSION[' $mgx']?></td>
                                     <td><?=$_SESSION[' $mnx']?></td>
                                     <td><?=$_SESSION[' $mpx']?></td>
                                     <td><?=$_SESSION[' $BPx']?></td>
                                     <td><?=$_SESSION[' $BCx']?></td>
                                     <td><?=$_SESSION[' $difx']?></td>
                                     <td><?=$_SESSION['$PTx']?></td>
                                     <td><?=$_SESSION[' $place1x']?></td>
                                  
                                            <tr>
                                                <td>Deuxieme</td>
                          
                                          
                                                <td><?=$_SESSION['$mj2x']?></td>
                                                <td><?=$_SESSION[' $mgg2x']?></td>
                                     <td><?=$_SESSION[' $mn2x']?></td>
                                     <td><?=$_SESSION['$mp2x']?></td>
                                     <td><?=$_SESSION['$BP2x']?></td>
                                     <td><?=$_SESSION['$BC2x']?></td>
                                     <td><?=$_SESSION['$dif2x']?></td>
                                     <td><?=$_SESSION[' $PT2x']?></td>
                                     
                                     <td><?=$_SESSION['$place2x']?></td>
                                            </tr>
                                            <tr>
                                                <td>troisieme</td>
             
                                                <td><?=$_SESSION['$mj3x']?></td>
                                     <td><?=$_SESSION['$mgg3x']?></td>
                                     <td><?=$_SESSION['$mn3x']?></td>
                                     <td><?=$_SESSION['$mp3x']?></td>
                                     <td><?=$_SESSION['$BP3x']?></td>
                                     <td><?=$_SESSION[' $BC3x']?></td>
                                     <td><?=$_SESSION['$dif3x']?></td>
                                     <td><?=$_SESSION['$PT3x']?></td>
                                     <td><?=$_SESSION['$place3x']?></td>
                                             
                                            
                                
                                            </tr>
                                            <tr>
                                            <td>quatrieme</td>
                                         <td><?=$_SESSION[' $mj4x']?></td>
                                     <td><?=$_SESSION['$mgg4x']?></td>
                                     <td><?=$_SESSION['$mn4x']?></td>
                                     <td><?=$_SESSION[' $mp4x']?></td>
                                     <td><?=$_SESSION['$BP4x']?></td>
                                     <td><?=$_SESSION[' $BC4x']?></td>
                                     <td><?=$_SESSION[' $dif4x']?></td>
                                     <td><?=$_SESSION['$PT4x']?></td>
                                     <td><?=$_SESSION['$place4x']?></td>
                                            
                                
                                            </tr>
                                           
                                           
                                        </tbody>
                                        </table>

                                        <table>
                <h2>DEMI-FINAL</h2>
                <thead>
                    <tr> 
                        
                        <td>DEMI-FINAL</td>
                        <td>Affiche</td>
                        <td>SCore</td>
                       
                    </tr>
        
                </thead>
                                        
                <tr>
                    <td>match1</td>
                    
                    <td><?= $_SESSION['  $place1']?> vs <?=$_SESSION['$place2x']?></td>
                    
                
                    <td><form  method="POST" >
                        
                        <table>
                      <td><?=$_SESSION['$SCORE1d']?></td>
                      <td><?=$_SESSION['$SCORE2d']?></td>
                      
                                         
                                       
                      </table>    

                      
</td>

                                        <tr>
                    <td>match2</td>

                    <td><?=$_SESSION[' $place1x']?> vs <?=$_SESSION[' $place2']?></td>
                     
                    <td><form  method="POST" >
                        
                        <table>
                      <td><?=$_SESSION['$SCORE3d']?></td>
                      <td><?=$_SESSION['$SCORE4d']?></td>
                      
                                         
                                       
                      </table>    
            
</td>
</tr>


                            </table>
                                <table>
                            <h2>Petite FINAL</h2>
                <thead>
                    <tr> 
                        
                        <td>Petite FINAL</td>
                        <td>Affiche</td>
                        <td>SCore</td>
                       
                    </tr>
        
                </thead>
               

                <tr>
                    <td>match</td>
                    
                    <td><?= $_SESSION[' $petitfinal1']?> vs <?=$_SESSION[' $petitfinal2']?></td>
                    <td><form  method="POST" >
                    <?php if(isset($_POST['SCORE1p'])):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities($SCORE1p)?></td>
                                    <td><?=htmlentities($SCORE2p)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE1p" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE2p" style="width: 20px; height:10px"required/>
                   <?php endif;?>


</td>
                  
</tr>
                                
                            <table>
                            <h2>GRANDE FINAL</h2>
                <thead>
                    <tr> 
                        
                        <td>GRANDE FINAL</td>
                        <td>Affiche</td>
                        <td>SCore</td>
                       
                    </tr>
        
                </thead>
               

                <tr>
                    <td>match</td>
                    
                    <td><?=$_SESSION['$califier'] ?> vs <?=$_SESSION['$califier1']?></td>
                    <td><form  method="POST" >
                    <?php if(isset($_POST['SCORE3F']) ):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities($SCORE3F)?></td>
                                    <td><?=htmlentities($SCORE4F)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE3F" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE4F" style="width: 20px; height:10px"required/>
                   <?php endif;?>

                    </td>
                    
                            </table>
                            
<table>
<h2>bouton de validation et de modification</h2>
 <input type="submit" value="Valider/modifier">
                                </table>
                                <table>
                                    <tr><td> Equipe champions</td><td><?=$champions?></td></tr>
                               <tr> <td> Equipe deuxieme</td><td><?=$deuxieme?></td></tr>
                               <tr> <td> Equipe troisieme</td><td><?=$p_final?></td></tr>
                            </table>

                            <footer>

                            <h2>GRANDE champions ---- <?=$champions?>----</h2>
                            </footer>
                                </html>

                                  