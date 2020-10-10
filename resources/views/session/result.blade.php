<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <h1>{{$username}}さん新規登録完了</h1>
        <hr>
        <div align="center">
                登録内容の確認
                <form action="/sessions/detail" method="get">
                    <input type="submit" value="確認">
                </form>
                <form action="/sessions/logout" method="get">
                    <input type="submit" value="ログアウト">
                </form>
         </div>
     </body>
</html>