@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="card">
                <div class="card-body">
                            
                    <a href="/warga/create" class="btn btn-primary">Add Warga</a>

                    <div class="table-responsive">
                        <table class="table table-hover" style="width: 100%;">
                            <thead>
                              <tr>
                                <th class="">ID</th>
                                <th class="">NAMA</th>
                                <th class="">NIK</th>
                                <th class="">NO. KK</th>
                                <th class="">JENIS KELAMIN</th>
                                <th class="">ALAMAT</th>
                                <th class="">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                
                                @foreach($warga as $w)
                                <tr>
                                    <td class="">{{  $w->id }}</td>
                                    <td class="">{{ $w->nama }}</td>
                                    <td class="">{{ $w->nik }}</td>
                                    <td class="">{{ $w->no_kk }}</td>
                                    <td class="">{{ $w->jenis_kelamin }}</td>
                                    <td class="">{{ $w->alamat }}</td>
                                    <td class="">
                                        <a href="/warga/{{ $w->id }}/edit" class="btn btn-primary">Edit</a>
                
                                        <form action="/warga/{{$w->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach
                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>

        

    </div>
    
@endsection
    