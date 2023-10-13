<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>

<body>
    @foreach($mahasiswa as $mhs)
    <form action="/home/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ide" value="{{ $mhs->id }}"> <br />
        nama <input type="text" required="required" name="nama" value="{{ $mhs->nama }}"> <br />
        umur <input type="number" required="required" name="umur" value="{{ $mhs->umur }}"> <br />
        kota <input type="text" required="required" name="kotar" value="{{ $mhs->kota }}"> <br />
        <input type="submit" value="simpan data">
    </form>
    @endforeach
    </body>

</html>