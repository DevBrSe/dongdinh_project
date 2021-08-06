<!DOCTYPE Html>
<html>
<head>
    <title>Login</title>
    <style>
        .login_class{
            background-color:mediumpurple;
            height: 35px;
            margin-left: -8px;
            margin-right: -8px;
        }
        h4{
            margin-top:0px;
            padding: 5px;
            margin-left: 10px;
            color: white;
        }
        h6{
            color:#FFFF00;
        }
        .note_class{
            width: 450px;
            height: 60px;
            background-color:darkgreen;
        }
        .input_info{
            margin-top: 20px;
            margin-left: 30px;
        }
        input{
            display: block;
            width: 300px;
            height: 25px;
        }
        .footer_class{
            background-color:mediumpurple;
        }
        p{
            color: white;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <a href="#">
        <img src={{ URL::asset('/images/schoolname_picture.PNG')}}>
    </a>
    <div class="login_class">
        <h4>ログイン</h4>
    </div>
    <div class="input_info">
        <label>教習生番号
            <input>
        </label>
        <label>パスワード
            <input>
        </label>
        <div class="note_class">
            <h6>≪ご利用上の注意≫<br>
            .ブラウザの戻る、進、更新ボタンは利用できません。<br>
            .複数ブラウザで当システムを利用することは出来ません。</h6>
        </div>
        <button>クリア</button>
        <button>ログイン</button>
    </div>
    <a href="#">新規登録</a>
</body>
<footer>
    <div class="footer_class">
        <p>created by CEO Nguyen</p>
    </div>
</footer>
</html>