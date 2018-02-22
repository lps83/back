<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>BackOffice</title>
  <link type="text/css" href="./css/style.css" rel="stylesheet" />
  <!--[if lte IE 6]>
    <link type="text/css" href="./css/style_ie6.css" rel="stylesheet" />
  <![endif]-->
  <script type="text/javascript" src="./js/jquery-1.2.6.min.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
<div id="page">

  <!-- header -->
  <div id="header">
      <div id="logo"><h1><a href="#" title="Your site name">BackOffice - Facilite-moi :)</a></h1></div>
      <div id="quicklink"><a href="#" title="Admin profile">Admin</a> | <a href="#" title="Help">Help</a> | <a href="#" title="logout">logout</a></div>
  </div>
  <!-- end header -->


  <!-- main menu -->
  <div id="mainmenu">
      <ul>
          <li><a href="index.html" title="">Accueil</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="fiches.html" title=""class="active">Fiches</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="#" title="">Utilisateurs</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="#" title="">Settings</a></li>
      </ul>
  </div>
  <!-- end mainmenu -->

    <div id="submenu">
        <ul>
            <li><a href="#comp" title="">Comprendre</a></li>
            <li><a href="#obs" title="">Observer</a></li>
            <li><a href="#insp" title="">Inspiration</a></li>
            <li><a href="#" title="">Idéation</a></li>
            <li><a href="#" title="">Prototypage</a></li>
            <li><a href="#" title="">Tester et Apprendre</a></li>
        </ul>
        <div class="clear"></div>
    </div>

  <!-- content default-->


      <div id="content">

                <!-- block Fade in/out Message box -->

                <h3><span class="title">Bienvenue sur le portail de configuration</span><span class="underlined">&nbsp;</span></h3>
				<?php
					
if(isset($_GET['ref'])){
	
	
}
else{
	echo '<div style="margin-left: :20px; margin-right :20px; text-align: center">
					<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales arcu eget lectus tincidunt hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis est quam, scelerisque at consectetur non, scelerisque sed sapien. Ut laoreet finibus ligula. Fusce fermentum, magna sit amet venenatis imperdiet, est quam dignissim felis, vel maximus diam quam eget justo. In congue venenatis purus vitae dignissim. Quisque in mauris et ex gravida bibendum id non nunc. Donec mauris tellus, lobortis nec dignissim sed, consequat nec arcu. Donec interdum tincidunt suscipit. Vestibulum elementum venenatis magna at euismod. Phasellus ut nisi ac arcu pharetra semper id vitae nibh. Vivamus metus augue, convallis sed mi non, dignissim semper velit. Quisque porttitor nisl non enim ultricies, a congue tortor bibendum. Ut commodo efficitur metus, vulputate volutpat metus consectetur ut. Sed vehicula nisl nulla, non semper arcu varius non. Morbi nec vestibulum erat, vel lobortis nunc.
				<p>

Vestibulum scelerisque euismod sem nec tempus. Morbi nibh ante, cursus suscipit ornare in, lacinia in magna. Fusce volutpat eros quis vehicula pellentesque. Cras egestas diam sed justo placerat, ut convallis erat interdum. Vestibulum condimentum volutpat nunc dapibus mollis. Mauris ac tincidunt erat. Nam sodales turpis non commodo commodo.
<p>

Aliquam mollis vel risus ut vulputate. Etiam at mauris laoreet, ornare ex sed, placerat nisi. Ut ac nibh urna. In scelerisque pretium laoreet. Mauris porta eget urna vehicula vehicula. Quisque ornare porttitor lorem, at consectetur leo cursus et. Fusce ut sapien tellus. Suspendisse et ex nibh. Curabitur sit amet auctor quam, vel blandit nunc. Nunc in tristique libero. Donec tempus consequat dui, eu pellentesque felis egestas ut. Pellentesque pulvinar hendrerit convallis. Mauris euismod et ligula a vehicula. Etiam risus nisi, volutpat ac ipsum in, auctor commodo diam. 
Aliquam quis iaculis augue, at consequat enim. Integer imperdiet pellentesque arcu quis rhoncus.	
<p>
				</div>';
}
?>
				
      </div>
      
      <!-- end div default content -->


  <!-- Footer -->
  <div id="footer">
      <ul>
          <li>Template by <a href="http://www.wareteam.com" title="Yassine HANINI">Y.Hanini</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li>&copy;2008 <a href="#" title="">Yoursitename</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li>Powered by <a href="#" title="">YourCMS</a></li>
      </ul>
  </div>

</div>
<!-- end div page -->
</body>

</html>