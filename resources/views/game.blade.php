<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>小遊戲</title>
</head>
<body>
    <script src = "{{URL::asset('//code.jquery.com/jquery-3.4.1.slim.min.js')}}" integrity = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous"></script>
    <script src = "{{URL::asset('//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link disabled" href="#">首頁</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="card" style="border: solid 8px rgb(150, 183, 223)">
            <div class="card-header" style="position: relative;top: 20px;background-color: lightblue;">
                小遊戲
            </div>
            <div class="row" style="position: relative; padding: 20px 20px 30px 30px;">
                @foreach ($rows as $row)
                <div class="col-3" style="padding-top: 20px;">
                    <div class="card" style="width: 18rem;border: solid 2px rgb(108, 159, 222)">
                        <a href="recreation/{{$row->id}}">
                        <img src="picture/{{$row->id}}.jpg" style="height:300px" class="card-img-top">
                        <div class="card-body">
                            <span class="card-text" style="padding:0px 20px"><a href="recreation/{{$row->id}}">{{$row->id}}{{$row->name}}</span>
                            <button type="button" class="btn btn-light"><a href="recreation/{{$row->id}}">開始玩</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>