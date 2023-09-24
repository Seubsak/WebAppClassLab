<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($drinkings as $drinking)
{{$drinking->id}} -> {{$drinking->name}} <br>
@endforeach
    {{-- @foreach($drinkings as $drinking)
{{$drinking->id}} -> {{$drinking->name}} <br>
@endforeach --}}
    {{-- มีกาแฟทั้งหมด {{$num_coffee}} รายการ <br>
ราคาเฉลี่ยของเมนูกาแฟ {{$avg_price}} บาท <br> --}}
    {{-- {{$drinking->id}} -> {{$drinking->name}} --}}
    {{-- @foreach($drinkings as $drinking)
        {{$drinking->id}} -> {{$drinking->name}} <br>
    @endforeach --}}
</body>
</html>
