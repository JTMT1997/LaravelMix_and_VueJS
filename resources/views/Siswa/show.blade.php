<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('Siswa')}}" class="btn btn-group"> Back</a>
    <table>
        <tr>
            <th>
                <label for="Nama">Nama {{$show->nama_siswa}} </label><br>
                <label for="Alamat">Alamat {{$show->alamat}} </label><br>
                <label for="Nama">Kelas {{$show->toKelas->kelas}} </label>

    

            </th>
        </tr>
    </table>
</body>
</html>