<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/getPresensi">
    <select name="jadwal_id" class="form-control form-control-user" placeholder="Kelas">
        @foreach($jadwal as $item) 
        <option value="{{ $item->id }}">{{ $item->mapel->mapel }} - {{ $item->kelas->nama }} - {{$item->Hari}} </option>
        @endforeach
    </select>
    <select name="minggu_ke">
        @for($i = 1; $i <=14; $i++)
            <option value="{{$i}}"> minggu ke {{$i}} </option>
        @endfor
    </select>

    <button type="submit"> cek </button>
    </form>
</body>
</html>