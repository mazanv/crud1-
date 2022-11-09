<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('bukus.create') }}" class="btn btn-md btn-success mb-3">Add Books</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($bukus as $buku)
                            <tr>
                                <td>{{ $buku->judul }}</td>
                                <td class="text-center">
                                    <img src="{{ Storage::url('/public/buku/'). $buku->gambar }}" class="rounded" style="width: 150px">
                                </td>
                                {{-- <td>{!! $siswa->content !!}</td> --}}
                                <td>{{ $buku->pengarang }}</td>
                                <td>{{  $buku->jumlah }}</td>
                                <td>{{ $buku->harga }}</td>
                                <td>{{ $buku->lokasi }}</td>
                                <td class="text-center">
                                    <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST">
                                        <a href="{{ route('bukus.show', $buku->id) }}"><button class="primary">Show</button></a>
                                        <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          {{-- @empty --}}
                              {{-- <div class="alert alert-danger">
                                  Data Post belum Tersedia.
                              </div> --}}
                            @endforeach
                            </tbody>
                          </table>  
                          {{-- {{ $siswas->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

    {{-- <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script> --}}

</body>
</html>