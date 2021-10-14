<?php



$gro=1;
$gro2=2;
$tira1= rand($gro,$gro2);


session_start();
if($tira1==1){
  $_SESSION['1tir']='Bresil';
  $_SESSION['1tir2']='ARG';
}
else{
  $_SESSION['1tir2']='Bresil';
  $_SESSION['1tir']='ARG';

}
//tir pour deuxieme lot

  
$groa=3;
$groa2=4;
$tira2= rand($groa,$groa2);


if($tira2==3){
  $_SESSION['tira']='France';
  $_SESSION['tira2']='Italie';
}
else{
    $_SESSION['tira2']='France';
    $_SESSION['tira']='Italie';

}
//pour trisieme lot;
$grob=6;
$grob2=7;
$tira3= rand($grob,$grob2);


if($tira3==7){
    $_SESSION['tirb']='Allemagne';
    $_SESSION['tirb2']='Espagne';
}
else{
    $_SESSION['tirb2']='Allemagne';
    $_SESSION['tirb']='Espagne';

}
//pour 4emelot;
$groc=5;
$groc2=6;
$tira4= rand($groc,$groc2);


if($tira4==5){
    $_SESSION['tirc']='Portugale';
    $_SESSION['tirc2']='Haiti';
}
else{
    $_SESSION['tirc2']='Portugale';
    $_SESSION['tirc']='Haiti';

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
             <form action="deuxieme_page.php" >
             <input type="submit" value="tirage" > 
            </form>

<div class="deux">
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
                <td></td>
                <td></td>
            
            </tr>
            <tr>
                <td>2 tete de serie</td>
                <td></td>
                <td></td>
            

            </tr>
            <tr>
                <td>3 tete de serie</td>
                <td></td>
                <td></td>
            </tr>
            <tr><td>4 tete de serie</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        </table>
        </div>
    </center>
    <div  class="xxx">
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
                    <td></td>
                    <td></td>
                
                </tr>
                <tr>
                    <td>match2</td>
                    <td></td>
                    <td></td>
                
    
                </tr>
                <tr>
                    <td>match3</td>
                    <td></td>
                    <td></td>
                
    
                </tr>
                <tr>
                    <td>match4</td>
                    <td></td>
                    <td></td>
                
    
                </tr>
                <tr>
                    <td>match5</td>
                    <td></td>
                    <td></td>
                
    
                </tr>
                <tr>
                    <td>match</td>
                    <td></td>
                    <td></td>
                </tr>
               
            </tbody>
            </table></div>
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
                        <td></td>
                        <td></td>
                    
                    </tr>
                    <tr>
                        <td>match8</td>
                        <td></td>
                        <td></td>
                    
        
                    </tr>
                    <tr>
                        <td>match9</td>
                        <td></td>
                        <td></td>
                    
        
                    </tr>
                    <tr>
                        <td>match10</td>
                        <td></td>
                        <td></td>
                    
        
                    </tr>
                    <tr>
                        <td>match11</td>
                        <td></td>
                        <td></td>
                    
        
                    </tr>
                    <tr>
                        <td>match12</td>
                        <td></td>
                        <td></td>
                    </tr>
                   
                </tbody>
                </table>
            </div>
        </div>
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
                            <td>but contre</td>
                            <td>dif but</td>
                            <td>point</td>
                            <td>perdu</td>
                           
                        </tr>
                        <tr>
                            <td>premier</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        
                        </tr>
                        <tr>
                            <td>Deuxieme</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        
                        
            
                        </tr>
                        <tr>
                            <td>troisieme</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        
            
                        </tr>
                        <tr>
                            <td>quatrieme</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        
            
                        </tr>
                       
                       
                    </tbody>
                    </table>
                    <table>
                        <h2> Groupe B</h2>
                        <thead>
                            <tr> 
                                
                                <td>Groupe B</td>
                               
                               
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
                                <td>but contre</td>
                                <td>dif but</td>
                                <td>point</td>
                                <td>perdu</td>
                               
                            </tr>
                            <tr>
                                <td>premier</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                            </tr>
                            <tr>
                                <td>Deuxieme</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                            
                
                            </tr>
                            <tr>
                                <td>troisieme</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                
                            </tr>
                            <tr>
                                <td>quatrieme</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                
                            </tr>
                           
                           
                        </tbody>
                        </table>
                        <table>
                            <h2>demi-final</h2>
                            <thead>
                                <tr> 
                                    
                                    <td>demi-final</td>
                                    <td>Affiche</td>
                                    <td>SCore</td>
                                   
                                </tr>
                    
                            </thead>
                            <tbody>
                                <tr>
                                    <td>match13</td>
                                    <td></td>
                                    <td></td>
                                
                                </tr>
                                <tr>
                                    <td>match14</td>
                                    <td></td>
                                    <td></td>

                                    </tr>
                                    </tbody>
                                    </table>
                                  <table>
                            <h2>Petite-final</h2>
                            <thead>
                                <tr> 
                                    
                                    <td>Troisiem-final</td>
                                    <td>Affiche</td>
                                    <td>SCore</td>
                                   
                                </tr>
                    
                            </thead>
                            <tbody>
                                <tr>
                                    <td>match15</td>
                                    <td></td>
                                    <td></td>
                                    </tr></tbody>
                                    </table>
                                <center>  <table>
                            <h2>Final</h2>
                            <thead>
                                <tr> 
                                    
                                    <td>final</td>
                                    <td>Affiche</td>
                                    <td>SCore</td>
                                   
                                </tr>
                    
                            </thead>
                            <tbody>
                                <tr>
                                    <td>match16</td>
                                    <td></td>
                                    <td></td>
                                    </tr></tbody></table></center>  
                                    

    </html>
    