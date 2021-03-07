<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 4;
    $enduranceLevel2 = 4 + rand(1, 4);
    $enduranceLevel3 = 4 + rand(1, 4) + rand(1, 4);

    switch ($level) 
    {
        case "1":
            $endurance = $enduranceLevel1;
          break;

        case "2":
            $endurance = $enduranceLevel2;
        break;
        
        case "3":
            $endurance = $enduranceLevel3;
        break;
        
        case "4":
            $endurance = $enduranceLevel3 + 1;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 2;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 3;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 4;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 5;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 6;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 7;
        break;

        default:
          $endurance = 0;
      }

      $endurance += $bonusEndurance;

      return $endurance;

}


function getAttackBonus($level)
{
    $bonus = 0;

    if($level >= 4 && $level <= 6)
    {
        $bonus = 1;
    }
    else if($level >= 7 && $level <= 9)
    {
        $bonus = 2;
    }
    else if($level == 10)
    {
        $bonus = 3;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}

function minimumClassScore15($score)
{
    if($score < 15)
    {
        $score = 15;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (16 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore == 18)
    {
        $bonus = "+5% bonus to Experience Points";
    }

    return $bonus;
}

function saveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws against spells.<br/><br/>";

    return $message;
}

function magicalAwareness()
{
    $message = "<span class='archetypeBold'>Magical Awareness:</span> Can detect the presence of magically enchanted objects up to 120' away by concentrating for a single round.<br/><br/>";

    return $message;
}


function arcaneLore($level, $score)
{
    $message = "";

    if($score >= 15)
    {
        if($level >= 4)
        {
            $message = "<span class='archetypeBold'>Arcane Lore:</span> Can use the Lore ability of a Bard three levels lower.<br/><br/>";
        }
    }

    return $message;
}

function tapEssence($score)
{
    $message = "";

    if($score >= 13)
    {
        $message = "<span class='archetypeBold'>Tap the Essence:</span> Able to sacrifice physical health to cast spells when spells are exhausted.<br/><br/>";
    }

    return $message;
}



?>