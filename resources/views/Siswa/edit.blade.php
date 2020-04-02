<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('Siswa/update/'.$edit->id)}}" method="POST">
@csrf
<label for="nama_siswa">Nama Siswa</label>
<input type="text" name="nama_siswa" id="" value="{{$edit->nama_siswa}}"><br>
<label for="alamat">alamat</label>
<input type="text" name="alamat" id="" value="{{$edit->alamat}}"><br>
<label for="kelas">Kelas</label>

<select name="kelas_id" id="">
    
        @foreach ($b as $item)
    <option value="{{$item->id}}" >
        {{$item->kelas}}
    </option>
    @endforeach


</select>

<br>

<button type="submit">Save</button>

</form>
  
</body>
</html>