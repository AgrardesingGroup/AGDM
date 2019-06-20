<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kontaktformular</title>
    <?php
    if(isset($_POST["submit"])){
      mail(" ChrisiGaming@gmx.at", "Kontaktformular", 'Name: '.$_POST["name"]. 'Betreff: '.$_POST["Betreff"]. ' Email: '.$_POST["email"].'Nachricht: '.$_POST["message"]);
      ?>
	  <h1 style="color: Aqua;">Das Kontaktformular wurde abgesendet!</h1>
      <?php
    }
     ?>
	 <H1 Align="center">
    <form action="index.php" method="post">
      <input type="text" name="name" placeholder="*Name" required><br>
	  <p>
     </p>
	 <input type="text" name="Betreff" placeholder="*Betreff" required><br>
	  <p>
     </p>
      <input type="email" name="email" placeholder="*Email" required><br>
	  <p>
     </p>
	  <p>
     </p>
      <textarea name="message" rows="8" cols="80" required></textarea><br>
	  <p>
     </p>
	  <p>
     </p>
	 * Felder mit Sternen müssen ausgefüllt werden! 
	  <p>
     </p>
      <button type="submit" name="submit">Absenden</button>
    </form>
	</H1 Align="center">
  
  </body>
  <footer>  <small Align="center"> Formular by AgrardesignGruop2019</small Align="center"> </footer>
</html>
