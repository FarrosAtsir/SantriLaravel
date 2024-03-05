<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="navbar bg-neutral text-neutral-content">
        <button class="btn btn-ghost text-xl">Tambahkan Data Santri</button>
      </div>
    <form action="/update/{{ $student->id }}" method="POST" class="p-16">
        @csrf
        @method('put')
        <label class="input input-bordered flex items-center gap-2 mb-4">
            Nama
            <input type="text" class="grow" name="nama" value="{{ $student->nama }}"/>
        </label>
        <label class="input input-bordered flex items-center gap-2 mb-4">
            Kesalahan
            <input type="text" class="grow" name="kesalahan" value="{{ $student->kesalahan }}"/>
        </label>
        <label class="input input-bordered flex items-center gap-2 mb-8">
            Sanksi
            <input type="text" class="grow" name="sanksi" value="{{ $student->sanksi }}"/>
        </label>
        <button class="btn btn-primary">Save</button>
    </form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>