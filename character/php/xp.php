<?php


function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,500";
        break;
        
        case "2":
            $xpNext = "5,000";
        break;
        
        case "3":
            $xpNext = "10,000";
        break;
        
        case "4":
            $xpNext = "20,000";
        break;
        
        case "5":
            $xpNext = "40,000";
        break;        

        case "6":
            $xpNext = "80,000";
        break;
                
        case "7":
            $xpNext = "160,000";
        break;
                
        case "8":
            $xpNext = "320,000";
        break;

        case "9":
            $xpNext = "640,000";
        break;
                
        case "10":
            $xpNext = "---";
        break;

        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>