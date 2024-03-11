<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/templates.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <title>A Game Hackers Blog</title>
</head>

<body>
  <?php include 'php/templates/header.php';  ?>
  <?php include 'php/templates/navIndex.php';  ?>

  <div class="row">
    <main class="leftcolumn">
      <section>
        <h1>This Weeks Articles</h1>
        <article class="card">
          <h2>CHEAT ENGINE TUTORIAL</h2>
          <h3><em>A small guide,</em> Mar 11, 2024</h3>
          <img src="assets/images/CheatEnginePic.png" alt="Cheat Engine Tutorial Cover">
          <h3>Be ready to become a cheat engine pro</h3>
          <p><a href="php/articleoncheatengine.php">Click here to see the page</a></p><br>
          <p></p>
        </article>
        <hr>
        <article class="card">
          <h2>OllyDbg TUTORIAL</h2>
          <h3><em>Easy tutorial,</em> Mar 11, 2024</h3>
          <img src="assets/images/OlydbgPic.png" alt="Oly dbg Tutorial Cover">
          <h3>Let's go!</h3>
          <p><a href="php/articleonolydbg.php">Click here to see the page</a></p><br>
          <p></p>
        </article>
      </section>
    </main>
    <aside class="rightcolumn">
      <div class="card">
        <h2>Crazyy Hacking !!!!</h2>
        <video controls>
          <source src="assets/video/rich.mp4">
          video not working
        </video>
      </div>
      <div class="card">
        <details open>
          <summary>Populare Posts</summary>
          <blockquote class="twitter-tweet">
            <p lang="en" dir="ltr">Book is out! Contains 400+ pages of game hacking content, covering topics from basic reversing to writing aimbots and wallhacks. Also includes 100+ pages of commented code for a variety of hacks. <a href="https://twitter.com/hashtag/Hacking?src=hash&amp;ref_src=twsrc%5Etfw">#Hacking</a> <a href="https://twitter.com/hashtag/book?src=hash&amp;ref_src=twsrc%5Etfw">#book</a> <a href="https://twitter.com/hashtag/tutorials?src=hash&amp;ref_src=twsrc%5Etfw">#tutorials</a> <br><br>Grab it for free at: <a href="https://t.co/pv0rqY8sqG">https://t.co/pv0rqY8sqG</a></p>&mdash; Game Hacking Academy (@GameHackingAcad) <a href="https://twitter.com/GameHackingAcad/status/1457714266287579139?ref_src=twsrc%5Etfw">November 8, 2021</a>
          </blockquote>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <div class="video-wrapper">
            <iframe class="vid" src="https://www.youtube.com/embed/0_Eif2qGK7I?si=-q9od6zKtGQ9Cn1C"></iframe>
          </div>
        </details>
      </div>
      <div class="card">
        <form action="php/feedback.php" method="post">
          <label for="difficulty-select">How difficult is the hacking blog to understand?:</label>
          <select required name="difficulties" id="difficulty-select">
            <option value="">--Please choose an option--</option>
            <option value="easy peasy">Easy peasy</option>
            <option value="easy">Easy</option>
            <option value="ok">Ok</option>
            <option value="hard">Hard</option>
            <option value="wtf">WTF</option>
          </select>
          <br>
          <label for="explanation">Explain your decision:</label><br>
          <textarea id="explanation" name="explanation" rows="4" cols="50"></textarea><br>
          <input type="submit" value="Submit">
        </form>


      </div>
    </aside>
  </div>
  <?php include 'php/templates/footerIndex.php'; ?>

</body>

</html>