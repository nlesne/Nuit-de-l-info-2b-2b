<!DOCTYPE HTML>
<html>
	<head>
		<title>Calendrier - 2b||!2b</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="rsc/CSS/MainCss.css" />
	</head>
	<body>
    <div id="Page">
      <header>
        <p><img src="rsc/Image/Ubisoft.jpg" alt="Ubisoft"></p>
        <h1>dkbnwckb</h1>
      </header>
			<form method="post" action="index.php">
<p>
 <select name="tests" id="test">
		 <option value="test">Test</option>
		 <option value="pastest">Pas de test</option>
 </select>
 <input type="submit" value="Envoyer" />
</p>
</form>
<?php
if (!empty($_POST["tests"])) {
	if ($_POST["tests"] === "test") {
		echo "<section>";
		echo "<p><img src=\"rsc/Image/Calendrier.png\" alt=\"Calendrier\"></p>";
		echo "</section>";
	}
}
?>
      <section>
        <p><img src="rsc/Image/Calendrier.png" alt="Calendrier"></p>
      </section>
      <footer>
				<?php include("rsc/elements_pages/footer.html");?>
      </footer>
    </div>
  </body>
</html>
