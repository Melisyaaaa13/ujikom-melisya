@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('motor.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">motor kode</label>
              <input type="text" name="motor_kode" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">motor merk</label>
              <input type="text" name="motor_merk" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">motor type</label>
              <input type="text" name="motor_type" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">motor warna</label>
              <input type="text" name="motor_warna" id="" class="form-control" aria-describedby="helpId" required>
            </div>
            <div class="form-group">
              <label for="">motor harga</label>
              <input type="text" name="motor_harga" id="" class="form-control" aria-describedby="helpId" required>
            </div>
                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="motor_gambar" id="motor_gambar" class="form-control" required>
                  </div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('motor.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
  	
</body>
</html>
©
@endsection