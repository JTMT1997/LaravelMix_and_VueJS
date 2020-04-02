<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <a href="{{url('Siswa/create')}}" class="btn btn-info">Tambah Siswa</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Siwa</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($a as $item)
                    
                <td>{{$item->id}}</td>
                <td>{{$item->nama_siswa}}</td>
                <td>{{$item->toKelas->kelas}}</td>
                <td>{{$item->alamat}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    
</body>
</html>