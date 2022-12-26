<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" >
    <title>4eachblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
  </head>

  <body>
    <?php

      mb_internal_encoding("utf8");
      $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
      $stmt =$pdo->query("select*from 4each_keijiban");

    ?>

    <div class="blog">
      <img src="4eachblog_logo.jpg" >
    </div>

    <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>

    <main>
      <div class="mainyou">
        <div class="lefty">
          <h1>プログラミングに役立つ掲示板</h1>
          <form method="post" action="insert.php">

            <div class="nyuuryoku_form">
              <p>入力フォーム</p>
            </div>

            <div>
              <label>ハンドルネーム</label>
              <br>
              <input type="text" class="text" size="35" name="handlename" />
            </div>

            <div>
              <label>タイトル</label>
              <br>
              <input type="text" class="text" size="35" name="title" />
            </div>

            <div>
              <label>コメント</label>
              <br>
              <textarea cols="35" rows="7" name="comments"></textarea>
            </div>

            <div>
              <input type="submit" class="submit" value="送信する" />
            </div>

          </form>  

          <br>
          
        
          <?php

            while($row=$stmt->fetch()){
              echo "<div class='kiji'>";
              echo "<h2>".$row['title']."</h2>";
              echo "<div class='contents'>";
              echo $row['comments'];
              echo  "<div class='handlename'>posted by".$row['handlename']."</div>";
              echo "</div>";
              echo "</div>";
            }

          ?>

        </div>
      

        <div class="righty">
          <h3>人気の記事</h3>
          <ul>
            <li>PHPオススメ本</li>
            <li>PHP Myadminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
          </ul>
          <h3>オススメリンク</h3>
          <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
          </ul>
          <h3>カテゴリ</h3>
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>javaScript</li>
          </ul>
        </div>
      </div>
    </main>

    <footer>
      copyright internous | 4each blog is the one which provides A to Z abot
      programming.
    </footer>

  </body>

</html>

