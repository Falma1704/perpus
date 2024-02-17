<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <h1>Koleksi</h1>

    <table border="1 solid">
         <tr>
             <th>KoleksiID</th>
             <th>UserID</th>
             <th>BukuID</th>
         </tr>
         @php
             $no = 1;
         @endphp
         @foreach ($koleksipribadi as $item)  
 
         <tr>
             <td>{{ $no++ }}</td>
             <td>{{ $item->koleksiid }}</td>
             <td>{{ $item->userid }}</td>
             <td>{{ $item->bukuid }}</td>
         </tr>
         @endforeach
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>