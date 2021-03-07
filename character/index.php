<!DOCTYPE html>
<html>
<head>
<title>Hero's Journey Wizard Character Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="Hero's Journey Fan Tribute Page">
	<meta name="keywords" content="Hero's Journey, Gallant Knight Games,Character Generator,HTML,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  



    <link rel="icon" href="../../images/favicon/icon.png" type="image/png" sizes="16x16"> 


	<link rel="stylesheet" href="../../../css/bf_small_style.css"  media="only screen and (min-width: 10px) and (max-width: 800px)" />  
	<link rel="stylesheet" href="../../../css/bf_med_style.css"  media="only screen and (min-width: 800px) and (max-width: 1100px)" />  
	<link rel="stylesheet" href="../../../css/bf_large_style.css"  media="only screen and (min-width: 1100px) and (max-width: 1400px)" />  
	<link rel="stylesheet" href="../../../css/bf_xlarge_style.css"  media="only screen and (min-width: 1400px) and (max-width: 1600px)" /> 
	<link rel="stylesheet" href="../../../css/bf_xxlarge_style.css" media="only screen and (min-width: 1600px)" /> 
	
	
	<link rel="stylesheet" href="../../../css/bf_additions2.css" /> 
	<script type="text/javascript" src="../../../js/slide.js"></script>
  
	<script type="text/javascript" src="js/characterMenu.js"></script>

	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

    
	   <?php
		include("../../../header.inc");
		?>
	
	
	<section>
		
		<h1><img src="images/title1.png" alt="Wizard Character Generator" class="image" /></h1>
		
				
							<div id="slideshow-container">

				<figure id="slideshow">

				<img src="images/slides/image01.jpg" alt="Reaper Miniatures and Fat Dragon Games 3D Dungeon, Miniatures painted by Mark Tasaka, 2021" />
				<img src="images/slides/image02.jpg" alt="Reaper Miniatures and Fat Dragon Games 3D Dungeon, Miniatures painted by Mark Tasaka, 2021" />
				<img src="images/slides/image03.jpg" alt="Reaper Miniatures and Fat Dragon Games 3D Dungeon, Miniatures painted by Mark Tasaka, 2021" />
				<img src="images/slides/image04.jpg" alt="Reaper Miniatures and Fat Dragon Games 3D Dungeon, Miniatures painted by Mark Tasaka, 2021" />
				<img src="images/slides/image05.jpg" alt="Reaper Miniatures and Fat Dragon Games 3D Dungeon, Miniatures painted by Mark Tasaka, 2021" />
				<img src="images/slides/image06.jpg" alt="Reaper Miniatures and Fat Dragon Games 3D Dungeon, Miniatures painted by Mark Tasaka, 2021" />



				</figure>

			</div>
			<article>
                
                  <P>Through long years of study, Wizards have unraveled the secrets of the arcane.  While limited in the types of weapons they could wield and unable to wear armour, a Wizard’s true strength is found in their ability to use and understand magic.</P>
			
				
		
			                         
				  <br/>
            <br/>
				<h3><img src="images/title3.png" alt="Wizard Generator" class="image" /></h3>
            

            
		<form action="" id ="WizardFormV3"  target="_blank" method="post">
    
    <div class="content9">


                
  
          <div id="characterNameV3">
            <span class="formIputDescription">Character's Name:</span>
            <span id="characterNameV3"> <input type="text" name="theCharacterName" value="" class="nameBox"></span>
           

           
           <br/>
           <br/>
            </div>
           

                  
           <div class="formIputDescription">
           <span class="footnote3"><input type="checkbox" id="checkBoxRandomNameV3" value="1" name="theCheckBoxRandomName" onClick="hideCharacterName()">Use Randomly Generated Name</span>
           </div>

           <br/>

           <div id="PlayerNameV3">
            <span class="formIputDescription">Player's Name:</span>
            <span id="PlayerNameV3"> <input type="text" name="thePlayerName" value="" class="nameBox"></span>
           
            </div>

           <br/>

		   <span class="formIputDescription">Lineage:</span>	
			  <select id="lineageV3" name="theLineage" class="alignmentBox">	
				<option value="0" selected>Human</option>
				<option value="1">Changeling</option>
				<option value="3">Elf</option>
				<option value="4">Half-Elf</option>
        </select>
        
        <br/>
        <br/>
                  
                           
        <span class="formIputDescription">Gender:</span>	
			  <select id="genderV3" name="theGender" class="alignmentBox">	
				<option value="Male" selected>Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				<option value="Blank">Blank</option>
        </select>
        
        <br/>
        <br/>


            <span class="formIputDescription">Character Level:</span>	
			  <select id="levelV3" name="theLevel" class="alignmentBox">	
				<option value="1" selected>Level 1</option>
				<option value="2">Level 2</option>
				<option value="3">Level 3</option>
				<option value="4">Level 4</option>
				<option value="5">Level 5</option>
				<option value="6">Level 6</option>
				<option value="7">Level 7</option>
				<option value="8">Level 8</option>
				<option value="9">Level 9</option>
				<option value="10">Level 10</option>
			  </select>
            
            <br/>
            <br/>

       


		                            
    <span class="formIputDescription">Gold Pieces:</span>	
			  <select id="goldV3" name="theGold" class="alignmentBox">			
                <option value="0"selected>No gold pieces</option>
				<option value="1"  >4d8 gold pieces</option>
				<option value="2">2d6 X 5 gold pieces</option>
				<option value="3">3d6 X 10 gold pieces</option>
				<option value="4">4d8 X 20 gold pieces</option>
			  </select>

        <br/>
		<br/>
                 

                <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomWeaponsV3" value="1" name="thecheckBoxRandomWeaponsV3" onClick="hideWeapons()">&nbsp&nbspRandomly Generate Weapons</span>
                  </div>
       
                  <br/>


                <div id="weaponsSelectionV3">

                <span class="weaponBoxHeader">Weapons:</span>
                <br/><br/>

            <div id="weaponsGroupingsV3">
                <input type="checkbox" name="theWeapons[]" value="5"> Dagger<br/>   
                <input type="checkbox" name="theWeapons[]" value="11"> Quarterstaff<br/> 
                </div>

                <br/>
                <br/>

                </div>
   

                <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomGearV3" value="1" name="theCheckBoxRandomGear" onClick="hideGear()">&nbsp&nbspRandomly Generate Gear</span>
                  </div>
       


                <div id="gearSelectionV3">
                  <br/>
                
                <span class="weaponBoxHeader">Equipment/Ammo:</span>
                <br/><br/>
                
            <div id="gearGroupingsV3">
      <input type="checkbox" name="theGear[]" value="0"> Animal Trap<br/>
                <input type="checkbox" name="theGear[]" value="1"> Backpack<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Bedroll<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Belladonna<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Belt Pouch<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Bottle of Wine<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Candles (12) <br/>  
                <input type="checkbox" name="theGear[]" value="7"> Case (map or scroll)<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Cloak<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Cloth (bolt)<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Clothing (Commoner)<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Clothing (Traveling)<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Clothing (Fine)<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Compass<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Crowbar<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Deck of Cards<br/>
                <input type="checkbox" name="theGear[]" value="16"> Dice (bone, pair)<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Falcon (trained)<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Fishing Tackle<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Fishing Pole<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Flint and Steel<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Frying Pan<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Garlic (1 lb.)<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Grappling Hook<br/> 
                <input type="checkbox" name="theGear[]" value="24"> Hammer (small)<br/> 
                <input type="checkbox" name="theGear[]" value="25"> Healer’s Kit<br/> 
                <input type="checkbox" name="theGear[]" value="26"> Helmet<br/> 
                <input type="checkbox" name="theGear[]" value="27"> Jeweler’s Glass<br/> 
                <input type="checkbox" name="theGear[]" value="28"> Journal (blank)<br/> 
                <input type="checkbox" name="theGear[]" value="29"> Lantern<br/> 
                <input type="checkbox" name="theGear[]" value="30"> Mirror (handheld)<br/> 
                <input type="checkbox" name="theGear[]" value="31"> Music Instrument<br/> 
                <input type="checkbox" name="theGear[]" value="32"> Net (10 ft. x 10 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="33"> Oil (pint)<br/> 
                <input type="checkbox" name="theGear[]" value="34"> Pole (10 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="35"> Rations (trail)<br/> 
                <input type="checkbox" name="theGear[]" value="36"> Rations (dried)<br/> 
                <input type="checkbox" name="theGear[]" value="37"> Rope, hemp (50 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="38"> Rope, silk (50 ft.)<br/> 
                <input type="checkbox" name="theGear[]" value="39"> Sack (15 lbs. cap)<br/> 
                <input type="checkbox" name="theGear[]" value="40"> Sack (30 lbs. cap)<br/> 
                <input type="checkbox" name="theGear[]" value="41"> Shovel<br/> 
                <input type="checkbox" name="theGear[]" value="42"> Spellbook (blank)<br/> 
                <input type="checkbox" name="theGear[]" value="43"> Iron spikes (12)<br/> 
                <input type="checkbox" name="theGear[]" value="44"> Wooden spikes (12)<br/> 
                <input type="checkbox" name="theGear[]" value="45"> Tent<br/> 
                <input type="checkbox" name="theGear[]" value="46"> Tool Kit<br/> 
                <input type="checkbox" name="theGear[]" value="47"> Torches (6)<br/> 
                <input type="checkbox" name="theGear[]" value="48"> Waterskin<br/> 
                <input type="checkbox" name="theGear[]" value="49"> Whetstone<br/> 
                <input type="checkbox" name="theGear[]" value="50"> Wolfsbane<br/> 

                <br/>
                <span class="weaponSubHead">Ammo:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="51"> Arrows (20)<br/>  
                <input type="checkbox" name="theGear[]" value="52"> Silver Arrows (5)<br/>  
                <input type="checkbox" name="theGear[]" value="53"> Bolts (30)<br/>  
                <input type="checkbox" name="theGear[]" value="54"> Stones (20)<br/>  

                </div>


                </div>
                <br/>


                
                
            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttons">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttons">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
			</div>
			
				
            </div>
            
				
            </div>
            
            </form>
            
                	
        </article>
	
	       <?php
		include("../../../links.inc");
		?>
        
		</section>
	
        <?php
		include("../../../footer.inc");
		?>
	
	<script>
		$("#generate_characters2").click(function(){
         
    
		 $("#WizardFormV3").attr('action', "character/hjWizard.php");

	 });


	</script>
        
	


</body>
</html>