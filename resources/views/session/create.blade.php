<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <h1>新規登録</h1>
        <hr>
        <div align="center">
            <table border="0">
                <form action="/sessions" method="post">
                    @csrf
                    <tr>
                        <th>お名前</th>
                        <td>
                            <input type="text" name="name" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>
                            <input type="text" name="tel" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>
                            <input type="text" name="email" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td>
                            <input type="password" name="password" value="" size="24">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="新規登録">
                         </td>
                     </tr>
                 </form>
             </table>
         </div>
     </body>
</html>