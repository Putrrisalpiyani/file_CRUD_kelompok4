<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RAMA LAUNDRY</title>
  </head>
  <body>
    <h2 class="text-center mb-">Edit Data pelanggan Laundry</h2>

        <div class="container">
           
          <div class="row justify-content-center">
            <div class="col-8">
           <div class="card">
            <div class="card-body">
              <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" value="{{ $data->nama}}" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" value="{{ $data->alamat}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No.Telp</label>
                  <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" value="{{ $data->no_telp}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Servis</label>
                  <select name="servis" class="form-select" aria-label="Default select example">
                    <option selected>{{ $data->servis}}</option>
                    <option value="1">cuci</option>
                    <option value="2">setrika</option>
                    <option value="3">laundry</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" value="{{ $data->keterangan}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Berat</label>
                  <input type="text" name="kg" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" value="{{ $data->kg}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Biaya</label>
                  <input type="text" name="biaya" class="form-control" id="exampleInputEmail1" 
                    aria-describedby="emailHelp" value="{{ $data->biaya}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Status</label>
                  <select name="status" class="form-select" aria-label="Default select example">
                    <option selected>{{ $data->status}}</option>
                    <option value="1">proses</option>
                    <option value="2">selesai</option>
                    <option value="3">diambil</option>
                    <option value="3">antar</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
           </div>
          </div>
          </div>  
        </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>