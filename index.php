<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WD - Laxmikant</title>
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
	<div id="mainBody" >
  <!---    <div id="pageContentHeader" >
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
		    <hr size="2" color="#CC0000" />  --->
		<?php include_once("header.php"); ?>
        <div id="pageContent" style="width:80%; margin-left: auto; margin-right:auto"   >
        <br/><br/>
        <p class="style2">FormStamp</p>
        <p><span class="style3" style="background-color:#000000">build</span>
        	<span class="style3" style="background-color:#FF3300">failing</span><br/>
			<span class="style3" style="background-color:#000000">chat</span>
        	<span class="style3" style="background-color:#006600">on gitter</span>            </p>
            <p class="style4" >
            FormStamp is a pure AngularJS widgets library designed for rich front-end web applications. FormStamp core principles are:</p>
            <ul class="style4">
            	<li>all widgets are written from scratch;</li>
                <li>maximum AngularJS compatibility (supports ngDisabled, ngModel and other standard directives);</li>
                <li>styled with Twitter Bootstrap;</li>
                <li>clean & minimalistic codebase.</li>
            </ul>
            <a href="header.php" style="text-decoration:none">Live Demo</a>
            <br/>
            <p class="style2">Installation</p>
            <p>FormStamp can be installed via <a href="#" style="text-decoration:none">Bower Package Manager:</a>
            <div id="bowerInstall" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">
            &nbsp; <span class="style5">bower install angular-formstamp</span> 
            </div>
            
            <p class="style2">Structure</p>
            There are 3 levels of directives:
            <ul>
            	<li>Form Builder - orchestrates building of complex forms; provides simple DSL-like markup for describing forms and hides complex markup from you.</li>
                <li>Widget directives - most often used widgets.</li>
                <li>Low-level directives - common concerns for widgets construction, can be used to build your own custom widgets.</li>
            </ul>
            
            <p class="style2">Form Builder</p>
            <ul>
            	<li><span class="style6" style="background-color:#FFCC99">&nbsp;fsFormFor </span>- root form builder directive;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsInput </span> - renders a row with input in form builder;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsRow </span>- renders a custom row.</li>
            </ul>
            
            <p class="style2">Widget Directives</p>
            <ul>
            	<li><span class="style6" style="background-color:#FFCC99">&nbsp;fsSelect </span>- select input with free text support (select/combo);</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsMultiselect </span>- multiple select input with free text support;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsTime </span> - time input;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsDate </span> date input with <span class="style6" style="background-color:#FFCC99">&nbsp;fsCalendar </span> inside dropdown; </li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsDatetime </span> - widget composed from <span class="style6" style="background-color:#FFCC99">&nbsp; fsTime </span> and <span class="style6" style="background-color:#FFCC99">&nbsp;fsDate </span> to enter both date and time;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsRadio </span> - a group of radiobuttons;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsCheck </span>- a group of checkboxes.</li>
            </ul>
            
            <p class="style2">Low-level Directives</p>
            <ul>
            	<li><span class="style6" style="background-color:#FFCC99">&nbsp; fsList</span>- renders a list of items and allows to move selection up and down (with custom templating for items);</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp; fsNullForm</span>- hides input with ngModel binding from a parent form;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsInput</span>- simplifies keyboard & focus events handling;</li>
                <li><span class="style6" style="background-color:#FFCC99">&nbsp;fsCalendar</span>- draws a calendar and allows to mark one day as selected.</li>
            </ul>
            
            <p class="style2">Development Environment</p>
            <p>Install node.js</p>
            <div id="curl" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">
            &nbsp; <span class="style5">curl https://raw.github.com/creationix/nvm/master/install.sh | sh # install nvm</span><br/>
            &nbsp; <span class="style5">nvm install 0.10</span>
            </div>
            <p>
            Clone FormStamp repository</p>
            <div id="curl" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">
            &nbsp; <span class="style5">git clone git@github.com:formstamp/formstamp.git</span>
            </div>
            <p>Install bower dependencies and node.js packages</p>
            <div id="cmnd" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">
             &nbsp; <span class="style5">cd formstamp</span><br/>
             &nbsp; <span class="style5">nvm use 0.10</span><br/>
             &nbsp; <span class="style5">npm install && cd demo && npm install && cd ..</span>
            </div>

            <p>Build, start demo server and start watching changes using</p>
			<div id="cmnd" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">           
			<br/>
            &nbsp; <span class="style5">npm start</span><br/><br/>
             &nbsp; <span class="style5"># open browser @ localhost:8080/index.html</span>
            </div> 
            <p>Now, point your browser to <a herf="#"> http://localhost:8080/ </a>and you'll see FormStamp's demo page.</p>
            <p>NOTE: These commands add <span class="style6" style="background-color:#FFCC99">&nbsp;nvm</span> command to <span class="style6" style="background-color:#FFCC99">&nbsp;.bash_profile</span>. It may not work if you are not using <span class="style6" style="background-color:#FFCC99">&nbsp;bash</span> shell (like <span class="style6" style="background-color:#FFCC99">&nbsp;zsh</span>). In this case you have to manually configure profile file.</p>
            
            <p class="style2">Running Tests</p>
            <p>Run unit tests:</p>
            <div id="cmnd" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">
            <br/>
            &nbsp; <span class="style5">npm test</span>
            </div>
            <p>To run protractor tests you could use:</p>
            <div id="cmnd" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">
            <br/>
            &nbsp; <span class="style5">npm run-script e2e</span>
            </div>
            <p>To build bower package in dist/ run:</p>
            <div id="cmnd" style="margin-left:auto; margin-right:auto; background-color:#CCCCCC; padding-top:3px; padding-bottom:3px; border:thin">
            &nbsp; <span class="style5">npm run-script build</span>
            </div>
            
            <p class="style2">Release Notes</p>
            <p>To see what has changed in recent versions, see the <a href="#" style="text-decoration:none">CHANGELOG</a>.</p>
            
            <p class="style2">License</p>
            <p>FormStamp is released under <a href="#" style="text-decoration:none">MIT License</a>.</p>
            
        </div>

</div>
</body>
</html>
