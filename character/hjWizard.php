<!DOCTYPE html>
<html>
<head>
<title>Hero's Journey Wizard Character Generator Version 3</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Hero's Journey wizard Character Generator. Gallant Knight Games.">
	<meta name="keywords" content="Hero's Journey, Gallant Knight Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <link rel="icon" href="../../../images/favicon/favicon.png" type="image/png" sizes="16x16"> 
		

	<link rel="stylesheet" type="text/css" href="css/wizard.css">
    
    
</head>
<body>
    
    <?php
    
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/abilityScoreGen.php';
    include 'php/randomName.php';
    include 'php/xp.php';
    include 'php/profession.php';
    include 'php/lineage.php';
    include 'php/archetype.php';
    include 'php/spells.php';
    include 'php/goldPieces.php';
    

        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }

        
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
    
        }
        
        if(isset($_POST["theLineage"]))
        {
            $lineageNumber = $_POST["theLineage"];
    
        }

        $lineage = getLineage($lineageNumber);
        

        if(isset($_POST["theGender"]))
        {
            $gender = $_POST["theGender"];
        }


        if(isset($_POST['theCheckBoxRandomName']) && $_POST['theCheckBoxRandomName'] == 1) 
        {
            $characterName = getRandomName($gender) . " " . getSurname();
        } 
  
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 

        $level = levelLimit($lineageNumber, $level);

        $lineageAbilities = lineageAbilities($lineageNumber);

        $lineageLevelLimit = levelLimitMessage($lineageNumber);

        $lineageDefenseBonus = lineageDefenseBonus($lineageNumber);


        $abilityScoreArray = array();
        $abilityScoreArray = getAbilityScores($lineageNumber);

        $might = $abilityScoreArray[0];
        $finesse = $abilityScoreArray[1];
        $resolve = $abilityScoreArray[2];
        $insight = $abilityScoreArray[3];
        $insight = minimumClassScore15($insight);
        $bearing = $abilityScoreArray[4];
        $weal = $abilityScoreArray[5];

        $mightMod = getAbilityScoreModString($might);
        $finesseMod = getAbilityScoreModString($finesse);
        $resolveMod = getAbilityScoreModString($resolve);
        $insightMod = getAbilityScoreModString($insight);
        $bearingMod = getAbilityScoreModString($bearing);
        $wealMod = getAbilityScoreModString($weal);

        $xpBonus = getXPBonus($insight);
        $magicalAwareness = magicalAwareness();
        $arcaneLore = arcaneLore($level, $bearing);
        $saveMessage = saveMessage();
        $tapEssence = tapEssence($resolve);


        $xpNextLevel = getXPNextLevel ($level);

        $endurance = getEndurance($level, $resolveMod);

        $attackBonus = getAttackBonus($level);

        $saveThrow = getSavingThrow($level);

        $defense = 10 + $finesseMod + $lineageDefenseBonus;


        $lineageReduction = lineageReduction($lineageNumber);

        $reduction = $lineageReduction;

        $weaponArray = array();
    
    //For Random Select gear
    if(isset($_POST['thecheckBoxRandomWeaponsV3']) && $_POST['thecheckBoxRandomWeaponsV3'] == 1) 
    {
        $weaponArray = getRandomWeapons();

    }
    else
    {
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    }

    
    $weaponNames = array();
    $weaponDamage = array();
    $weaponRange = array();
    $weaponTrait = array();
    $weaponWeight = array();
    $weaponToHit = array();

    //weapon name
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
    
    $eachWeaponCount = 0;

    //weapon to-hit
    foreach($weaponArray as $select)
    {
        $eachWeapon = $weaponArray[$eachWeaponCount];

        if($eachWeapon >= 0 && $eachWeapon <=14)
        {
            $toHitWeapon = $attackBonus + $mightMod;
        }
        else
        {
            $toHitWeapon = $attackBonus + $finesseMod;
        }
        array_push($weaponToHit, $toHitWeapon);

        ++$eachWeaponCount;

    }
        
    //weapon damage
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    //weapon range
    foreach($weaponArray as $select)
    {
        array_push($weaponRange, getWeapon($select)[2]);
    } 

    //weapon trait
    foreach($weaponArray as $select)
    {
        array_push($weaponTrait, getWeapon($select)[3]);
    }

    //weapon weight
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[4]);
    }
        
        $gearArray = array();
        $gearNames = array();



    //For Random Select gear
    if(isset($_POST['theCheckBoxRandomGear']) && $_POST['theCheckBoxRandomGear'] == 1) 
    {
        $gearArray = getRandomGear();

        $weaponCount = count($weaponArray);
        $longBow = false;
        $shortBow = false;
        $heavyCrossbow = false;
        $lightCrossbow = false;

        for($i = 0; $i < $weaponCount; ++$i)
        {
            if($weaponArray[$i] == "15" && $longBow == false)
            {
                array_push($gearArray, 51);
                array_push($gearArray, 52);
                
                $shortBow = true;
            }
            
            if($weaponArray[$i] == "16" && $shortBow == false)
            {
                array_push($gearArray, 51);
                array_push($gearArray, 52);
                
                $longBow = true;
            }

            if($weaponArray[$i] == "17" && $heavyCrossbow == false)
            {
                array_push($gearArray, 53);
                
                $lightCrossbow = true;
            }
            
            if($weaponArray[$i] == "18" && $lightCrossbow == false)
            {
                array_push($gearArray, 53);
                
                $heavyCrossbow = true;
            }

            if($weaponArray[$i] == "19")
            {
                array_push($gearArray, 54);
            }

        }

    }
    else
    {
        //For Manually select gear
        if(isset($_POST["theGear"]))
            {
                foreach($_POST["theGear"] as $gear)
                {
                    array_push($gearArray, $gear);
                }
            }

    }

    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }


        
        if(isset($_POST["theGold"]))
        {
            $gold = $_POST["theGold"];
        }
        
        $goldPieces = getGoldPieces($gold);


    $profession = getProfession($lineageNumber);

    $apprenticeSpellCount = apprenticeSpellsKnown($level, $lineageNumber);

    $apprenticeSpellKnown = array();

    $apprenticeSpellKnown = getApprenticeSpells($apprenticeSpellCount);

    $journeymanSpellCount = journeymanSpellsKnown($level);
    
    $journeymanSpellKnown = array();

    $journeymanSpellKnown = getJourneymanSpells($journeymanSpellCount);
    

    $masterSpellCount = masterSpellsKnown($level);
    
    $masterSpellKnown = array();

    $masterSpellKnown = getMasterSpells($masterSpellCount);
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
       

		<span id="might">
           <?php
           echo $might;
           ?>
           </span>

		<span id="finesse">
           <?php
           echo $finesse;
           ?></span> 

		<span id="resolve">
           <?php
           echo $resolve;
           ?></span> 

		<span id="insight">
           <?php
           echo $insight;
           ?></span>

		<span id="bearing">
           <?php
           echo $bearing;
           ?></span>

       <span id="weal">
           <?php
           echo $weal;
           ?></span>
       
       
       <span id="mightMod">
           <?php
           echo $mightMod;
           ?>
           </span>

		<span id="finesseMod">
           <?php
           echo $finesseMod;
           ?></span> 

		<span id="resolveMod">
           <?php
           echo $resolveMod;
           ?></span> 

		<span id="insightMod">
           <?php
           echo $insightMod;
           ?></span>

		<span id="bearingMod">
           <?php
           echo $bearingMod;
           ?></span>

       <span id="wealMod">
           <?php
           echo $wealMod;
           ?></span>



       <span id="lineage">
       <?php
       echo $lineage;
       ?>
       </span>
		  
       
       <span id="gender">
           <?php
           echo $gender;
           ?>
       </span>

       
       <span id="apprenticeSpellCount">
           <?php

           if($apprenticeSpellCount > 0)
           {
                echo $apprenticeSpellCount;
           }
           else
           {
               echo "";
           }
           ?>
       </span>

       
       
       <span id="journeymanSpellCount">
           <?php

           if($journeymanSpellCount > 0)
           {
                echo $journeymanSpellCount;
           }
           else
           {
               echo "";
           }
           ?>
       </span>       
       
       <span id="masterSpellCount">
           <?php

           if($masterSpellCount > 0)
           {
                echo $masterSpellCount;
           }
           else
           {
               echo "";
           }
           ?>
       </span>
       
       
       <span id="spellKnown">
           <?php

           echo "<span class='spellsBold'>Apprentice Spells:</span> ";

           for($m = 0; $m < $apprenticeSpellCount; ++$m)
           {
               if($m == 0)
               {
                   echo $apprenticeSpellKnown[$m];

               }
               else
               {
                   echo ", " . $apprenticeSpellKnown[$m];
               }

           }

           if($journeymanSpellCount > 0)
           {
                echo "<br/><span class='spellsBold'>Journeyman Spells:</span> ";
           }


           for($m = 0; $m < $journeymanSpellCount; ++$m)
           {
               if($m == 0)
               {
                   echo $journeymanSpellKnown[$m];

               }
               else
               {
                   echo ", " . $journeymanSpellKnown[$m];
               }

           }

           if($masterSpellCount > 0)
           {
                echo "<br/><span class='spellsBold'>Master Spells:</span> ";
           }

           for($m = 0; $m < $masterSpellCount; ++$m)
           {
               if($m == 0)
               {
                   echo $masterSpellKnown[$m];

               }
               else
               {
                   echo ", " . $masterSpellKnown[$m];
               }

           }



           ?>
       </span>
       
       
       
       <span id="class">Wizard</span>
       

       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="xpNextLevel">
           <?php
                echo $xpNextLevel;
           ?>
        </span>
        
        
       <span id="defense">
           <?php
                echo $defense;
           ?>
        </span>

       <span id="endurance">
           <?php
                echo $endurance;
           ?>
        </span>

        
       <span id="reduction">
           <?php
                echo $reduction;
           ?>
        </span>

        
       <span id="attackBonus">
           <?php
                echo '+' . $attackBonus;
           ?>
        </span>
        
        
        <span id="saveThrow">
            <?php
                 echo $saveThrow;
            ?>
         </span>

       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>

        
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
       
        <span id="archetype">
           <?php
                echo $magicalAwareness;
                echo $arcaneLore;
                echo $tapEssence;
                echo $saveMessage;
                echo $xpBonus;
           ?>
        </span>

        
    <span id="lineageAbilities">
       <?php
       echo $lineageAbilities .  '<br/><br/>' . $lineageLevelLimit;
       ?>
       </span>




       
       <span id="weaponsList">
           <?php
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           
           ?>  
        </span>

       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
        

       <span id="weaponsList3">
           <?php
           foreach($weaponRange as $theWeaponRange)
           {
               echo $theWeaponRange;
               echo "<br/>";
           }
           ?>        
        </span>
       
        <span id="weaponsList4">
           <?php
           foreach($weaponTrait as $theWeaponTrait)
           {
               echo $theWeaponTrait;
               echo "<br/>";
           }
           ?>        
        </span>

        <span id="weaponsList5">
           <?php
           foreach($weaponWeight as $theweaponWeight)
           {
               echo $theweaponWeight;
               echo "<br/>";
           }
           ?>        
        </span>

        
        <span id="weaponsList6">
           <?php
           foreach($weaponToHit as $theWeaponToHit)
           {
               if ($theWeaponToHit >= 0)
               {
                echo '+' . $theWeaponToHit;
                echo "<br/>";

               }
               else
               {
                echo $theWeaponToHit;
                echo "<br/>";

               }
           }
           ?>        
        </span>



       <span id="gearList">
           <?php

           $gearCount = count($gearNames);
           $counter = 1;
           
           foreach($gearNames as $theGear)
           {
              echo $theGear;

              if($counter == $gearCount-1)
              {
                  echo " and ";
              }
              elseif($counter > $gearCount-1)
              {
                  echo ".";
              }
              else
              {
                  echo ", ";
              }

              ++$counter;
           }
           ?>
       </span>
       
       <span id="goldPieces">
            <?php
           echo $goldPieces;;
           ?>
       </span>
       


       <span id="profession">
            <?php
           echo $profession;;
           ?>
       </span>
       

       
	</section>
	

		
  <script>

        let imgData = "images/wizard.png";
      
         $("#character_sheet").attr("src", imgData);
   
  </script>
		
	
    
</body>
</html>