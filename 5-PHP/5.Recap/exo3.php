<?php
    echo("Pensez à un personnage : Melle Rose, le professeur Violet, le Colonet Moutarde, Le Révérend Olive et Mme Leblanc.\n");
    echo("True : oui; False: non\n");

    $qS=readline("Est-ce que votre personnage est un homme ? ");

    if($qS=="true"){
        $qS=true;
    }
    elseif($qS=="false"){
        $qS=false;
    }







    if($qS==true){
        $qM=readline("Votre personnage porte-t-il des moustaches ? ");
       
        if($qM=="true"){
            $qM=true;
        }
        elseif($qM=="false"){
            $qM=false;
        }
        
       
        if($qM==true){
            $R="le Colonet Moutarde.";
        }
        
        else{   
            $qC=readline("Votre personnage porte-t-il un chapeau ? ");

            if($qC=="true"){
                $qC=true;
            }
            elseif($qC=="false"){
                $qC=false;
            }

            if ($qC==true){
                $R= "Le professeur Violet.";
            }
            else{
                $R="le Révérend Olive.";
            }

        }

        
    }




    elseif($qS==0){
        $qL=readline("Votre personnage porte-t-il des lunettes ? ");
        
        if($qL=="true"){
            $qL=true;
        }
        elseif($qL=="false"){
            $qL=false;
        }


        if($qL==true){
            $R="Mme Leblanc.";
        }
        else{
            $R="Melle Rose.";
        }
    }

    echo("Réponse : Le personnage auquel vous pensez est ".$R)
?>