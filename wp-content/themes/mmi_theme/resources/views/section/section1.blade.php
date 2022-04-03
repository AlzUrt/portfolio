<link href="//db.onlinewebfonts.com/c/07dbbec657f883425aad385f0617c33a?family=Lemon/Milk" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet"> 
<div data-anchor="section1" class="section">
    <canvas></canvas>
    <div class="leftpane"></div>
    <div class="card">
      <img src="wp-content\uploads\2022\02\moi.png" alt="moi meme" class="moi">
    </div>
    
    <div class="rightpane">
        <h1 class="top">Salut,</h1>
        <h1>Moi c'est amaury</h1>
        <h2>Développer web</h2>
        <a href="#section3"><button class="button2 button--wapasha button--text-thick button--text-upper button--size-s">me contacter</button></a>
    </div>



    <div class="nuclear">
        <div class="label">DANGER</div>
        <div class="button-wrap">
          <div class="cover-wrap">
            <div class="hinge">
              <div class="bolt"></div>
              <div class="bolt"></div>
            </div>
            <div class="glass-wrap">
              <div class="glass"></div>
            </div>
          </div>
          <div class="frame">
            <div class="inner-frame">
                <div class="button"></div>
            </div>
          </div>
        </div>
    </div>

    <script>
      document.getElementsByClassName("cover-wrap")[0].addEventListener("click", function(){
        if(this.classList.contains("active")) {
          this.classList.remove("active");
        }
        else this.classList.add("active");
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js" integrity="sha512-K9tDZvc8nQXR1DMuT97sct9f40dilGp97vx7EXjswJA+/mKqJZ8vcZLifZDP+9t08osMLuiIjd4jZ0SM011Q+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js" integrity="sha512-K9tDZvc8nQXR1DMuT97sct9f40dilGp97vx7EXjswJA+/mKqJZ8vcZLifZDP+9t08osMLuiIjd4jZ0SM011Q+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
       VanillaTilt.init(document.querySelector (".card"), {
         max: 12,
         speed: 2000,
         scale: 1.2
       });
    </script>
  </div>