@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga Edit') }}</div>

                <div class="card-body">
                    
                    <form action="/warga/{{$warga->id}}" method="POST">
                        @method('put')
                        @csrf
                    
                        <div class="form-group my-3">
                            <input type="text" name="nama" placeholder="Nama lengkap" class="form-control" value="{{ $warga->nama }}">
                        </div>

                        <div class="form-group my-3">
                            <input type="text" name="nik" placeholder="NIK" class="form-control" value="{{ $warga->nik }}">
                        </div>

                        <div class="form-group my-3">
                            <input type="text" name="no_kk" placeholder="No KK" class="form-control" value="{{ $warga->no_kk }}">
                        </div>

                        <div class="form-group my-3">
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki - Laki</option>
                                <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
                            </select>
                        </div>
                        
                        <div class="form-group my-3">
                            <textarea name="alamat" rows="5" class="form-control" placeholder="Alamat">{{ $warga->alamat }}</textarea>
                        </div>

                        <div class="form-group my-3">
                            <input type="submit" name="submit" value="Save"  class="btn btn-primary">
                        </div>
                                            
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection