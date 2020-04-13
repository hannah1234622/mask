<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>管理平台</title>
</head>
<body>
    <script src = "{{URL::asset('//code.jquery.com/jquery-3.4.1.slim.min.js')}}" integrity = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous"></script>
    <script src = "{{URL::asset('//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class="jumbotron">
        <h1 class="display-4">管理平台</h1>
        <hr class="my-4">
        <p>可更改平台遊戲 , 更新注單</p>
    </div>
    <div class="container-fluid">
        <a class="btn btn-primary btn-lg btn-block" href="manage" role="button">更改平台遊戲</a>
        <a class="btn btn-secondary btn-lg btn-block" href="betrecord" role="button">更新注單號碼</a>
    </div>
</body>
</html>