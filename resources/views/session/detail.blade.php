<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <h1>登録内容</h1>
        <hr>
        <div align="center">
            <table border="0">
                    <tr>
                        <th>お名前</th>
                        <td>
                            {{$username}}
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>
                            {{$tel}}
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            {{$email}}
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <button id="square_btn" onClick="history.back()">戻る</button>
                        </td>
                     </tr>
             </table>
         </div>
     </body>
</html>