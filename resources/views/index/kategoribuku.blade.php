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

    <h1>Kategori Buku</h1>

    <table border="1 solid">
         <tr>
             <th>KategoriID</th>
             <th>Nama Kategori</th>
         </tr>
         @php
             $no = 1;
         @endphp
         @foreach ($kategoribuku as $item)  
 
         <tr>
             <td>{{ $no++ }}</td>
             <td>{{ $item->kategoriid }}</td>
             <td>{{ $item->namakategori }}</td>
         </tr>
         @endforeach
     </table>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>