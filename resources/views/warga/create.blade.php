@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h1 class="">Warga <span class="text-primary fw-bolder">Create</span></h1>
                </div>
                <div class="card-body py-3">
                            
                    
                    <form action="/warga/store" method="POST">
                        @csrf
                    
                        <div class="form-group my-3">
                            <input type="text" name="nama" placeholder="Nama lengkap" class="form-control">
                        </div>

                        <div class="form-group my-3">
                            <input type="text" name="nik" placeholder="NIK" class="form-control">
                        </div>

                        <div class="form-group my-3">
                            <input type="text" name="no_kk" placeholder="No KK" class="form-control">
                        </div>

                        <div class="form-group my-3">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        
                        <div class="form-group my-3">
                            <textarea name="alamat" rows="5" class="form-control" placeholder="Alamat"></textarea>
                        </div>

                        <div class="form-group my-3">
                            <input type="submit" name="submit" value="Save"  class="btn btn-primary">
                        </div>
                                            
                    </form>
                    
                </div>
            </div>
        </div>

        

    </div>
    
@endsection
    
