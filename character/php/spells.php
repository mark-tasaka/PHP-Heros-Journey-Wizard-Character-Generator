<?php

function getApprenticeSpells($spellCount)
{
    $spells = array('Breathed in Silver', 'Errant Pilgrim', 'Insight of the Wise', 'Lingering Starlight', 'Simple and Goodly Blessings', 'Songs of Hope and Resolve', 'Stand Against the Adversary');

    shuffle($spells);

    $spellsKnown = array();

    for($i = 0; $i < $spellCount; ++$i)
    {
        array_push($spellsKnown, $spells[$i]);
    }

    return $spellsKnown;
}

function getJourneymanSpells($spellCount)
{
    $spells = array('Fire Both Bright and Sacred', 'Friend to Birch and Beast', 'Guided by Wiser Wills', ' Harkening of the High Hawk', 'Hope Unbowed Before Evil', 'Of Seas and Storms', 'Paramnesia of the Fey');

    shuffle($spells);

    $spellsKnown = array();

    for($i = 0; $i < $spellCount; ++$i)
    {
        array_push($spellsKnown, $spells[$i]);
    }

    return $spellsKnown;
}


function getMasterSpells($spellCount)
{
    $spells = array('A Hope Ever Enduring', 'Behold the Untouched Realm', ' Beyond the Ken of Mortals', 'By Rune and Forge', 'Glamour Unbound', 'The Piercing Ferocity of Joy', 'Unbind That Which Cannot Be Broken');

    shuffle($spells);

    $spellsKnown = array();

    for($i = 0; $i < $spellCount; ++$i)
    {
        array_push($spellsKnown, $spells[$i]);
    }

    return $spellsKnown;
}



function apprenticeSpellsKnown($level, $lineage)
{
    $spellCount = 0;

    if($lineage == '4')
    {
        $spellCount += 1;
    }

    if($level == 1)
    {
        $spellCount += 1;
    }    
    else if($level == 2)
    {
        $spellCount += 2;
    }   
    else if($level >= 3 && $level <= 4)
    {
        $spellCount += 3;
    }   
    else if($level >= 5 && $level <= 6)
    {
        $spellCount += 4;
    }   
    else if($level >= 7)
    {
        $spellCount += 5;
    }

    return $spellCount;
}



function journeymanSpellsKnown($level)
{
    $spellCount = 0;

    if($level >= 4 && $level <= 5)
    {
        $spellCount += 1;
    }   
    else if($level >= 6 && $level <= 8)
    {
        $spellCount += 2;
    }   
    else if($level == 9)
    {
        $spellCount += 3;
    }  
    else if($level == 10)
    {
        $spellCount += 4;
    }


    return $spellCount;
}



function masterSpellsKnown($level)
{
    $spellCount = 0;

    if($level == 8)
    {
        $spellCount += 1;
    }

    if($level == 9)
    {
        $spellCount += 2;
    }

    if($level == 10)
    {
        $spellCount += 3;
    }
    return $spellCount;
}



?>