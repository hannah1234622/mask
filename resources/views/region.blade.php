@extends('layouts.base')

@section('title', '口罩供需資訊查詢')

@section('header')
    <li>若資料呈現灰色底色者庫存可能不正確。</li>
    <li>新增我附近的藥局功能，可以查詢方圓500公尺到3公里內的販售點。</li>
    <li>加入藥局販售備註，若是採發號碼牌者，庫存可能已經被預約完。</li>
    <li>如果您是藥局，發現備註有誤或想加入備註請直接使用藥局VPN系統裡的備註資訊。</li>
@endsection

@section('content')
    @if (isset($locations))
        @if (count($locations)!=0)
        <table class='table table-striped'>
            <thead>
                <tr>
                    <td>機構編號</td>
                    <td>藥局/機構名稱</td>
                    <td>地址</td>
                    <td>電話</td>
                    <td>口罩庫存/大人</td>
                    <td>口罩庫存/兒童</td>
                    <td>更新時間</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                <tr>
                    <td>{{$location->Institution_Code}}</td>
                    <td>{{$location->Institution_Name}}</td>
                    <td>{{$location->Institution_Address}}</td>
                    <td>{{$location->Institution_Phone}}</td>
                    <td>{{$location->Adult_Mask}}</td>
                    <td>{{$location->Child_Mask}}</td>
                    <td>{{$location->Source_Time}}</td>
                </tr>
                @endforeach 
            </tbody>
        @else
            <h3 style="color:red;">查無資料</h3>
        @endif             
        </table>                
    @else
        <p>庫存資料來源: 健保特約機構口罩剩餘數量明細清單    備註資料來源: 全民健康保險特約院所固定服務時段</p>
        <p>更新頻率: 庫存每90秒更新一次, 備註每日更新3次(08:00、14:00、18:00)</p>
    @endif
@endsection
