<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>修改顯示畫面</title>
</head>
<body>
    <script src = "{{URL::asset('//code.jquery.com/jquery-3.4.1.slim.min.js')}}" integrity = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous"></script>
    <script src = "{{URL::asset('//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <form action="administration" method="post" style="border: rgb(215, 234, 240) 5px solid;margin: 50px 250px 0px 250px;padding: 30px 80px;border-radius: 10px;">
        <div class="form-check">
            {{ csrf_field() }}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3>修改顯示畫面</h3>
                    </div>
                    @foreach ($rows as $row)
                    <div class="col-5">
                        {{$row->name}}
                    </div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="{{$row->name}}" @if (($row->mode) == 1) checked @endif value="1">
                        <label class="form-check-label">顯示</label>
                    </div>
                    <div class="col-3">
                        <input class="form-check-input" type="radio" name="{{$row->name}}" @if (($row->mode) == 0) checked @endif value="0">
                        <label class="form-check-label">不顯示</label>
                    </div>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="col-4" style="position: relative;top: 20px;">
                        <input type="submit" value="送出" style="padding:5px 20px;background-color: rgb(210, 230, 237);border: none;border-radius: 3px;">
                    </div>
                </div>             
            </div>
        </div>
    </form>
</body>
</html>