<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "csrf-token" content="{{csrf_token()}}">
    <link rel = "stylesheet" href = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href = "{{URL::asset('css/region.css')}}">
    <title>@yield('title')</title> 
</head>
<body>
    <script text = "text/javascript" src="{{URL::asset('js/region.js')}}"></script>
    <script src = "{{URL::asset('//code.jquery.com/jquery-3.4.1.slim.min.js')}}" integrity = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous"></script>
    <script src = "{{URL::asset('//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src = "{{URL::asset('//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class = "jumbotron" style="position: absolute;top: 0px;width: 100%;">
        <h1><span class="badge badge-secondary" style="position: absolute;left: 250px;">YUHUA</span></h1></h1>
        <div style = "background-color: white;width: 80%;margin-left: 10%;padding: 30px;margin-top: 5%;">
            <h1 style = "color: rgb(4, 129, 255);font-weight: bold;">口罩供需即時資訊查詢</h1>
            <hr><span id="ShowBox"></span>
            <ol style = "border: rgb(209, 208, 208) 1px solid;position: relative;left: 15%;width: 70%;padding: 20px;border-radius: 5px;">
            @yield('header')
            </ol>
            @csrf
            <p>
                <button type = "button" class = "btn btn-secondary" disabled>縣市</button>
                <select name="city" id = "city" onchange = "change(this.value);">
                    <option value = "0">請選擇</option>
                    <option value = "1"
                    @if (isset($city) && $city == 1)
                        selected
                    @endif
                    >台北市</option>
                    <option value = "2"
                    @if (isset($city) && $city == 2)
                        selected
                    @endif                    
                    >基隆市</option>
                    <option value = "3"
                    @if (isset($city) && $city == 3)
                        selected
                    @endif                    
                    >新北市</option> 
                    <option value = "4"
                    @if (isset($city) && $city == 4)
                        selected
                    @endif                    
                    >宜蘭縣</option>
                    <option value = "5"
                    @if (isset($city) && $city == 5)
                        selected
                    @endif 
                    >桃園市</option>
                    <option value = "6"
                    @if (isset($city) && $city == 6)
                        selected
                    @endif                    
                    >新竹市</option>
                    <option value = "7"
                    @if (isset($city) && $city == 7)
                        selected
                    @endif                    
                    >新竹縣</option>
                    <option value = "8"
                    @if (isset($city) && $city == 8)
                        selected
                    @endif                    
                    >苗栗縣</option>
                    <option value = "9"
                    @if (isset($city) && $city == 9)
                        selected
                    @endif                    
                    >台中市</option>
                    <option value = "10"
                    @if (isset($city) && $city == 10)
                        selected
                    @endif                    
                    >彰化縣</option>
                    <option value = "11"
                    @if (isset($city) && $city == 11)
                        selected
                    @endif                    
                    >南投縣</option>
                    <option value = "12"
                    @if (isset($city) && $city == 12)
                        selected
                    @endif                    
                    >嘉義市</option>
                    <option value = "13"
                    @if (isset($city) && $city == 13)
                        selected
                    @endif                    
                    >嘉義縣</option>
                    <option value = "14"
                    @if (isset($city) && $city == 14)
                        selected
                    @endif                    
                    >雲林縣</option>
                    <option value = "15"
                    @if (isset($city) && $city == 15)
                        selected
                    @endif                    
                    >台南市</option>
                    <option value = "16"
                    @if (isset($city) && $city == 16)
                        selected
                    @endif                    
                    >高雄市</option>
                    <option value = "17"
                    @if (isset($city) && $city == 17)
                        selected
                    @endif
                    >澎湖縣</option>
                    <option value = "18"
                    @if (isset($city) && $city == 18)
                        selected
                    @endif    
                    >金門縣</option>
                    <option value = "19"
                    @if (isset($city) && $city == 19)
                        selected
                    @endif           
                    >屏東縣</option>
                    <option value = "20"
                    @if (isset($city) && $city == 20)
                        selected
                    @endif                    
                    >台東縣</option>
                    <option value = "21"
                    @if (isset($city) && $city == 21)
                        selected
                    @endif
                    >花蓮縣</option>
                    <option value = "22"
                    @if (isset($city) && $city == 22)
                        selected
                    @endif
                    >連江縣</option>
                </select>
                <button type = "button" class = "btn btn-secondary" disabled>區域</button>
                <select name = "region" id = "region"></select>
                <input type = "button" class = "btn btn-secondary" onclick = "send();" value="查詢口罩庫存">
            </p>               
            <div class = "container">
                @yield('content')
            </div>
        </div>
    </div>
    <script>
    function send() 
    {
        var city = document.getElementById("city").value;
        if (city != 0) {
            var region = document.getElementById("region").value;
            if (region != 0) {
                var location = regions[city][region];
                document.location.href = "http://127.0.0.1/mask/" + city + "/" + region + "/" + location;
            } else {
                alert("請選擇縣市與區域～");
            }
        }else{
            alert("請選擇縣市與區域～");
        }
    };
    function change(value) 
    {
        document.getElementById("region").options.length = 0;//第二個選項設定初始值
        var url = location.pathname;
        var ary1 = url.split('/');
        var ary2 = ary1[3];
        for (var i=0;i<regions[value].length;i++){ //for(變數為零;regionArray矩陣長度-1;變數加一)
            var node = document.createElement("option");//產生一個option的容器
            var text = document.createTextNode(regions[value][i]);//產生文字節點後 將含有數據的字串加入文字節點中
            node.setAttribute("value",i);//為變數node賦予屬性
            node.appendChild(text);//將內容移動到node元素
            if (i == ary2) {
                node.setAttribute("selected", 'true');
            } 
            document.getElementById("region").appendChild(node);//在region的id賦予node元素
        }            
    };
    $(function () 
    {
        //取得路由參數
        if (!!window.performance && window.performance.navigation.type === 0) {
            //載入下一頁    
            console.log('navigation');
            var url = location.pathname;
            var ary1 = url.split('/');
            var ary2 = ary1[2];
            if (ary2 < regions.length-1 && ary1[1] == "mask") {
                change(ary2);
            } else if (ary1[1] !== "front") {
                alert("無法確認該網頁");
            }
        }
        //取得路由參數
        if (!!window.performance && window.performance.navigation.type === 1) {
            //重整
            console.log('Reloading');
            var url = location.pathname;
            var ary1 = url.split('/');
            var ary2 = ary1[2];
            if (ary2 < regions.length-1 && ary1[1] == "mask") {
                change(ary2);
            } else if (ary1[1] !== "front") {
                alert("無法確認該網頁");
            }
        }
        //取得路由參數
        if (!!window.performance && window.performance.navigation.type === 2) {
            //回上一頁
            console.log('backforward');
            var url = location.pathname;
            var ary1 = url.split('/');
            var ary2 = ary1[2];
            if (ary2 < regions.length-1 && ary1[1] == "mask") {
                change(ary2);
            } else if (ary1[1] !== "front") {
                alert("無法確認該網頁");
            }
        }
    });
    </script>
</body>
</html>