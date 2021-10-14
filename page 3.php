      <?php 
      
      session_start();
   //////
   
$SCORE1d=0;
$SCORE2d=0;
if(!empty($_POST['SCORE1'])){
    
    
    if($_POST['SCORE1']<1){
        $SCORE1d=0;
       
    }
    else
    setcookie('coukd1',$_POST['SCORE1']);

    $SCORE1d=$_POST['SCORE1'];
}
if(!empty($_POST['SCORE2'])){
    if($_POST['SCORE2']<1){
        $SCORE2d=0;
       
    }
    else
   
    setcookie('coukd2',$_POST['SCORE2']);
    $SCORE2d=$_POST['SCORE2'];
}
///////////////////////
$_SESSION['$SCORE1d']=$SCORE1d;
$_SESSION['$SCORE2d']=$SCORE2d;

////////////////////
$mg1d=0;
$mg2d=0;
$mg3d=0;
$mg4d=0;

if($SCORE1d>$SCORE2d){
 
    $mg1d=1;
    $mg2d=0;
}
else if  ($SCORE1d<$SCORE2d) {
  
    $mg1d=0;
    $mg2d=1;

}
///////////////////

$SCORE3d=0;
$SCORE4d=0;

if(!empty($_POST['SCORE3'])){
   
    
    if($_POST['SCORE3']<1){
        $SCORE3d=0;
       
    }
    else
    setcookie('coukd3',$_POST['SCORE3']);
    $SCORE3d=$_POST['SCORE3'];

}

if(!empty($_POST['SCORE4'])){
    if($_POST['SCORE4']<1){
        $SCORE4d=0;
       
    }else
    setcookie('coukd4',$_POST['SCORE4']);
    $SCORE4d=$_POST['SCORE4'];


}



////////////////////

if($SCORE3d>$SCORE4d){
 
    $mg3d=1;
    $mg4d=0;
}
else if  ($SCORE3d<$SCORE4d) {
  
    $mg3d=0;
    $mg4d=1;

}

//////////////////////
if($mg1d==1){
    $califier= $_SESSION['  $place1'];
$petitfinal1=$_SESSION['$place2x'];

}else {
    $califier=  $_SESSION['$place2x'];
    $petitfinal1=$_SESSION['  $place1'];
}


if($mg3d==1){
    $califier1= $_SESSION[' $place1x'];
    $petitfinal2=$_SESSION[' $place2'];

}else {
    $califier1=$_SESSION[' $place2'];
    $petitfinal2=$_SESSION[' $place1x'];

}


/////

/////
$_SESSION['$SCORE3d']=$SCORE3d;
$_SESSION['$SCORE4d']=$SCORE4d;

/////////////////

////////////////////////
/////////////////////
$_SESSION['$califier']=$califier;
$_SESSION['$califier1']=$califier1;
$_SESSION[' $petitfinal2']= $petitfinal2;
$_SESSION[' $petitfinal1']= $petitfinal1;
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
                   
                    <?php if(isset($_POST['SCORE1'])    ):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities($SCORE1d)?></td>
                                    <td><?=htmlentities($SCORE2d)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE1" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE2" style="width: 20px; height:10px"required/>
                   <?php endif;?>
                 
</td>
<tr>
                    <td>match2</td>

                    <td><?=$_SESSION[' $place1x']?> vs <?=$_SESSION[' $place2']?></td>
                    <td><form  method="POST" >
                   
                    <?php if(isset($_POST['SCORE3']) ):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities($SCORE3d)?></td>
                                    <td><?=htmlentities($SCORE4d)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE3" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE4" style="width: 20px; height:10px"required/>
                   <?php endif;?>
                  
</td>
</tr>


                            </table>
                                 
<table>
<h2>bouton de validation et de modification</h2>
 <input type="submit" value="Valider/modifier">
                                </table>

                                 
                            <table>
                            <h2>Petit-FINALE</h2>
                <thead>
                    <tr> 
                        
                        <td>Petit-FINALE</td>
                        <td>Affiche</td>
                        <td>SCore</td>
                       
                    </tr>
        
                </thead>
                <tr>
                    <td>match</td>
                    
                    <td><?= $_SESSION[' $petitfinal1']?> vs <?=$_SESSION[' $petitfinal2']?></td>
                    <td><form  method="POST" >
                   
                    <td>   
             <a href="fintournoir.php">  clicker pour ajouter le score de la demie-final</a></td>
                            </table>
                                
                                
                            <table>
                            <h2>Grandes-FINALE</h2>
                <thead>
                    <tr> 
                        
                        <td>GRAND FINAL</td>
                        <td>Affiche</td>
                        <td>SCore</td>
                       
                    </tr>
        
                </thead>
               

                <tr>
                    <td>match1</td>
                    
                    <td><?=$_SESSION['$califier'] ?> vs <?=$_SESSION['$califier1']?></td>
                    <td><form  method="POST" >
                   
                    <td>   
             <a href="fintournoir.php">  clicker pour ajouter le score de la final</a></td>
                            </table>

           

                                </html>