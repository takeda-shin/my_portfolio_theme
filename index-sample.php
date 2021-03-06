<?php get_header(); ?>

  <header class="header">
    <p class="site-title-sub">"Young Lion" Engineer</p>
    <h1 class="site-title">SHINYA TAKEDA</h1>
    <div class="buttons">
      <a class="button" href="#about">ABOUT</a>
      <a class="button" href="#about">WORKS</a>
      <a class="button" href="#hello">CONTACT</a>
    </div>
  </header>

  <section class="about">
    <h2 class="heading">ABOUT</h2>
    <p class="about-text">
      ３０歳で「お金を稼げる（＝必要とされ続ける）スキルを持つ自分」になるため、エンジニアへの転職を決意。<br>
      プログラミングスクール「TECH:CAMP」を卒業し、現在転職活動中。
    </p>
    <p class="about-text">
      欲しいものは毎日の成長とその先にあるプロダクト。作りたいのは「一目で使い方がわかるモノ」。<br>
      自分の成長が、自分と、家族と、たくさんの人の幸せに繋がる未来を信じて、スキルを磨き続けます。<br>
    </p>
    <a class="button button-more button-about" href="#about">MORE</a>
  </section>

  <section class="works">
    <h2 class="heading">WORKS</h2>
    <div class="swiper-container">
      <div class="swiper-wrapper">
          <div class="swiper-slide slide1">
            <div class="mask">
              <a class="caption">It's fresh !</a>
            </div>
          </div>
          <div class="swiper-slide slide2">
            <div class="mask">
              <a class="caption">It's fresh !</a>
            </div>
          </div>
          <div class="swiper-slide slide3">
            <div class="mask">
              <a class="caption">It's fresh !</a>
            </div>
          </div>
          <div class="swiper-slide slide4">
            <div class="mask">
              <a class="caption">It's fresh !</a>
            </div>
          </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <!-- <script>
    var mySwiper = new Swiper ('.swiper-container', {
      effect: 'coverflow',
      slidesPerView: 2,
      centeredSlides: true,
      loop: true,
      coverflowEffect: {
          slideShadows: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })
    </script> -->
    <a class="button button-more" href="#work">MORE</a>
  </section>
  
  <section class="skills">
    <h2 class="heading">SKILL</h2>
    <div class="skills-wrapper">
      <div class="skill-box">
        <i class="skill-icon fa fa-code"></i>
        <div class="skill-title">FRONT-END</div>
        <p class="skill-text">
          HTML/CSS/JavaScript/Jquery<br>
          読みやすいマークアップと<br>
          ユーザーの使い心地を意識しています。
        </p>
      </div>
      <div class="skill-box">
        <i class="skill-icon fa fa-code"></i>
        <div class="skill-title">BACK-END</div>
        <p class="skill-text">
          Ruby(Ruby on Rails)/PHP(Laravel)<br>
          機能をいかに実装するか。<br>
          考え・調査し・試す。その行程が好きです。
        </p>
      </div>
      <div class="skill-box">
        <i class="skill-icon fa fa-database"></i>
        <div class="skill-title">DB</div>
        <p class="skill-text">
          MySQL
          <br>
          環境構築・DB設計から<br>
          一通りのことをこなせます。
        </p>
      </div>
    </div>
    <div class="skills-wrapper">
      <div class="skill-box">
        <i class="skill-icon fa fa-server"></i>
        <div class="skill-title">SERVER</div>
        <p class="skill-text">
          aws/heroku/Xserver<br>
          チーム開発でデプロイを担当(aws)。<br>
          現在はXserverへのデプロイを学習中。
        </p>
      </div>
      <div class="skill-box">
        <i class="skill-icon fa fa-github"></i>
        <div class="skill-title">TOOLS</div>
        <p class="skill-text">
          VScode/GitHub/WordPress/slack...<br>
          開発に使えそうなツールは<br>
          とにかく試してみたい派。
        </p>
      </div>
      <div class="skill-box">
        <i class="skill-icon fa fa-users"></i>
        <div class="skill-title">DIRECTION</div>
        <p class="skill-text">
          ホームページ・システム・広告制作<br>
          ディレクションの経験もあります。<br>
        </p>
      </div>
    </div>
  </section>

  <section class="contact">
    <h2 class="heading">CONTACT</h2>
    <form class="contact-form">
      <input type="text" name="name" placeholder="NAME">
      <textarea name="message" placeholder="MESSAGE"></textarea>
      <input type="submit" value="SEND">
    </form>
  </section>

  <div id="pageup" class="pageup pageup--active">
    <a class="pageup__arr" href="#"></a>
  </div>

<?php get_footer(); ?>