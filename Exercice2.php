<?php
/**
 * Générer deux nombres entiers puis les afficher dans l'ordre
 *croissant et dans l’ordre décroissant
 
$a=random_int(0,50);
$b=random_int(0,50);  

echo("la valeur de a est{$a} et la valeur de b est{$b}<br>");
if($a<$b){
    echo ("l'ordre croissant est {$a};{$b}<br>");
    echo ("l'ordre decroissant est {$b};{$a}<br>");

}elseif($a==$b){
    echo("les 2 nombres sont egaux");


}else{
    echo("l'ordre croissant est{$b};{$a}<br>");
    echo ("l'ordre decroissant est {$a};{$b}<br>");

}

*/



/////////////////////////////////////////////////////////////////////////

//: Générer trois nombres entiers puis les afficher dans l'ordre
//croissant et dans l’ordre décroissan
/**$a=random_int(0,50);
$b=random_int(0,50); 
$c=random_int(0,50); 
echo("la valeur de a est{$a} , la valeur de b est{$b} et la valeur de c est {$c} <br>");
if($a>$b &&){

}*/
//soit l'équation ax+b=0,générer la valeur de a et de b puis donner
//les solution de l'équation ci dessus.
/**$a=random_int(-50,50);
$b=random_int(-50,50);
echo("la valeur de a est{$a} , la valeur de b est{$b}");
$x=(-$b/$a);
echo("la solution de l'equation est {$x}<br>");

*/

//soit l'équation ax 2+bx+c=0,générer la valeur de a , de b et de c
//puis donner les solution de l'équation ci dessus


$a=random_int(-50,50);
$b=random_int(-50,50); 
$c=random_int(-50,50); 
$delta=($b**2-4*$a*$a);
$x1=(-$b-sqrt($delta))/2*$a;
$x2=(-$b+sqrt($delta))/2*$a;
$x0=(-$b/2*$a);
if ($delta>0){
    echo ("l'equation ademet 2 solutions qui sont <br>x1:{$x1} <br> x2:{$x2}<br>");
}elseif($delta==0){
    echo ("l'equation ademet 1 solution qui est x0:{$x0}<br>");

}else{
    echo ("l'equation n'ademet  pas de  solution<br>");

}


























?>



