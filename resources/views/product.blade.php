<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAB8</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        }
        </style>
</head>
<body>


    <h1>สวัสดี {{ auth()->user()->name }}</h1>
    <table border>
        <tr>
            <td>ชื่อสินค้า</td>
            <td>ประเภทสินค้า(TH)</td>
            <td>ประเภทสินค้า(EN)</td>
            <td>จำนวน</td>
            <td>พนักงานที่เพิ่มสินค้า</td>
        </tr>
        @foreach($menu as $list)
        <tr><td>{{ $list->product_name }}</td>
            @if($list->product_type=='Meat')
                <td>เนื้อสัตว์</td>
            @elseif($list->product_type=='Vegetable')
                <td>ผัก</td>
            @elseif($list->product_type=='Carbonated Drink')
                <td>น้ำอัดลม</td>
            @elseif($list->product_type=='Processed Food')
                <td>อาหารแปรรูป</td>
            @endif
            <td>{{$list->product_type}} </td>
            <td>{{$list->product_amount}} </td>
            @foreach($emp as $user)
                @if($list->employee_id==$user->id)
                    <td>{{ $user->name }}</td>
                @endif
            @endforeach
        </tr>
    @endforeach
    </table>
    </body>
</html>


