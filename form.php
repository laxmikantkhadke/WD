<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WD - Laxmikant </title>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-family:arial;	
}
.style2 {
	font-size:24px;
	font-weight: bold;
}
.style3 {color: #FFFFFF; font-weight: bold;}
.style4 {font-family: Arial, Helvetica, sans-serif}
.style5 {font-family: "Times New Roman", Times, serif}
.style6 {color: #FF0000}

-->
</style>
</head>

<body class="style4">
		<div id="mainBody">
      <!---  	      <div id="pageContentHeader" >
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			   	  <a href="index.php" class="style1" style="text-decoration:none">Formstamp</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="form.php" class="style1" style="text-decoration:none">Form</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="select.php" class="style1" style="text-decoration:none">Select</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="multiselect.php" class="style1" style="text-decoration:none">MultiSelect</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="radio.php" class="style1" style="text-decoration:none">Radio</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="check.php" class="style1" style="text-decoration:none">Checkbox</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="datetime.php" class="style1" style="text-decoration:none">Date/Time</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="list.php" class="style1" style="text-decoration:none">List</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="validation.php"class="style1" style="text-decoration:none">Validation</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="edge.php" class="style1" style="text-decoration:none">Edge</a>
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a href="#" class="style1" style="text-decoration:none">Source</a>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
				  </div>
		    	<hr size="2" color="#CC0000" /> 
        	---->
            		<?php include_once("header.php"); ?>
	
                <div id="pageContent" style="width:80%; margin-left: auto; margin-right:auto"   >
		        
                <br/><br/>
                <p class="style2">Directive fsFormFor</p>
        		<hr />
                <p>This directive allows to construct complex horizontal forms with easy DSL-like markup.</p>
                <p>Each form row is described with fsInput directive. It has following attributes:</p>
                <ul>
                	<li>as - specifies type of input</li>
                    <li>label - specifies label text</li>
                    <li>name - specifies model's attribute to which input will be bound</li>
                    <li>Other attributes (like items) are directly passed into input directive.</li>
                </ul>
                
                <p>See <a href="#" style="text-decoration:none">source code</a></p>
                <br/>
                <br/>
                <form action="" method="get">
                Samurai Personal Info Ah
                <hr />
                Date of Birth :
                <label>
                <input type="date" name="dob" id="dob" /><input type="time" name="DoBTime" id="dobtime" />
                </label>
                <br/><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date :    
                <label>
                <input type="date" name="date" id="date" />
                </label>
                <br/><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time :
                <label>
                <input type="time" name="time" id="time" />
                </label>
                <br/><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Details :
                <label>
                <textarea name="details" rows="3" id="details" ></textarea>
                </label>
                <br/><br/>
                Leaving District :
                <select name="district">
                	<option value="Mumbai">Mumbai</option>
                    <option value="Thane">Thane</option>
                    <option value="Navi Mumbai">Navi Mumbai</option>
                    <option value="Raigad">Raigad</option>
                    <option value="Ratnagiri">Ratnagiri</option>
                    <option value="Sindhudurg">Sindhudurg</option>
                    <option value="Pune">Pune</option>
                    <option value="Satara">Satara</option>
                    <option value="Sangli">Sangli</option>
                    <option value="Kolhapur">Kolhapur</option>
                    <option value="Solapur">Solapur</option>
                    <option value="Nashik">Nashik</option>
                    <option value="Ahmednagar">Ahmednagar</option>
                    <option value="Dhule">Dhule</option>
                    <option value="Jalgaon">Jalgaon</option>
                    <option value="Nandurbar">Nandurbar</option>
                    <option value="Aurangabad">Aurangabad</option>
                    <option value="Jalna">Jalna</option>
                    <option value="Nanded">Nanded</option>
                    <option value="Osmanabad">Osmanabad</option>
                    <option value="Beed">Beed</option>
                    <option value="Parbhani">Parbhani</option>
                    <option value="Amaravati">Amravati</option>
                    <option value="Akola">Akola</option>
                    <option value="Yavatmal">Yavatmal</option>
                    <option value="Buldhana">Buldhana</option>
                    <option value="Nagpur">Nagpur</option>
                    <option value="Chandrapur">Chandrapur</option>
                    <option value="Wardha">Wardha</option>
                    <option value="Gondia">Gondia</option>
                    <option value="Gadchiroli">Gadchiroli</option>
                </select>
                <input type="time" name="time" id="time" size="20"/>
                <br/><br/>
                <br/>
                Friend
                <hr/>
                Frend Name :
                <input type="text" name="frendName" id="frendName" value="Gomatesha"/>
                <br/><br/>
                <br/>
                Samurai CV
                <hr/>
                Current Learning stage 
                <input type="radio" name="LearningStage" value="Shu" >Shu <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="LearningStage" value="Ha" >Ha <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
                <input type="radio" name="LearningStage" value="Ri" >Ri <br/>
                Owned Weapons
                <select name="weapon" >
                	<option value="Select Something">Select Something</option>
                    <option value="Katana">Katana</option>
                    <option value="Naginatha">Naginatha</option>
                    <option value="Yari">Yari</option>
                    <option value="Horagai">Horagai</option>
                    <option value="Horimoni">Horimono</option>
                </select>
                <br/><br/>
                Weapon Styles
                &nbsp;&nbsp;&nbsp;
                <select name="weaponStyle">
                	<option value="Select Something">Select Something</option>
                    <option value="Kenjustu">Kenjustu</option>
                    <option value="Naginathajustu">Naginathajustu</option>                	
                    <option value="Sojustu">Sojustu</option>
                </select>
                <br/><br/>
                Preferable Food
                &nbsp;
                <select name="preferableFood">
                	<option value="Rice">Rice</option>
                    <option value="Milk">Milk</option>
                    <option value="Orange">Orange</option>                	
                    <option value="SouthIndian">South Indian</option>
                </select>
                <br/><br/>
                Other Facts
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <input type="checkbox" name="Fact" value="Uruwashii">Uruwashii<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="Fact" value="Buke">Buke<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="Fact" value="Monotufu">Monotufu<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="Fact" value="Musha">Musha<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               	  <input type="checkbox" name="Fact" value="Rohini">Ronin<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="Fact" value="VaiShi">Shi<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="Fact" value="Kurubhumi">Tsuwamono<br/>
                    
                    <br/><br/><br/>
                    Angular native
                    <hr/>
                    ngName
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="ngName"  /><br/><br/>
                    ngEmail
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="ngEmail"  />
                    <br/><br/>
                    ngNumber
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="ngName"  />
                    <br/><br/>
                    ngUrl
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="url" name="ngUrl"  />
                    <br/><br/>
                    ngTime
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="time" name="ngTime"  />
                    <br/><br/>
                    ngDate
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" name="ngdate"  /> 
                    <br/><br/>
                    ngDatelocal
                    &nbsp;
                    <input type="datetime-local" name="ngdatelocal"  /> 
                    <br/><br/>
                    ngWeek
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="week" name="ngweek"  /> 
                    <br/><br/>
                    ngMonth
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="month" name="ngdate"  /> 
                    <br/><br/>
                    
                </form>
                
                </div>
        
        </div>

</body>
</html>
