<?php


?>


<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Signers</title>
<link rel='stylesheet' href='css/style.css'>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.css' />  
<script src='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.js'></script> 



<div id="headerFloatingMenu">
<img class="back_btn"  src="img/return.png"   onclick="history.back()" alt="return"> 
<nav>
<ul id="navi">
<li><a href="interpreting_list.php" style="color:white">予約確認</a></li>
<li><a href="#" style="color:white">履歴一覧</a></li>
<li><a href="#"  style="color:white">お問い合わせ</a></li>
</ul>
</nav>
<!-- ボタン部分ここを後で追加するだけ-->
<div class="nav_btn" id="nav_btn">
<span class="hamburger_line hamburger_line1"></span>
<span class="hamburger_line hamburger_line2"></span>
<span class="hamburger_line hamburger_line3"></span>
</div>
<div class="nav_bg" id="nav_bg"></div>
<!-- /ボタン部分ここを後で追加するだけ-->
</div>


</head>




<body>
<main>

<P><br><br><br></P>  <!--  送信ボタンがトップメニューに隠れるため、行の高さ調整。後で改善する  -->

<div class = "Form-Title">
<h2>ユーザー登録</h2>
</div>
<p></br>
<p class = "p_head"><span class="font_bold">あなた自身の情報を</span>登録してください。</br> 
<p class = "p_head">手話通訳派遣の手続きで必要となる情報です。<br>
<p class = "p_head">あとで修正も可能です。</p>
<p class = "p_head"><a href="https://www.youtube.com/watch?v=QG7hN530yrw" data-lity="data-lity">説明動画を見る</a></p>



<!-- <form method="get" action="get_confirm.php"> -->
<form action="userdata.php" method="post" class="User-Form">
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required">必須</span>氏名</p>
            <input type="text" class="Form-Item-Input" placeholder="例）手話　太郎" name="user_name">
        </div>
    
    
        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>性別</p>
            <select name="sex" class="Form-Item-Input">
                <option value="">選択してください</option>
                <option value="女性">女性</option>
                <option value="男性">男性</option>
                <option value="LGBTQ">LGBTQ</option>
            </select>
        </div>


        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>生年月日</p>
            <input type="date" class="Form-Item-Input" name="calendar" max="9999-12-31">
        </div>

        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>都道府県</p>
            <select name="pref" class="Form-Item-Input">
                <option value="">選択してください</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都" selected>東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮城県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
        </div>



        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>住所</p>
            <input type="user_address" name="user_address" class="Form-Item-Input" placeholder="例）〇〇市△△町×丁目×-×">
        </div>


        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>FAX番号</p>
            <input type="fax_number" name="fax_number" class="Form-Item-Input" placeholder="例）000-0000-0000">
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
            <input type="email" name="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
        </div>
        <!-- <div class="Form-Item">
            <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
            <textarea class="Form-Item-Textarea"></textarea>
        </div> -->
     </div>    
        
        <input type="submit" class="Form-Btn" value="送信する">
        <P><br><br><br><br></P>  <!--  送信ボタンがボトムメニューに隠れるため、行の高さ調整。後で改善する  -->
    


    </form>







    </main>





    </body>
    <footer>

    <div id="footerFloatingMenu">
        <a  class="a_button" href="index.html"><img src="img/home.png"></a>
        <a  class="a_button" href="#"><img src="img/movie.png"></a>
        <a  class="a_button" href="interpreting_menu.html"><img src="img/sign.png"></a>
        <a  class="a_button" href="#"><img src="img/videochat.png"></a>
        <a  class="a_button" href="userdata_menu.html"><img src="img/user.png"></a>
    </div>


    </footer>

    <script>
    // jQuery(function() {
    //     var topBtn = jQuery('#footerFloatingMenu');
    //     topBtn.hide();
    //     jQuery(window).scroll(function () {
    //         if (jQuery(this).scrollTop() > 200) { // 200pxで表示
    //             topBtn.fadeIn();
    //         } else {
    //             topBtn.fadeOut();
    //         }
    //     });
    // });


    $(function() {
                /* SP menu */
                function toggleNav() {
                    var body = document.body;
                    var hamburger = document.getElementById('nav_btn');
                    var blackBg = document.getElementById('nav_bg');
                    hamburger.addEventListener('click', function() {
                        body.classList.toggle('nav_open'); //メニュークリックでnav-openというクラスがbodyに付与
                    });
                    blackBg.addEventListener('click', function() {
                        body.classList.remove('nav_open'); //もう一度クリックで解除
                    });
                }
                toggleNav();
            });


            $(function () {
        $.FindContainer = function () {
            $('.tab-content>div').each(function findcontent() {
                var newindex = $('.activetab').index();
                var newheight = $('.activetab').height();
                $('.tab-content').animate({
                    'height': newheight+20
                }, 100);
                var otherindex = $(this).index();
                var substractindex = otherindex - newindex;
                var currentwidth = $('.multipletab').width();
                var newpositions = substractindex * currentwidth;
                $(this).animate({
                    'left': newpositions
                });
            });
        };
        $.FindId = function () {
            $('.tab-content>div').each(function () {
                if ($(this).attr('id') == $('.active').attr('id')) {
                    $('.tab-content>div').removeClass('activetab');
                    $(this).addClass('activetab');
                }
            });
        };
        $('.tab-buttons>span').first().addClass('active');
        $('.tab-content>div').each(function () {
            var activeid = $('.active').attr('id');
            if ($(this).attr('id') == activeid) {
                $(this).addClass('activetab');
            }
            var currentheight = $('.activetab').height();
            var currentwidth = $('.multipletab').width();
            var currentindex = $(this).index();
            var currentposition = currentindex * currentwidth;
            $(this).css({
                'left': currentposition,
                    'width': currentwidth - 40,
                    'padding': '10px 20px'
            });
            $(this).attr('data-position', currentposition);
            $('.tab-content').css('height', currentheight+20);
        });
        $('.tab-buttons>span').click(function () {

            $('.tab-buttons>span').removeClass('active');
            $(this).addClass('active');
            var currentid = $('.active').attr('id');
            $.FindId();
            $.FindContainer();
        });
        $('.next').click(function () {
            var activetabindex = $('.activetab').index() + 1;
            var containers = $('.tab-content>div').length;
            if (containers == activetabindex) {
                $('.tab-buttons>span').removeClass('active');
                $('.tab-buttons>span').first().addClass('active');
                var currentid = $('.active').attr('id');
                $.FindId();
                $.FindContainer();
            } else {
                var currentopen = $('.active').next();
                $('.active').removeClass('active');
                currentopen.addClass('active');
                $.FindId();
                $.FindContainer();
            }
        });
    $('.prev').click(function(){
        var activetabindex = $('.activetab').index();
            if (activetabindex == 0) {
                $('.tab-buttons>span').removeClass('active');
                $('.tab-buttons>span').last().addClass('active');
                var currentid = $('.active').attr('id');
                $.FindId();
                $.FindContainer();
            } else {
                var currentopen = $('.active').prev();
                $('.active').removeClass('active');
                currentopen.addClass('active');
                $.FindId();
                $.FindContainer();
            }
    });
    });


    </script>


</html>


