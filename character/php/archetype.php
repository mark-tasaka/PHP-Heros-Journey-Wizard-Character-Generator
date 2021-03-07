<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 8;
    $enduranceLevel2 = 8 + rand(1, 8);
    $enduranceLevel3 = 8 + rand(1, 8) + rand(1, 8);

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
            $endurance = $enduranceLevel3 + 2;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 4;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 6;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 8;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 10;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 12;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 14;
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

    if($level == 2)
    {
        $bonus = 1;
    }    
    else if($level >= 3 && $level <= 4)
    {
        $bonus = 2;
    }
    else if($level == 5)
    {
        $bonus = 3;
    }
    else if($level >= 6 && $level <= 7)
    {
        $bonus = 4;
    }
    else if($level == 8)
    {
        $bonus = 5;
    }
    else if($level >= 9)
    {
        $bonus = 6;
    }
    else
    {
        $bonus = 0;
    }

    return $bonus;
}

function minimumClassScore($score)
{
    if($score < 8)
    {
        $score = 8;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (17 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore > 14)
    {
        $bonus = "+5% bonus to Experience Points";
    }

    return $bonus;
}

function saveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws made versus poisons and natural hazards.<br/><br/>";

    return $message;
}


function naturalWanderer($score, $level)
{
    $message = "";

    if($score >= 15)
    {
        if($level >= 3 && $level <= 5)
        {
            $message = "<span class='archetypeBold'>Natural Wanderer:</span> Able to cast the <span class='archetypeItalic'>Errant Pilgrim</span> spell once per day.<br/><br/>";
        }
        else if($level >= 6 && $level <= 8)
        {
            $message = "<span class='archetypeBold'>Natural Wanderer:</span> Able to cast the <span class='archetypeItalic'>Errant Pilgrim</span> spell twice per day.<br/><br/>";
        }
        else if($level >= 9)
        {
            $message = "<span class='archetypeBold'>Natural Wanderer:</span> Able to cast the <span class='archetypeItalic'>Errant Pilgrim</span> spell three times per day.<br/><br/>";
        }
        else
        {
            $message = "";
        }
    }

    return $message;
}

function twoWeaponFighting($score)
{
    $message = "";

    if($score >= 15)
    {
        $message = "<span class='archetypeBold'>Two-Weapon Fighting:</span> Able to fight with a one-handed melee weapon in each hand.";
    }

    return $message;
}




function forestry($level)
{
    if($level >= "1" && $level <= "3")
    {
        $lore = "<span class='archetypeBold'>Forestry: 2</span><br/><br/><span class='archetypeBold'>Giant-Slayer:</span> Advantage of attack rolls against giant-kin and goblins.<br/><br/><span class='archetypeBold'>Ranger's Wealth:</span> Treasure and magical items are limited to what a Ranger could carry on their person.<br/><br/>";
    }
    else if($level >= "4" && $level <= "6")
    {
        $lore = "<span class='archetypeBold'>Forestry: 3</span><br/><br/><span class='archetypeBold'>Giant-Slayer:</span> Advantage of attack rolls against giant-kin and goblins.<br/><br/><span class='archetypeBold'>Ranger's Wealth:</span> Treasure and magical items are limited to what a Ranger could carry on their person.<br/><br/>";
    }
    else if($level >= "7" && $level <= "9")
    {
        $lore = "<span class='archetypeBold'>Forestry: 4</span><br/><br/><span class='archetypeBold'>Giant-Slayer:</span> Advantage of attack rolls against giant-kin and goblins.<br/><br/><span class='archetypeBold'>Ranger's Wealth:</span> Treasure and magical items are limited to what a Ranger could carry on their person.<br/><br/>";
    }
    else
    {
        $lore = "<span class='archetypeBold'>Forestry: 5</span><br/><br/><span class='archetypeBold'>Giant-Slayer:</span> Advantage of attack rolls against giant-kin and goblins.<br/><br/><span class='archetypeBold'>Ranger's Wealth:</span> Treasure and magical items are limited to what a Ranger could carry on their person.<br/><br/>";
    }

    return $lore;
}


?>