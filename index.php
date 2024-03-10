<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/templates.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <title>My Page Title</title>
</head>
<body>
<?php include 'php/templates/header.php';  ?>
<?php include 'php/templates/nav.php';  ?>

<div class="row">
    <main class="leftcolumn">
      <section>
        <h1>This Weeks Articles</h1>
      <article class="card">
          <h2>TITLE HEADING</h2>
          <h3><em>Title description,</em> Dec 7, 2017</h3>
          <img src="assets/images/CheatEnginePic.png" alt="Cheat Engine Tutorial Cover">
          <h3>Some text..</h3>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </article>
      <hr>
      <article class="card">
          <h2>TITLE HEADING</h2>
          <h3><em>Title description,</em> Dec 7, 2017</h3>
          <img src="assets/images/OlydbgPic.png" alt="Oly dbg Tutorial Cover">
          <h3>Some text about me in culpa qui officia deserunt mollit anim..</h3>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </article>
      </section>
    </main>
    <aside class="rightcolumn">
      <div class="card">
        <h2>About Me</h2>
        <video controls>
        <source src="assets/video/rich.mp4">
            video not working
        </video>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      </div>
      <div class="card">
        <details open>
          <summary>Populare Posts</summary>
          <blockquote class="twitter-tweet">
            <p lang="en" dir="ltr"> A social media platform’s policies are good if the most extreme 10% on left and right are equally unhappy</p>&mdash; Elon Musk (@elonmusk)</p>
            <a href="https://twitter.com/elonmusk/status/1516483038242385928?ref_src=twsrc%5Etfw">April 19, 2022</a>
          </blockquote>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
            /* This is causing the validator to throw errors */
        </script>
        <div class="video-wrapper">
          <iframe class="vid" src="https://www.youtube.com/embed/hXX4P1Up7KA"></iframe>
        </div>
        </details>
      </div>
      <div class="card">
        <label for="difficulty-select">How difficult is the hacking blog to understand?:</label>
        <select name="difficulties" id="difficulty-select">
          <option value="">--Please choose an option--</option>
          <option value="easy peasy">Easy peasy</option>
          <option value="easy">Easy</option>
          <option value="ok">Ok</option>
          <option value="hard">Hard</option>
          <option value="wtf">WTF</option>
        </select>
      </div>
    </aside>
  </div>
    <?php include 'php/templates/footer.php'; ?>
    <div class="fixed">
<a href="#">Get back up</a>
</div>
</body>
</html>


