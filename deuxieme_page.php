<?php


session_start();
//Score macht 1.
$SCORE1=0;
$SCORE2=0;
if(!empty($_POST['SCORE1'])){
    
    
    if($_POST['SCORE1']<1){
        $SCORE1=0;
       
    }
    else
    setcookie('couk1',$_POST['SCORE1']);

    $SCORE1=$_POST['SCORE1'];
}
if(!empty($_POST['SCORE2'])){
    if($_POST['SCORE2']<1){
        $SCORE2=0;
       
    }
    else
   
    setcookie('couk2',$_POST['SCORE2']);
    $SCORE2=$_POST['SCORE2'];
}

if($SCORE2>$SCORE1){
     $mg1=3;
    $mgd=1;
    $mga=0;
     $mg1b=0;
     $Mn=0;
     $bp1=$SCORE2;
     $bc1=$SCORE1;  
     //mach
     
}
else if  ($SCORE2<$SCORE1) {
    $mg1b=3;
    $mgd=0;
    $mga=1;
    $mg1=0;
    $bp1=$SCORE2;
    $bc1=$SCORE1; 
    $Mn=0;
    

}
else{
    $mga=0;
    $mgd=0;
    $mg1b=1;
    $Mn=1;
    $mg1=1;
    $bp1=0;
    $bc1=0 ;


}
//Score macht 2.

$SCORE3=0;
$SCORE4=0;

if(!empty($_POST['SCORE3'])){
   
    
    if($_POST['SCORE3']<1){
        $SCORE3=0;
       
    }
    else
    setcookie('couk3',$_POST['SCORE3']);
    $SCORE3=$_POST['SCORE3'];

}

if(!empty($_POST['SCORE4'])){
    if($_POST['SCORE4']<1){
        $SCORE4=0;
       
    }else
    setcookie('couk4',$_POST['SCORE4']);
    $SCORE4=$_POST['SCORE4'];
}

if($SCORE4>$SCORE3){
    $mg2=3;
    $mgj=1;
    $mg2b=0;
    $mgg=0;
    $Mn2=0;
    $bp2=$SCORE4;
    $bc2=$SCORE3;  
}
else if  ($SCORE4<$SCORE3) {
   $mg2=0;
   $mgj=0;
   $mg2b=3;
   $mgg=1;
   $bp2=$SCORE4;
   $bc2=$SCORE3;  
   $Mn2=0;
   

}
else{
    $mgj=0;
   $Mn2=1;
   $mg2b=1;
   $mg2=1;
   $bp2=0;
   $bc2=0 ;
   $mgg=0;

}
//Score macht 3.

$SCORE5=0;
$SCORE6=0;
if(!empty($_POST['SCORE5'])){
    if($_POST['SCORE5']<1){
        $SCORE5=0;
       
    }else
    setcookie('couk5',$_POST['SCORE5']);
    $SCORE5=$_POST['SCORE5'];
}



if(!empty($_POST['SCORE6'])){
    if($_POST['SCORE6']<1){
        $SCORE6=0;
       
    }else
    setcookie('couk6',$_POST['SCORE6']);
    $SCORE6=$_POST['SCORE6'];
}

if($SCORE6>$SCORE5){
    $mg3=3;
    $mgh=1;
    $mgb=0;
    $mg3b=0;
    $Mn3=0;
    $bp3=$SCORE6;
    $bc3=$SCORE5;  
}
else if  ($SCORE6<$SCORE5) {
   $mg3b=3;
   $mgb=1;
   $mg3=0;
   $mgh=0;
   $bp3=$SCORE6;
   $bc3=$SCORE5; 
   $Mn3=0;

}
else 
{   $mgh=0;
    $mgb=0;
   $Mn3=1;
   $mg3b=1;
   $mg3=1;
   $bp3=0;
   $bc3=0 ;


}

//Score macht 4.

$SCORE7=0;
$SCORE8=0;
if(!empty($_POST['SCORE7'])){
    if($_POST['SCORE7']<1){
        $SCORE7=0;
       
    }else
    setcookie('couk7',$_POST['SCORE7']);
    $SCORE7=$_POST['SCORE7'];
}

if(!empty($_POST['SCORE8'])){
    if($_POST['SCORE8']<1){
        $SCORE8=0;
       
    } else
    setcookie('couk8',$_POST['SCORE8']);
    $SCORE8=$_POST['SCORE8'];
}
if($SCORE8>$SCORE7){
    $mg4=3;
    $mg4b=0;
    $mgl=1;
    $mge=0;
    $Mn4=0;
    $bp4=$SCORE8;
    $bc4=$SCORE7;  
}
else if  ($SCORE8<$SCORE7) {
   $mg4b=3;
   $mge=1;
   $mg4=0;
   $mgl=0;
   $bp4=$SCORE8;
   $bc4=$SCORE7; 
   $Mn4=0;

}
else{
   $Mn4=1;
   $mge=0;
   $mg4b=1;
   $mg4=1;
   $bp4=0;
   $bc4=0 ;

   $mgl=0;
}

//Score macht 5.

$SCORE9=0;
$SCORE10=0;
if(!empty($_POST['SCORE9'])){
    if($_POST['SCORE9']<1){
        $SCORE9=0;
       
    }else
    setcookie('couk9',$_POST['SCORE9']);
    $SCORE9=$_POST['SCORE9'];
}


if(!empty($_POST['SCORE10'])){
    if($_POST['SCORE10']<1){
        $SCORE10=0;
       
    }else
    setcookie('couk10',$_POST['SCORE10']);
    $SCORE10=$_POST['SCORE10'];
}

if($SCORE10>$SCORE9){
    $mg5=3;
    $mgk=1;
    $mg5b=0;
    $Mn5=0;
    $bp5=$SCORE10;
    $bc5=$SCORE9; 
    $mgc=0; 
}
else if  ($SCORE10<$SCORE9) {
   $mg5b=3;
   $mgc=1;
   $mgk=0;
   $mg5=0;
   $bp5=$SCORE10;
   $bc5=$SCORE9; 
   $Mn5=0;
   

}
else {
    $mgk=0;
    $mgc=0;
    $mg5b=1;
   $Mn5=1;
   $mg5=1;
   $bp5=0;
   $bc5=0 ;


}

//Score macht 6.


$SCORE15=0;
$SCORE16=0;
if(!empty($_POST['SCORE15'])){
    if($_POST['SCORE15']<1){
        $SCORE15=0;
       
    }else
    setcookie('couk15',$_POST['SCORE15']);
    $SCORE15=$_POST['SCORE15'];
}

if(!empty($_POST['SCORE16'])){
    if($_POST['SCORE16']<1){
        $SCORE16=0;
       
    }else
    setcookie('couk16',$_POST['SCORE16']);
    $SCORE16=$_POST['SCORE16'];
}

if($SCORE16>$SCORE15){
    $mg6=3;
    $mgi=1;
    $mgf=0;
    $mg6b=0;
    $Mn6=0;
    $bp6=$SCORE16;
    $bc6=$SCORE15;  
}
else if  ($SCORE16<$SCORE15) {
   $mg6b=3;
   $mgi=0;
   $mgf=1;
   $mg6=0;
   $bp6=$SCORE16;
   $bc6=$SCORE15; 
   $Mn6=0;

}
else {
   $Mn6=1;
   $mg6b=1;
   $mgi=0;
   $mgf=0;
   $mg6=0;
   $bp6=0;
   $bc6=0 ;


}
//////////////////////
$_SESSION['$SCR']=$SCORE1;
$_SESSION['$SCR2']=$SCORE2;
$_SESSION['$SCR3']=$SCORE3;
$_SESSION['$SCR4']=$SCORE4;
$_SESSION['$SCR5']=$SCORE5 ;
$_SESSION['$SCR6']=$SCORE6;
$_SESSION['$SCR7']=$SCORE7;
$_SESSION['$SCR8']=$SCORE8;
$_SESSION['$SCR9']=$SCORE9;
$_SESSION['$SCR10']=$SCORE10;
$_SESSION['$SCR11']=$SCORE15;
$_SESSION['$SCR12']=$SCORE16;
/////////////////////
// but pour les equipe et but encaiser et pttotal.
//pour prem
$bup=$SCORE1+$SCORE5 + $SCORE9;
$buc=$SCORE2+$SCORE6+$SCORE10;
$mgt1= $mg1b+ $mg3b+ $mg5b;
//pour 2
$bup2=$SCORE2+$SCORE7+$SCORE15;
$buc2=$SCORE1+$SCORE8+$SCORE16;
$mgt2= $mg1+ $mg4b+$mg6b;
//pour 3
$bup3=$SCORE3+$SCORE6+$SCORE16;
$buc3=$SCORE4+$SCORE5+$SCORE15;
$mgt3=$mg2b+ $mg3+$mg6;
//pr4
$bup4=$SCORE4+$SCORE8+$SCORE10;
$buc4=$SCORE3+$SCORE7+$SCORE9;
$mgt4= $mg2+$mg5+$mg4;
// Fin but pour les equipe et but encaiser
// new


$numbers= array($mgt1,$mgt2,$mgt3,$mgt4);
rsort($numbers);
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++){
 $numbers[$x];
 
}
// si li prem
if($mgt1==$numbers[$x=0]){
    $place1= $_SESSION['1tir2'];
    $mj=4;
    $mg=$mga+$mgb+$mgc;
    $mp=3-$mg;
    $mn=$Mn2+$Mn3+$Mn5;
    $BP=$bup;
    $BC=$buc;
    if($BP>$BC){
        $dif=$BP-$BC;
    }else
    $dif=$BC-$BP;

$PT=$mgt1;
} 
else
if($mgt2==$numbers[$x=0]){
    $place1= $_SESSION['tira'];
    $mj=4;
    $mg=$mgd+$mge+$mgf;
    $mp=3-$mg;
    $mn=$Mn+$Mn4+$Mn6;
    $BP=$bup2;
    $BC=$buc2;
    if($BP>$BC){
        $dif=$BP-$BC;
    }else
    $dif=$BC-$BP;

    $PT=$mgt2;
}else// POur scor3
if($mgt3==$numbers[$x=0]){
    $place1= $_SESSION['tirb2'];
    $mj=4;
    $mg=$mgg+$mgh+$mgi;;
    $mp=3-$mg;
    $mn=$Mn2+$Mn3+$Mn6;
    $BP=$bup3;
    $BC=$buc3;
    if($BP>$BC){
        $dif=$BP-$BC;
    }else
    $dif=$BC-$BP;

    $PT=$mgt3;
}
else
if($mgt4==$numbers[$x=0]){
    $place1=$_SESSION['tirc2'];
    $mj=4;
    $mg=$mgj+$mgk+$mgl;;
    $mn=$Mn2+$Mn4+$Mn5;
    $mp=3-$mgg4;
    $BP=$bup4;
    $BC=$buc4;
    if($BP>$BC){
        $dif=$BP-$BC;
    }else
    $dif=$BC-$BP;

    $PT=$mgt4;
}
$_SESSION['  $place1']=  $place1;

$_SESSION[' $mj']= $mj;
$_SESSION['$mg']=$mg;
$_SESSION['$mn']=$mn;
$_SESSION['   $mp']=   $mp;
$_SESSION['$BP']=$BP;
$_SESSION[' $BC']=$BC;
$_SESSION['$dif']=$dif;
$_SESSION['  $PT']=  $PT;
//////fin 0
if($mgt1==$numbers[$x=1]){
    $place2= $_SESSION['1tir2'];
    $mj2=4;
    $mgg2=$mga+$mgb+$mgc;
  
    $mp2=3-$mgg2;
    $mn2=$Mn2+$Mn3+$Mn5;
    $BP2=$bup;
    $BC2=$buc;
    if($BP2>$BC2){
        $dif2=$BP2-$BC2;
    }else
    $dif2=$BC2-$BP2;

$PT2=$mgt1;
} 
else
if($mgt2==$numbers[$x=1]){
    $place2= $_SESSION['tira'];
    $mj2=4;
    $mgg2=$mgd+$mge+$mgf;
    $mp2=3-$mgg2;
    $mn2=$Mn+$Mn4+$Mn6;
    $BP2=$bup2;
    $BC2=$buc2;
    if($BP2>$BC2){
        $dif2=$BP2-$BC2;
    }else
    $dif2=$BC2-$BP2;

    $PT2=$mgt2;
}else

if($mgt3==$numbers[$x=1]){
    $place2= $_SESSION['tirb2'];
    $mj2=4;
    $mgg2=$mgg+$mgh+$mgi;;
    $mp2=3-$mgg2;
    $mn2=$Mn2+$Mn3+$Mn6;
   
    $BP2=$bup3;
    $BC2=$buc3;
    if($BP2>$BC2){
        $dif2=$BP2-$BC2;
    }else
    $dif2=$BC2-$BP2;

    $PT2=$mgt3;
}else
if($mgt4==$numbers[$x=1]){
    $place2=$_SESSION['tirc2'];
    $mj2=3;
    $mgg2=$mgj+$mgk+$mgl;;
    $mn2=$Mn2+$Mn4+$Mn5;
    $mp2=3-$mgg2;
    $mn2=3-($mgg2+$mp2);
   
    $BP2=$bup4;
    $BC2=$buc4;
    if($BP2>$BC2){
        $dif2=$BP2-$BC2;
    }else
    $dif2=$BC2-$BP2;

    $PT2=$mgt4;
}
$_SESSION[' $place2']=$place2;
$_SESSION[' $mj2']=  $mj2;
$_SESSION[' $mgg2']=  $mgg2;
$_SESSION['$mn2']=$mn2 ;
$_SESSION['$mp2']=$mp2 ;
$_SESSION['$mn2']= $mn2;
$_SESSION[' $BP2']=$BP2 ;
$_SESSION['$BC2']=$BC2 ;
$_SESSION[' $dif2']=$dif2;
$_SESSION['$PT2']=$PT2 ;


////fin pour 1

///pour2
if($mgt1==$numbers[$x=2]){
    $place3= $_SESSION['1tir2'];
    $mj3=4;
    $mgg3=$mga+$mgb+$mgc;
   
    $mp3=3-$mgg3;
    $mn3=$Mn2+$Mn3+$Mn5;
    
    $BP3=$bup;
    $BC3=$buc;
    if($BP3>$BC3){
        $dif3=$BP3-$BC3;
    }else
    $dif3=$BC3-$BP3;

$PT3=$mgt1;
}  else
if($mgt2==$numbers[$x=2]){
    $place3= $_SESSION['tira'];
    $mj3=4;
    $mgg3=$mgd+$mge+$mgf;
    $mn3=$Mn+$Mn4+$Mn6;
    $mp3=3-($mgg3+ $mn3);
    $BP3=$bup2;
    $BC3=$buc2;
    if($BP3>$BC3){
        $dif3=$BP3-$BC3;
    }else
    $dif3=$BC3-$BP3;

    $PT3=$mgt2;
}else
if($mgt3==$numbers[$x=2]){
    $place3= $_SESSION['tirb2'];
    $mj3=4;
    $mgg3=$mgg+$mgh+$mgi;;
    $mp3=3-$mgg3;
    $mn3=$Mn2+$Mn3+$Mn6;
    $BP3=$bup3;
    $BC3=$buc3;
    if($BP3>$BC3){
        $dif3=$BP3-$BC3;
    }else
    $dif3=$BC3-$BP3;

    $PT3=$mgt3;
}else

if($mgt4==$numbers[$x=2]){
    $place3=$_SESSION['tirc2'];
    $mj3=4;
    $mgg3=$mgj+$mgk+$mgl;;
    $mp3=3-$mgg3;
    $mn3=$Mn+$Mn4+$Mn6;
    $BP3=$bup4;
    $BC3=$buc4;
    if($BP3>$BC3){
        $dif3=$BP3-$BC3;
    }else
    $dif3=$BC3-$BP3;

    $PT3=$mgt4;
}
$_SESSION['$place3']=$place3;
$_SESSION['$mj3']=$mj3;
$_SESSION['$mgg3']=$mgg3;
$_SESSION[' $mp3']= $mp3;
$_SESSION['$mn3']=$mn3;
$_SESSION['$BP3']=$BP3;
$_SESSION['$BC3']=$BC3;
$_SESSION['$dif3']=    $dif3;
$_SESSION['$PT3']=$PT3;
//// 

///pour 3
if($mgt2==$numbers[$x=3]){
    $place4= $_SESSION['tira'];
    $mj4=4;
    $mgg4=$mgd+$mge+$mgf;
  
    $mn4=$Mn+$Mn4+$Mn6;
    $mp4=3-($mgg4+ $mn4);
    $BP4=$bup2;
    $BC4=$buc2;
    if($BP4>$BC4){
        $dif4=$BP4-$BC4;
    }else
    $dif4=$BC4-$BP4;

    $PT4=$mgt2;
}else
if($mgt1==$numbers[$x=3]){
    $place4= $_SESSION['1tir2'];
    $mj4=4;
    $mgg4=$mga+$mgb+$mgc;
    $mp4=3-$mgg4;
    $mn4=$Mn2+$mn3+$Mn5;;
    $BP4=$bup;
    $BC4=$buc;
    if($BP4>$BC4){
        $dif4=$BP4-$BC4;
    }else
    $dif4=$BC4-$BP4;

$PT4=$mgt1;
}else
if($mgt3==$numbers[$x=3]){
    $place4= $_SESSION['tirb2'];
    $mj4=4;
    $mgg4=$mgg+$mgh+$mgi;;
    $mp4=3-$mgg4;
    $mn4=$Mn2+$Mn3+$Mn6;
    $BP4=$bup3;
    $BC4=$buc3;
    if($BP4>$BC4){
        $dif4=$BP4-$BC4;
    }else
    $dif4=$BC4-$BP4;

    $PT4=$mgt3;
}else
if($mgt4==$numbers[$x=3]){
    $place4=$_SESSION['tirc2'];
    $mj4=4;
    $mgg4=$mgj+$mgk+$mgl;;
    $mp4=3-$mgg4;
    $mn4=$Mn2+$Mn4+$Mn5;
    $BP4=$bup4;
    $BC4=$buc4;
    if($BP4>$BC4){
        $dif4=$BP4-$BC4;
    }else
    $dif4=$BC4-$BP4;

    $PT4=$mgt4;
}
$_SESSION[' $place4']= $place4;
$_SESSION['  $mj4']= $mj4;
$_SESSION[' $mgg4']= $mgg4;
$_SESSION['  $mp4']= $mp4;
$_SESSION[' $mn4']=  $mn4;
$_SESSION[' $BP4']= $BP4;
$_SESSION[' $BC4']= $BC4;
$_SESSION['  $dif4']=  $dif4;
$_SESSION['  $PT4']=  $PT4;

//////pour deuxieme poul


//Score macht 1.
$SCORE1a=0;
$SCORE2a=0;
if(!empty($_POST['SCORE1a'])){
    
    
    if($_POST['SCORE1a']<1){
        $SCORE1a=0;
       
    }
    else
    setcookie('couk1a',$_POST['SCORE1a']);

    $SCORE1a=$_POST['SCORE1a'];
}
if(!empty($_POST['SCORE2a'])){
    if($_POST['SCORE2a']<1){
        $SCORE2a=0;
       
    }
    else
   
    setcookie('couk2a',$_POST['SCORE2a']);
    $SCORE2a=$_POST['SCORE2a'];
}

if($SCORE2a>$SCORE1a){
    $mg1x=3;
   $mgdx=1;
   $mgax=0;
    $mg1bx=0;
    $Mnx=0;
    $bp1x=$SCORE2a;
    $bc1x=$SCORE1a;  
    //mach
    
}
else if  ($SCORE2a<$SCORE1a) {
   $mg1bx=3;
   $mgdx=0;
   $mgax=1;
   $mg1x=0;
   $bp1x=$SCORE2a;
   $bc1x=$SCORE1a; 
   $Mnx=0;
   

}
else{
   $mgax=0;
   $mgdx=0;
   $mg1bx=1;
   $Mnx=1;
   $mg1x=1;
   $bp1x=$SCORE2a;
   $bc1x=$SCORE1a; 


}
//Score macht 2.

$SCORE3a=0;
$SCORE4a=0;
if(!empty($_POST['SCORE3a'])){
    
    
    if($_POST['SCORE3a']<1){
        $SCORE3a=0;
       
    }
    else
    setcookie('couk3a',$_POST['SCORE3a']);

    $SCORE3a=$_POST['SCORE3a'];
}
if(!empty($_POST['SCORE4a'])){
    if($_POST['SCORE4a']<1){
        $SCORE4a=0;
       
    }
    else
   
    setcookie('couk4a',$_POST['SCORE4a']);
    $SCORE4a=$_POST['SCORE4a'];
}

if($SCORE4a>$SCORE3a){
    $mg2x=3;
    $mgjx=1;
    $mg2bx=0;
    $mggx=0;
    $Mn2x=0;
    $bp2x=$SCORE4a;
    $bc2x=$SCORE3a;  
}
else if  ($SCORE4a<$SCORE3a) {
   $mg2x=0;
   $mgjx=0;
   $mg2bx=3;
   $mggx=1;
   $bp2x=$SCORE4a;
   $bc2x=$SCORE3a;  
   $Mn2x=0;
   

}
else{
    $mgjx=0;
   $Mn2x=1;
   $mg2bx=1;
   $mg2x=1;
   $bp2x=$SCORE4a;
   $bc2x=$SCORE3a;  
   $mggx=0;

}
//Score macht 3.

$SCORE5a=0;
$SCORE6a=0;
if(!empty($_POST['SCORE5a'])){
    if($_POST['SCORE5a']<1){
        $SCORE5a=0;    
    }else
    setcookie('couk5a',$_POST['SCORE5a']);
    $SCORE5a=$_POST['SCORE5a'];
}
if(!empty($_POST['SCORE6a'])){
    if($_POST['SCORE6a']<1){
        $SCORE6a=0;
       
    }else
    setcookie('couk6a',$_POST['SCORE6a']);
    $SCORE6a=$_POST['SCORE6a'];
}
if($SCORE6a>$SCORE5a){
    $mg3x=3;
    $mghx=1;
    $mgbx=0;
    $mg3bx=0;
    $Mn3x=0;
    $bp3x=$SCORE6a;
    $bc3x=$SCORE5a;  
}
else if  ($SCORE6a<$SCORE5a) {
   $mg3bx=3;
   $mgbx=1;
   $mg3x=0;
   $mghx=0;
   $bp3x=$SCORE6a;
   $bc3x=$SCORE5a; 
   $Mn3x=0;

}
else 
{   $mghx=0;
    $mgbx=0;
   $Mn3x=1;
   $mg3bx=1;
   $mg3x=1;
   $bp3x=$SCORE6a;
   $bc3x=$SCORE5a; 
  
}
//Score macht 4.

$SCORE7a=0;
$SCORE8a=0;
if(!empty($_POST['SCORE7a'])){
    if($_POST['SCORE7a']<1){
        $SCORE7a=0;
       
    }else
    setcookie('couk7a',$_POST['SCORE7a']);
    $SCORE7a=$_POST['SCORE7a'];
}

if(!empty($_POST['SCORE8a'])){
    if($_POST['SCORE8a']<1){
        $SCORE8a=0;
       
    } else
    setcookie('couk8a',$_POST['SCORE8a']);
    $SCORE8a=$_POST['SCORE8a'];
}
if($SCORE8a>$SCORE7a){
    $mg4x=3;
    $mg4bx=0;
    $mglx=1;
    $mgex=0;
    $Mn4x=0;
    $bp4x=$SCORE8a;
    $bc4x=$SCORE7a;  
}
else if  ($SCORE8a<$SCORE7a) {
   $mg4bx=3;
   $mgex=1;
   $mg4x=0;
   $mglx=0;
   $bp4x=$SCORE8a;
   $bc4x=$SCORE7a; 
   $Mn4x=0;

}
else{
   $Mn4x=1;
   $mgex=0;
   $mg4bx=1;
   $mg4x=1;
   $bp4x=0;
   $bc4x=0 ;
   $mglx=0;
}


//Score macht 5.


$SCORE9a=0;
$SCORE10a=0;
if(!empty($_POST['SCORE9a'])){
    if($_POST['SCORE9a']<1){
        $SCORE9a=0;
       
    }else
    setcookie('couk9a',$_POST['SCORE9a']);
    $SCORE9a=$_POST['SCORE9a'];
}
if(!empty($_POST['SCORE10a'])){
    if($_POST['SCORE10a']<1){
        $SCORE10a=0;
       
    }else
    setcookie('couk10a',$_POST['SCORE10a']);
    $SCORE10a=$_POST['SCORE10a'];
}

if($SCORE10a>$SCORE9a){
    $mg5x=3;
    $mgkx=1;
    $mg5bx=0;
    $Mn5x=0;
    $bp5x=$SCORE10a;
    $bc5x=$SCORE9a; 
    $mgcx=0; 
}
else if  ($SCORE10a<$SCORE9a) {
   $mg5bx=3;
   $mgcx=1;
   $mgkx=0;
   $mg5x=0;
   $bp5x=$SCORE10a;
   $bc5x=$SCORE9a; 
   $Mn5x=0;
   

}
else {
    $mgkx=0;
    $mgcx=0;
    $mg5bx=1;
   $Mn5x=1;
   $mg5x=1;
   $bp5x=0;
   $bc5x=0 ;


}

//Score macht 6.


$SCORE15a=0;
$SCORE16a=0;
if(!empty($_POST['SCORE15a'])){
    if($_POST['SCORE15a']<1){
        $SCORE15a=0;
       
    }else
    setcookie('couk15a',$_POST['SCORE15a']);
    $SCORE15a=$_POST['SCORE15a'];
}

if(!empty($_POST['SCORE16a'])){
    if($_POST['SCORE16a']<1){
        $SCORE16a=0;
       
    }else
    setcookie('couk16a',$_POST['SCORE16a']);
    $SCORE16a=$_POST['SCORE16a'];
}

if($SCORE16a>$SCORE15a){
    $mg6x=3;
    $mgix=1;
    $mgfx=0;
    $mg6bx=0;
    $Mn6x=0;
    $bp6x=$SCORE16a;
    $bc6x=$SCORE15a;  
}
else if  ($SCORE16a<$SCORE15a) {
   $mg6bx=3;
   $mgix=0;
   $mgfx=1;
   $mg6x=0;
   $bp6x=$SCORE16a;
   $bc6x=$SCORE15a; 
   $Mn6x=0;

}
else {
   $Mn6x=1;
   $mg6bx=1;
   $mgix=0;
   $mgfx=0;
   $mg6x=0;
   $bp6x=0;
   $bc6x=0 ;


}

// but pour les equipe et but encaiser et pttotal.
//pour prem
$bupx=$SCORE1a+$SCORE5a + $SCORE9a;
$bucx=$SCORE2a+$SCORE6a+$SCORE10a;
$mgt1x= $mg1bx+ $mg3bx+ $mg5bx;
//pour 2
$bup2x=$SCORE2a+$SCORE7a+$SCORE15a;
$buc2x=$SCORE1a+$SCORE8a+$SCORE16a;
$mgt2x= $mg1x+ $mg4bx+$mg6bx;
//pour 3
$bup3x=$SCORE3a+$SCORE6a+$SCORE16a;
$buc3x=$SCORE4a+$SCORE5a+$SCORE15a;
$mgt3x=$mg2bx+ $mg3x+$mg6x;
//pr4
$bup4x=$SCORE4a+$SCORE8a+$SCORE10a;
$buc4x=$SCORE3a+$SCORE7a+$SCORE9a;
$mgt4x= $mg2x+$mg5x+$mg4x;
// Fin but pour les equipe et but encaiser
// /////////////////

$_SESSION['$SCRa']=$SCORE1a;
$_SESSION['$SCR2a']=$SCORE2a;
$_SESSION['$SCR3a']=$SCORE3a;
$_SESSION['$SCR4a']=$SCORE4a;
$_SESSION['$SCR5a']=$SCORE5a;
$_SESSION['$SCR6a']=$SCORE6a;
$_SESSION['$SCR7a']=$SCORE7a;
$_SESSION['$SCR8a']=$SCORE8a;
$_SESSION['$SCR9a']=$SCORE9a;
$_SESSION['$SCR10a']=$SCORE10a;
$_SESSION['$SCR11a']=$SCORE15a;
$_SESSION['$SCR12a']=$SCORE16a;
////////////////////


$numbers= array($mgt1x,$mgt2x,$mgt3x,$mgt4x);
rsort($numbers);
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++){
 $numbers[$x];
 
}

// si li prem
if($mgt1x==$numbers[$x=0]){
    $place1x= $_SESSION['1tir'];
    $mjx=4;
    $mgx=$mgax+$mgbx+$mgcx;
    $mpx=3-$mgx;
    $mnx=$Mn2x+$Mn3x+$Mn5x;
    $BPx=$bupx;
    $BCx=$bucx;
    if($BPx>$BCx){
        $difx=$BPx-$BCx;
    }else
    $difx=$BCx-$BPx;

$PTx=$mgt1x;
} 
else
if($mgt2==$numbers[$x=0]){
    $place1x=$_SESSION['tira2'];
    $mjx=4;
    $mgx=$mgdx+$mgex+$mgfx;
    $mpx=3-$mgx;
    $mnx=$Mnx+$Mn4x+$Mn6x;
    $BPx=$bup2x;
    $BCx=$buc2x;
    if($BPx>$BCx){
        $difx=$BPx-$BCx;
    }else
    $difx=$BCx-$BPx;

    $PTx=$mgt2x;
}else// POur scor3
if($mgt3x==$numbers[$x=0]){
    $place1x=$_SESSION['tirb'];
    $mjx=4;
    $mgx=$mggx+$mghx+$mgix;;
    $mpx=3-$mgx;
    $mnx=$Mn2x+$Mn3x+$Mn6x;
    $BPx=$bup3x;
    $BCx=$buc3x;
    if($BPx>$BCx){
        $difx=$BPx-$BCx;
    }else
    $difx=$BCx-$BPx;

    $PTx=$mgt3x;
}
else
if($mgt4x==$numbers[$x=0]){
    $place1x=$_SESSION['tirc2'];
    $mjx=4;
    $mgx=$mgjx+$mgkx+$mglx;
    $mnx=$Mn2x+$Mn4x+$Mn5x;
    $mpx=3-$mgg4x;
    $BPx=$bup4x;
    $BCx=$buc4x;
    if($BPx>$BCx){
        $difx=$BPx-$BCx;
    }else
    $difx=$BCx-$BPx;

    $PTx=$mgt4x;
}
$_SESSION[' $place1x']= $place1x;
$_SESSION['  $mjx']= $mjx;
$_SESSION[' $mgx']= $mgx;
$_SESSION[' $mnx']= $mnx;
$_SESSION[' $mpx']= $mpx;
$_SESSION[' $BPx']= $BPx;
$_SESSION[' $BCx']= $BCx;
$_SESSION[' $difx']= $difx;
$_SESSION['$PTx']=$PTx;

//////fin 0
//////commencement1
if($mgt1x==$numbers[$x=1]){
    $place2x= $_SESSION['1tir'];
    $mj2x=4;
    $mgg2x=$mgax+$mgbx+$mgcx;
  
    $mp2x=3-$mgg2x;
    $mn2x=$Mn2x+$Mn3x+$Mn5x;
    $BP2x=$bupx;
    $BC2x=$bucx;
    if($BP2x>$BC2x){
        $dif2x=$BP2x-$BC2x;
    }else
    $dif2x=$BC2x-$BP2x;

$PT2x=$mgt1x;
} 
else
if($mgt2x==$numbers[$x=1]){
    $place2x= $_SESSION['tira2'];
    $mj2x=4;
    $mgg2x=$mgdx+$mgex+$mgfx;
    $mp2x=3-$mgg2x;
    $mn2x=$Mnx+$Mn4x+$Mn6x;
    $BP2x=$bup2x;
    $BC2x=$buc2x;
    if($BP2x>$BC2x){
        $dif2x=$BP2x-$BC2x;
    }else
    $dif2x=$BC2x-$BP2x;

    $PT2x=$mgt2x;
}else

if($mgt3x==$numbers[$x=1]){
    $place2x= $_SESSION['tirb'];
    $mj2x=4;
    $mgg2x=$mggx+$mghx+$mgix;;
    $mp2x=3-$mgg2x;
    $mn2x=$Mn2x+$Mn3x+$Mn6x;
   
    $BP2x=$bup3x;
    $BC2x=$buc3x;
    if($BP2x>$BC2x){
        $dif2x=$BP2x-$BC2x;
    }else
    $dif2x=$BC2x-$BP2x;

    $PT2x=$mgt3x;
}else
if($mgt4x==$numbers[$x=1]){
    $place2x=$_SESSION['tirc2'];
    $mj2x=3;
    $mgg2x=$mgjx+$mgkx+$mglx;
    $mn2x=$Mn2x+$Mn4x+$Mn5x;
    $mp2x=3-$mgg2x;
    
   
    $BP2x=$bup4x;
    $BC2x=$buc4x;
    if($BP2x>$BC2x){
        $dif2x=$BP2x-$BC2x;
    }else
    $dif2x=$BC2x-$BP2x;

    $PT2x=$mgt4x;
}
$_SESSION['$place2x']=$place2x;
$_SESSION['$mj2x']=$mj2x;
$_SESSION[' $mgg2x']= $mgg2x;
$_SESSION[' $mn2x']= $mn2x;
$_SESSION['$mp2x']=  $mp2x;
$_SESSION['$BP2x']=$BP2x;
$_SESSION['$BC2x']=$BC2x;
$_SESSION['$dif2x']=$dif2x;
$_SESSION[' $PT2x']= $PT2x;
///pour2
if($mgt1x==$numbers[$x=2]){
    $place3x=$_SESSION['tira2'];
    $mj3x=4;
    $mgg3x=$mgax+$mgbx+$mgcx;
   
    $mp3x=3-$mgg3x;
    $mn3x=$Mn2x+$Mn3x+$Mn5x;
    
    $BP3x=$bupx;
    $BC3x=$bucx;
    if($BP3x>$BC3x){
        $dif3x=$BP3x-$BC3x;
    }else
    $dif3x=$BC3x-$BP3x;

$PT3x=$mgt1x;
}  else
if($mgt2x==$numbers[$x=2]){
    $place3x= $_SESSION['tira'];
    $mj3x=4;
    $mgg3x=$mgdx+$mgex+$mgfx;
    $mn3x=$Mnx+$Mn4x+$Mn6x;
    $mp3x=3-($mgg3x+ $mn3x);
    $BP3x=$bup2x;
    $BC3x=$buc2x;
    if($BP3x>$BC3x){
        $dif3x=$BP3x-$BC3x;
    }else
    $dif3x=$BC3x-$BP3x;

    $PT3x=$mgt2x;
}else
if($mgt3x==$numbers[$x=2]){
    $place3x=$_SESSION['tirb'];
    $mj3x=4;
    $mgg3x=$mggx+$mghx+$mgix;;
    $mp3x=3-$mgg3x;
    $mn3x=$Mn2+$Mn3+$Mn6;
    $BP3x=$bup3x;
    $BC3x=$buc3x;
    if($BP3x>$BC3x){
        $dif3x=$BP3x-$BC3x;
    }else
    $dif3x=$BC3x-$BP3x;

    $PT3x=$mgt3x;
}else

if($mgt4x==$numbers[$x=2]){
    $place3x=$_SESSION['tirc'];
    $mj3x=4;
    $mgg3x=$mgjx+$mgkx+$mglx;
    $mp3x=3-$mgg3x;
    $mn3x=$Mnx+$Mn4x+$Mn6x;
    $BP3x=$bup4x;
    $BC3x=$buc4x;
    if($BP3x>$BC3x){
        $dif3x=$BP3x-$BC3x;
    }else
    $dif3x=$BC3x-$BP3x;

    $PT3x=$mgt4x;
}
$_SESSION['$place3x']=$place3x;
$_SESSION['$mj3x']=$mj3x;
$_SESSION['$mgg3x']=$mgg3x;
$_SESSION['$mp3x']=$mp3x;
$_SESSION['$mn3x']=$mn3;
$_SESSION['$BP3x']=$BP3x;
$_SESSION[' $BC3x']= $BC3x;
$_SESSION['$dif3x']=$dif3x;
$_SESSION['$PT3x']=$PT3x;
///pour 3
if($mgt2x==$numbers[$x=3]){
    $place4x= $_SESSION['tira2'];
    $mj4x=4;
    $mgg4x=$mgdx+$mgex+$mgfx;
  
    $mn4x=$Mnx+$Mn4x+$Mn6x;
    $mp4x=3-($mgg4x+ $mn4x);
    $BP4x=$bup2x;
    $BC4x=$buc2x;
    if($BP4x>$BC4x){
        $dif4x=$BP4x-$BC4x;
    }else
    $dif4x=$BC4x-$BP4x;

    $PT4x=$mgt2x;
}else
if($mgt1x==$numbers[$x=3]){
    $place4x= $_SESSION['1tir'];
    $mj4x=4;
    $mgg4x=$mgax+$mgbx+$mgcx;
    $mp4x=3-$mgg4x;
    $mn4x=$Mn2x+$mn3x+$Mn5x;
    $BP4x=$bupx;
    $BC4x=$bucx;
    if($BP4x>$BC4x){
        $dif4x=$BP4x-$BC4x;
    }else
    $dif4x=$BC4x-$BP4x;

$PT4x=$mgt1x;
}else
if($mgt3x==$numbers[$x=3]){
    $place4x= $_SESSION['tirb'];
    $mj4x=4;
    $mgg4x=$mggx+$mghx+$mgix;
    $mp4x=3-$mgg4x;
    $mn4x=$Mn2x+$Mn3x+$Mn6x;
    $BP4x=$bup3x;
    $BC4x=$buc3x;
    if($BP4x>$BC4x){
        $dif4x=$BP4x-$BC4x;
    }else
    $dif4x=$BC4x-$BP4x;

    $PT4x=$mgt3x;
}else
if($mgt4x==$numbers[$x=3]){
    $place4x=$_SESSION['tirc2'];
    $mj4x=4;
    $mgg4x=$mgjx+$mgkx+$mglx;
    $mp4x=3-$mgg4x;
    $mn4x=$Mn2x+$Mn4x+$Mn5x;
    $BP4x=$bup4x;
    $BC4x=$buc4x;
    if($BP4x>$BC4x){
        $dif4x=$BP4x-$BC4x;
    }else
    $dif4x=$BC4x-$BP4x;

    $PT4x=$mgt4x;
}
////pour 3



//pour ekip 4
$_SESSION['$place4x']=$place4x;
$_SESSION[' $mj4x']= $mj4x;
$_SESSION['$mgg4x']=$mgg4x;
$_SESSION[' $mp4x']= $mp4x;
$_SESSION['$mn4x']=$mn4x;
$_SESSION['$BP4x']=$BP4x;
$_SESSION[' $BC4x']= $BC4x;
$_SESSION[' $dif4x']= $dif4x;
$_SESSION['$PT4x']=$PT4x;
/////////session



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
                   
                    <?php if(isset($_POST['SCORE1'])    ):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities($SCORE1)?></td>
                                    <td><?=htmlentities($SCORE2)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE1" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE2" style="width: 20px; height:10px"required/>
                   <?php endif;?>
                 
</td>
<tr>
                    <td>match2</td>

                    <td><?=$_SESSION['tirb2']?> vs <?=$_SESSION['tirc2']?></td>
                    <td><form  method="POST" >
                   
                    <?php if(isset($_POST['SCORE3']) ):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities($SCORE3)?></td>
                                    <td><?=htmlentities($SCORE4)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE3" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE4" style="width: 20px; height:10px"required/>
                   <?php endif;?>
                  
</td>
</tr>
<tr>
                    <td>match3</td>
                    <td><?= $_SESSION['1tir2']?> vs <?=$_SESSION['tirb2'] ?></td>

                    <td><form  method="POST" >
                    <?php if(isset($_POST['SCORE5'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($SCORE5)?></td>
                                    <td><?=htmlentities($SCORE6)?></td>
                                </tr>
                            </table>
                            <?php else:?>
                                <form  method="POST" >
                    <input type="text"  name="SCORE5"style="width: 20px; height:10px"required/>
                    <input type="text" name="SCORE6"style="width: 20px; height:10px"required/>
                    <?php endif;?>
</td>
</tr>

                    <tr>
                    <td>match4</td>
                    <td><?=$_SESSION['tira']?> vs <?=$_SESSION['tirc2']?></td>
                    <td>
                    <form  method="POST" >
                    <?php if(isset($_POST['SCORE1'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($SCORE7)?></td>
                                    <td><?=htmlentities($SCORE8)?></td>
                                </tr>
                            </table>
                            <?php else:?>
                      <input type="text" name="SCORE7"style="width: 20px; height:10px"required/>
          <input type="text" name="SCORE8" style="width: 20px; height:10px"required/>
          <?php endif;?>
           </td>
</tr>
<tr>
                    <td>match5</td>
                    <td><?= $_SESSION['1tir2']?> vs <?=$_SESSION['tirc2']?></td>
                    <td>
                    <form  method="POST" >
                    <?php if(isset($_POST['SCORE1'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($SCORE9)?></td>
                                    <td><?=htmlentities($SCORE10)?></td>
                                </tr>
                            </table>
                            <?php else:?>
                      
                      <input type="text" name="SCORE9"style="width: 20px; height:10px"required/>
          <input type="text" name="SCORE10" style="width: 20px; height:10px"required/>
          <?php endif;?> </td>

</tr>

<tr>
                    <td>match6</td>
                    <td> <?= $_SESSION['tira']?> vs <?=$_SESSION['tirb2']?> </td>
                    <td>
                    <form  method="POST" >
                    <?php if(isset($_POST['SCORE15'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($_POST['SCORE15'])?></td>
                                    <td><?=htmlentities($_POST['SCORE16'])?></td>
                                </tr>
                 
                    </table>
                                <?php else:?>
                      <input type="text" name="SCORE15"style="width: 20px; height:10px"required/>
          <input type="text" name="SCORE16" style="width: 20px; height:10px"required/>
          <?php endif;?> </td>

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
                   
                    <?php if(isset($_POST['SCORE1a'])    ):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities(($_POST['SCORE1a']))?></td>
                                    <td><?=htmlentities($SCORE2a)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE1a" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE2a" style="width: 20px; height:10px"required/>
                   <?php endif;?>
                 
</td>
<tr>
                    <td>match8</td>
                    <td> <?= $_SESSION['tirb']?> vs <?= $_SESSION['tirc']?></td>
                    <td><form  method="POST" >
                   
                    <?php if(isset($_POST['SCORE3a']) ):?>
                            <table>
                                <tr>
                                    <td><?=htmlentities($_POST['SCORE3a'])?></td>
                                    <td><?=htmlentities($SCORE4a)?></td>
                                </tr>
                                </table>
                            <?php else:?>
                    
                   <input type="text" name="SCORE3a" style="width: 20px; height:10px"required/>
                   <input type="text" name="SCORE4a" style="width: 20px; height:10px"required/>
                   <?php endif;?>
                  
</td>
</tr>

<tr>
                    <td>match9</td>
                    <td><?= $_SESSION['1tir']?> vs <?= $_SESSION['tirb']?> </td>

                    <td><form  method="POST" >
                    <?php if(isset($_POST['SCORE5a'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($SCORE5a)?></td>
                                    <td><?=htmlentities($SCORE6a)?></td>
                                </tr>
                            </table>
                            <?php else:?>
                                <form  method="POST" >
                    <input type="text"  name="SCORE5a"style="width: 20px; height:10px"required/>
                    <input type="text" name="SCORE6a"style="width: 20px; height:10px"required/>
                    <?php endif;?>
</td>
</tr>
<tr>
                    <td>match10</td>
                    <td><?=$_SESSION['tira2']?> vs <?=$_SESSION['tirc']?> </td>
                    <td>
                    <form  method="POST" >
                    <?php if(isset($_POST['SCORE1a'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($SCORE7a)?></td>
                                    <td><?=htmlentities($SCORE8a)?></td>
                                </tr>
                            </table>
                            <?php else:?>
                      <input type="text" name="SCORE7a"style="width: 20px; height:10px"required/>
          <input type="text" name="SCORE8a" style="width: 20px; height:10px"required/>
          <?php endif;?>
           </td></tr>
           
<tr>
                    <td>match11</td>
                    <td><?= $_SESSION['1tir']?> vs <?= $_SESSION['tirc']?>  </td>
                    <td>
                    <form  method="POST" >
                    <?php if(isset($_POST['SCORE1a'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($SCORE9a)?></td>
                                    <td><?=htmlentities($SCORE10a)?></td>
                                </tr>
                            </table>
                            <?php else:?>
                      
                      <input type="text" name="SCORE9a"style="width: 20px; height:10px"required/>
          <input type="text" name="SCORE10a" style="width: 20px; height:10px"required/>
          <?php endif;?> </td>

</tr>

<tr>
                    <td>match12</td>
                    <td> <?=$_SESSION['tira2']?> vs <?= $_SESSION['tirb']?>  </td>
                    <td>
                    <form  method="POST" >
                    <?php if(isset($_POST['SCORE15a'])    ):?>
                    <table>
                                <tr>
                                    <td><?=htmlentities($_POST['SCORE15a'])?></td>
                                    <td><?=htmlentities($_POST['SCORE16a'])?></td>
                                </tr>
                 
                    </table>
                                <?php else:?>
                      <input type="text" name="SCORE15a"style="width: 20px; height:10px"required/>
          <input type="text" name="SCORE16a" style="width: 20px; height:10px"required/>
          <?php endif;?> </td>

</tr>

                                </table>
<table>
<h2>bouton de validation et de modification</h2>
 <input type="submit" value="Valider/modifier">
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
                         
                 <td><?=$mj?></td>
                 <td><?=$mg?></td>
                 <td><?=$mn?></td>
                 <td><?=$mp?></td>
                 <td><?=$BP?></td>
                 <td><?=$BC?></td>
                 <td><?=$dif?></td>
                 <td><?=$PT?></td>
              <td><?=$place1?></td>
                        <tr>
                            <td>Deuxieme</td>
                            <td><?=$mj2?></td>
                            <td><?=$mgg2?></td>
                 <td><?=$mn2?></td>
                 <td><?=$mp2?></td>

                 
                 <td><?=$BP2?></td>
                 <td><?=$BC2?></td>
                 <td><?=$dif2?></td>
                 <td><?=$PT2?></td>
                 <td><?=$place2?></td>
                        </tr>
                        <tr>
                            <td>troisieme</td>
                            <td><?=$mj3?></td>
                 <td><?=$mgg3?></td>
                 <td><?=3-($mgg3+ $mp3)?></td>
                 <td><?=$mp3?></td>
                 <td><?=$BP3?></td>
                 <td><?=$BC3?></td>
                 <td><?=$dif3?></td>
                 <td><?=$PT3?></td>
                 <td><?=$place3?></td>
                         
                        
            
                        </tr>
                        <tr>
                            <td>quatrieme</td>
                            <td><?=$mj4?></td>
                 <td><?=$mgg4?></td>
                 <td><?=3-($mgg4+$mp4) ?></td>
                 <td><?=$mp4?></td>
                 <td><?=$BP4?></td>
                 <td><?=$BC4?></td>
                 <td><?=$dif4?></td>
                 <td><?=$PT4?></td>
                 <td><?=$place4?></td>
                        
            
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
                                             
                                     <td><?=$mjx?></td>
                                     <td><?=$mgx?></td>
                                     <td><?=$mnx?></td>
                                     <td><?=$mpx?></td>
                                     <td><?=$BPx?></td>
                                     <td><?=$BCx?></td>
                                     <td><?=$difx?></td>
                                     <td><?=$PTx?></td>
                                  <td><?=$place1x?></td>
                                            <tr>
                                                <td>Deuxieme</td>
                                                <td><?=$mj2x?></td>
                                                <td><?=$mgg2x?></td>
                                     <td><?=$mn2x?></td>
                                     <td><?=$mp2x?></td>
                    
                                     
                                     <td><?=$BP2x?></td>
                                     <td><?=$BC2x?></td>
                                     <td><?=$dif2x?></td>
                                     <td><?=$PT2x?></td>
                                     <td><?=$place2x?></td>
                                            </tr>
                                            <tr>
                                                <td>troisieme</td>
                                                <td><?=$mj3x?></td>
                                     <td><?=$mgg3x?></td>
                                     <td><?=3-($mgg3x+ $mp3x)?></td>
                                     <td><?=$mp3x?></td>
                                     <td><?=$BP3x?></td>
                                     <td><?=$BC3x?></td>
                                     <td><?=$dif3x?></td>
                                     <td><?=$PT3x?></td>
                                     <td><?=$place3x?></td>
                                             
                                            
                                
                                            </tr>
                                            <tr>
                                                <td>quatrieme</td>
                                                <td><?=$mj4x?></td>
                                     <td><?=$mgg4x?></td>
                                     <td><?=3-($mgg4x+$mp4x) ?></td>
                                     <td><?=$mp4x?></td>
                                     <td><?=$BP4x?></td>
                                     <td><?=$BC4x?></td>
                                     <td><?=$dif4x?></td>
                                     <td><?=$PT4x?></td>
                                     <td><?=$place4x?></td>
                                            
                                
                                            </tr>
                                            <table>
                                          
       

            
           <td>  <a href="page 3.php">  <h1>clicker  ici pour acceder aux macht de demi-final</h1></a>  </td>  
                                </table> 
                                        </tbody>
                                        </table>
                                

</html>