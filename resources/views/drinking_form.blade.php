<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/drinking/create" method="post">
        @csrf
        <p>ชื่อเครื่องดื่ม: <input type="text" name="name"></p>
        <p>ประเภทเครื่องดื่ม: <select name="type">
        <option value=1>กาแฟ</option>
        <option value=2>ชา</option>
        </select>
        </p>
        <p>ราคาเครื่องดื่ม: <input type="number" name="price"></p>
        <p><input type="submit" value="เพิ่มเครื่องดื่ม"></p>
        </form>
</body>
</html>
