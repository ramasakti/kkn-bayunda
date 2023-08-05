@extends('layouts.template')

@section('content')
<body>
<div class="pagetitle">
  <h1>Dataset</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active">Data Ranting</li>
    </ol>
  </nav>
</div>
<!-- End Page Title -->
    
        <div class="col-xl-12">

          <div class="card">
          <div class="card-body">
              
          @include('dataset.create')
            
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">NBM</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                
                  @foreach($dataset as $data)
                  <tr>
                    <th scope="col">{{$no++}}</th>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->tempat_lahir}}</td>
                    <td>{{$data->tanggal_lahir}}</td>
                    <td>{{$data->jabatan}}</td>
                    <td>{{$data->NBM}}</td>
                    <td>{{$data->pekerjaan}}</td>
                    <td>
                      <div class="row align-items-center">
                        <div class="col">
                          <a class="nav-link collapsed" href="{{url('dataset/'.$data->id.'/edit')}}">
                            <button type="button" class="btn btn-warning">
                              Edit
                            </button>
                            </a>
                        </div>
                        <div class="col">
                        <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('delete/'.$data->id) }}" method="get">
                        @csrf 
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
                
              </table>
              <!-- First Table -->

            </div>
          </div>
  </body>
@endsection