@php
    $no = 1;
@endphp

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
    <button class="btn btn-ghost text-xl">Data Pelanggaran Santri</button>
  </div>
    <div class="overflow-x-auto pt-16">
      <a href="/about" class="btn btn-outline mb-4 ml-4">Add Data</a>
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Job</th>
              <th>Favorite Color</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($student as $s)
                
            <tr class="hover">
              <th>{{ $no }}</th>
              <td>{{ $s->nama }}</td>
              <td>{{ $s->kesalahan }}</td>
              <td>{{ $s->sanksi }}</td>
              <td class="flex">
                <a href="/{{ $s['id'] }}/edit" class="btn btn-outline btn-accent">Edit</a>
                <form action="/update/{{ $s->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-outline btn-error ml-4 text-error">Delete</button>
                </form>
              </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
          </tbody>
        </table>
      </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>