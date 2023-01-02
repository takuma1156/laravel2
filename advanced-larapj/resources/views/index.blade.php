<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COACHTECH</title>
</head>
<body>
  <table>
    <tr>
      <th>更新時間</th>
      <th>id</th>
      <th>test</th>
    </tr>
    @foreach($tests as $test)
    <tr>
      <td>{{$test->timestamp}}</td>
      <td>{{$test->id}}</td>
      <td>{{$test->test}}</td>
    </tr>
    @endforeach
  </table>

</body>
</html>