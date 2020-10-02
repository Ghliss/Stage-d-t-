<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		 	.carte
		{
			border:1px solide #7E353B;
			width: 160px ;
			height: 200px ;
			border-radius: 10px ;
			background-color:#fbf0d8  ;
			background: radial-gradient(ellipse at center ,  61%,  
				#847170 91%) ;
		}
		div
		{
			margin: 0 ;
			padding : 0;
			display: block ;
		}
		a:visited
		{
			color:#000000;
			text-decoration: none ;
		}
		a:link 
		{
			text-decoration: none;
		}
		
		a:hover
		{
			color:#995B5B;
		}
		.titrevignette
		{
			font-weight: bold ;
			font-size: .875em;
			padding-top: 6px ;
			padding-left: 50px ;
		}
		img 
		{
			margin-top: 20px ;
			margin-left: 26px ;
		}
		.vignettes li 
		{
			float:left ;
			list-style-type: none ;
			margin:20px 35px 30px 20px ;
		}

		
		body
		{
			font-family: Arial;
			font-size:100%;
			font-weight: bold ;
			

		}
		#blockvignette1
		{
			margin-top: 100px ;
			margin-left: 100px ;
			margin-left: 100px ;
			
			
		}
		#entete
		{
			position: absolute;
			width: 100% ;
			height: 120px ;
			background-color: #9C9797 ;
			color:white ;
			border-top-style:none ;
			border-bottom-style:none ;
			border-left-style:none ;
			border-right-style:none ;
			

		}
		.separation
		{
			clear: both ;
			visibility: hidden;
		}
		.menu
		{
			position: absolute;
			top:120px ;
			left: 0;
			right: 0 ;
			width: 100% ;
			line-height: 40px ;
			background-color: #995B5B ;
			}
		.rubrique 
		{
			color:black;
		}
		input[type=submit]
		{
			
			background-color: #8F1A14;
			color:white;
			border-radius: 10px ;
			width: 150px;
		}


		
		

	
	</style>
</head>
<body>

	<header id="entete">
		<h1 id ="titre" align="center">QCM:2eme année</h1>
		<nav class="menu">
			<a href="acceuil.php">Accueil</a>
			
		</nav>
		
	</header></br></br></br></br></br>
	<div id="blockvignette1">
		<p class="rubrique">Informatique</p>
		<hr>
		<ul class="vignettes">
			<li>
	           <a href="php21.php">
	           <div class="carte">
		       <img src="php.png" style="cursor:pointer;" width="115" height="115" >
		       <div class="titrevignette">PHP/version7</div>
	           </div>
               </a>
           </li>
           <li>
	           <a href="html21.php">
	           <div class="carte">
		       <img src="html.jpg" style="cursor:pointer;" width="115" height="115" >
		       <div class="titrevignette">Html5/css3</div>
	           </div>
               </a>
           </li>
           <li>
	           <a href="java21.php">
	           <div class="carte">
		       <img src="java.png" style="cursor:pointer;" width="115" height="115" >
		       <div class="titrevignette">Java</div>
	           </div>
               </a>
           </li>
            <li>
	           <a href="unix21.php">
	           <div class="carte">
		       <img src="unix.png" style="cursor:pointer;" width="115" height="115" >
		       <div class="titrevignette">Unix/Linux</div>
	           </div>
               </a>
           </li>
            <li>
	           <a href="javascript21.php">
	           <div class="carte">
		       <img src="javascript.png" style="cursor:pointer;" width="115" height="115" >
		       <div class="titrevignette">Javascript</div>
	           </div>
               </a>
           </li>
       </ul>
   
   </div>
   <div class="separation"></div>
  <div id="blockvignette1">
		<p class="rubrique">Langues</p>
		<hr>
		<ul class="vignettes">
			<li>
	           <a href="anglais21.php">
	           <div class="carte">
		       <img src="anglais2.jpg" style="cursor:pointer;" width="115" height="115" >
		       <div class="titrevignette">Anglais</div>
               </a>
           </li>
           <li>
	           <a href="francais21.php">
	           <div class="carte">
		       <img src="francais.png" style="cursor:pointer;" width="115" height="115" >
		       <div class="titrevignette"> français</div>
	           </div>
               </a>
           </li>
       </ul>
   
   </div>
    <div class="separation"></div>
  
</br>
</body>
</html>