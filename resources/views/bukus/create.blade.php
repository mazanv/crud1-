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
                        <form action="{{ route('bukus.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <label for="judul">Judul</label>
                        <br><input type="text" class="form-control" name="judul"><br>
                        <label for="gambar">Gambar</label>
                        <br><input type="file" class="form-control" name="gambar"><br>
                        <label for="pengarang">Pengarang</label>
                        <br><input type="text" class="form-control" name="pengarang"><br>
                        <label for="number">Jumlah</label>
                        <br><input type="number" class="form-control" name="jumlah"><br>
                        <label for="harga">Harga</label>
                        <br><input type="number" class="form-control" name="harga"><br>
                        <label for="lokasi">Lokasi</label>
                        <br><input type="text" class="form-control" name="lokasi"><br>
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