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
                        <form action="{{ route('bukus.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <label for="judul">Judul</label>
                        <br><input type="text" class="form-control" name="judul" value="{{ $buku->judul }}"><br>
                        <label for="gambar">Gambar</label>
                        <br><input type="file" class="form-control" name="gambar" value="{{ $buku->gambar }}"><br>
                        <label for="pengarang">Pengarang</label>
                        <br><input type="text" class="form-control" name="pengarang" value="{{ $buku->pengarang }}"><br>
                        <label for="number">Jumlah</label>
                        <br><input type="number" class="form-control" name="jumlah" value="{{ $buku->jumlah }}"><br>
                        <label for="harga">Harga</label>
                        <br><input type="number" class="form-control" name="harga" value="{{ $buku->harga }}"><br>
                        <label for="lokasi">Lokasi</label>
                        <br><input type="text" class="form-control" name="lokasi" value="{{ $buku->lokasi }}"><br>
                        <button class="btn btn-primary">Submit</button>
                        </form>
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