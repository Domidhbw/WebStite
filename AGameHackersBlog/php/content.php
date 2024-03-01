<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <html lang="en">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>A Game Hackers Blog</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/style3.css">
      <link rel="stylesheet" href="https://use.typekit.net/doe1yvq.css">
   </head>
   <body>
      <main class="ContainerContent">
      <nav>
            <a href="../index.php" id="Logo">
         </a>
            <div class="Menu">
               <input type="checkbox" class="toggle-menu">
               <div class="checkboxGrafik"></div>
               <ul class="Hamburger">
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="kontakt.php">WhoAmI</a></li>
                  <li><a href="impressum.php">Imprint</a></li>
                  <li> <input type="text" placeholder="Search.."></li>
               </ul>
            </div>
         </nav>
         <article>
            <div class="HeadlineArticle">
               <h1>Cheat Engine Tutorial</h1>
            </div>
            <div class="Date">
               <h3>17.11</h3>
            </div>
            <div class="Close"><a href="../index.php">X</a></div>
            <div class="ArticleText">
               <p>So let's go through the Cheat Engine Tutorial (x64). You can download Cheat Engine here (https://www.cheatengine.org/downloads..php). </p>
               <h2>Step 1: Introduction</h2>
               <p>Open Cheat Engine click on the icon in the Top left and select your game.</p>
               <img src="../assets/content/CheatEngineContent/0.jpg" alt="CheatEngine software with the atach icon highlighted" title="CheatEngine software with the atach icon highlighted">
               <p>Now lets take a look at the main Window. You can search for Values on the right site. On the left site are going to be your results. And in the bottom you can add Values to play around with them.</p>
               <h2>Step 2: Exact Value scanning</h2>
               <p>So setup the memory scanner to find an integer and for exact value scan then set the value to the current value, most integers will be stored in a 4 byte variable, so let's start there.
                  Note: Integers can be stored in a 1 byte variable (byte), 2 byte variable (int16/short), 4 byte variable (int32/int), or 8 byte variable (int64/long).
                  When ready click the first scan button.
               </p>
               <img  src="../assets/content/CheatEngineContent/1.png" alt="CheatEngine software with the First Scan, value:, Scan Type and value Type fields highlighted" title="CheatEngine software with the First Scan, value:, Scan Type and value Type fields highlighted" >
               <p>You Should see a list of addresses, in the found address list, like this.</p>
               <img src="../assets/content/CheatEngineContent/2.png" alt="CheatEngine software with the adress field highlighted" title="CheatEngine software with the adress field highlighted">
               <p>Now Click the hit me button, then reenter the current value and click the next scan button.
                  Note the red value in the list, this shows that the value has changed.
               </p>
               <img src="../assets/content/CheatEngineContent/3.png" alt="CheatEngine software with the Next Scan and value field highlighted as well as one memory adress" title="CheatEngine software with the Next Scan and value field highlighted as well as one memory adress">
               <p>After clicking next scan you may need to keep clicking hit me and rescanning tell the found address list is small enough to work with.</p>
               <img src="../assets/content/CheatEngineContent/4.png" alt="CheatEngine software with only one adress wich is highlighted" title="CheatEngine software with only one adress wich is highlighted">
               <p>Just double click the address in the found list to add it to the cheat table. Then change the value and freeze the address, double click the value in the address list to edit it, freeze it by clicking the enabler/freeze box.</p>
               <img src="../assets/content/CheatEngineContent/5.png" alt="Only the bottom of the CheatEngine software is visible and it shows an adress" title="Only the bottom of the CheatEngine software is visible and it shows an adress" >
               <p>Now the next button should be enabled, click it to go to the next step. Click the hit me button again if the next button is not enabled already.</p>
            </div>
         </article>
      </main>
   </body>
</html>