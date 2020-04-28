<?php get_header(); ?>

  <section class="contents">
    <h2 class="heading">WORKS</h2>
    <div class="works">
      <div class="work">
        <ul class="work-infos">
          <li class="work-info work-title" >ポートフォリオ（本サイト）</li>
          <li class="work-info work-img"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio.png" alt="ポートフォリオ" height=480px width=800px></li>
          <li class="work-info work-date" >【開発】2020年4月</li>
          <li class="work-info work-purpose" >【概要】転職活動を目的とした自身のポートフォリオサイト</li>
          <li class="work-info work-purpose" >【開発目的】ポートフォリオサイトの制作、WordPressを用いたWebサイト開発経験</li>
          <li class="work-info work-env" >【開発環境】言語：HTML,CSS,PHP,JavaScript、ツール：WordPress,FileZilla、OS：Mac、DB：MySQL、サーバー：Xserver</li>
          <li class="work-info work-device">【学び】WordPressのオリジナルテーマの制作・導入方法、FTPサーバーの利用</li>
          <li class="work-info work-link"><a class="link" href="<?php echo home_url('/'); ?>">Link</a></li>
          <li class="work-info work-link"><a class="link" href="https://github.com/takeda-shin/my_portfolio_theme">GitHub</a></li>
        </ul>
      </div>
      <div class="work">
        <ul class="work-infos">
          <li class="work-info work-title" >MyPortfolio</li>
          <li class="work-info work-img"><img src="<?php echo get_template_directory_uri(); ?>/images/myportfolio.png" alt="MyPortfolio" height=480px width=800px></li>
          <li class="work-info work-date" >【開発】2020年3月</li>
          <li class="work-info work-purpose" >【概要】自分専用のポートフォリオサイトを誰でもすぐに作れるアプリ</li>
          <li class="work-info work-purpose" >【開発目的】PHPおよびLaravelを用いた開発経験、herokuの利用</li>
          <li class="work-info work-env" >【開発環境】言語：HTML,CSS,PHP、ツール：Laravel、OS：Mac、DB：MySQL、サーバー：heroku</li>
          <li class="work-info work-device">【学び】Laravel制作における基礎、問い合わせフォーム</li>
          <li class="work-info work-link"><a class="link" href="http://myportfolio-iamhere.herokuapp.com/">Link</a></li>
          <li class="work-info work-link"><a class="link" href="https://github.com/takeda-shin/myportfolio">GitHub</a></li>
        </ul>
      </div>
      <div class="work">
        <ul class="work-infos">
          <li class="work-info work-title" >フリマアプリのクローンサイト</li>
          <li class="work-info work-img"><img src="<?php echo get_template_directory_uri(); ?>/images/freemarket.png" alt="ポートフォリオ" height=480px width=800px></li>
          <li class="work-info work-date" >【開発】2019年12月〜2020年2月</li>
          <li class="work-info work-purpose" >【概要】TECH:CAMP卒業課題　某フリマアプリの機能を調査、クローンサイトを制作</li>
          <li class="work-info work-purpose" >【開発目的】アジャイル方式・チーム開発の経験、学習内容の定着</li>
          <li class="work-info work-purpose" >【担当】スクラムマスター、デプロイ、ユーザー新規登録・ログイン機能、商品購入機能</li>
          <li class="work-info work-env" >【開発環境】言語：Haml,Scss,Ruby,JavaScript、ツール：Ruby on Rails、OS：Mac、DB：MySQL、サーバー：AWS</li>
          <li class="work-info work-device">【学び】デプロイ、sessionを用いたデータの扱い、SMS認証、クレジットカード支払い機能</li>
          <li class="work-info work-link"><a class="link" href="http://18.177.64.29/">Link</a></li>
          <li class="work-info work-link"><a class="link" href="https://github.com/takeda-shin/freemarket_sample_58b">GitHub</a></li>
        </ul>
      </div>
      <div class="work">
        <ul class="work-infos">
          <li class="work-info work-title" >ChatSpace</li>
          <li class="work-info work-img"><img src="<?php echo get_template_directory_uri(); ?>/images/chatspace.png" alt="ポートフォリオ" height=480px width=800px></li>
          <li class="work-info work-date" >【開発】2019年11月</li>
          <li class="work-info work-purpose" >【概要】TECH ;CAMP課題　チャットアプリケーション</li>
          <li class="work-info work-purpose" >【開発目的】マークアップからバックエンドまで総合的なスキルの習得</li>
          <li class="work-info work-env" >【開発環境】言語：Haml,Scss,PHP,JavaScript、ツール：Ruby on Rails、OS：Mac、DB：MySQL、サーバー：AWS</li>
          <li class="work-info work-device">【学び】非同期通信、インクリメンタルサーチ、GitHubによるバージョン管理</li>
          <li class="work-info work-link"><a class="link" href="http://54.64.51.157/">Link</a></li>
          <li class="work-info work-link"><a class="link" href="https://github.com/takeda-shin/chat-space">GitHub</a></li>
        </ul>
      </div>
    </div>
  </section>

<?php get_footer(); ?>