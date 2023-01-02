<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>add</title>
</head>
<body>
  <form action="/add" method="POST">
    @csrf
    <p>テスト名を入力して、送信ボタンを押してください。</p>
    <input type="text" name="test">
    <br>
    <input type="button" value="送信" name="test_button">  
  </form>
</body>
</html>