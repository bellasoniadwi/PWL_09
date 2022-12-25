@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2 align="center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{-- Menampilkan Search Box Pada Halaman Utama --}}
    <form method="get" action="{{ url('cari') }}">
        <div class="form-group w-100 mb-3">
            <input type="search" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari Nama Mahasiswa">
            <span class = "form-group-btn">
                <button type="submit" class="btn btn-dark">Cari Disini</button>
            </span>
        </div>
    </form>

    <table class="table table-bordered text-center">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($paginate as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->tanggal_lahir }}</td>
            <td>{{ $mhs->kelas->nama_kelas }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->no_handphone }}</td>
            <td>{{ $mhs->email }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$mhs->nim) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-warning" href="{{ route('mahasiswa.nilai',$mhs->nim) }}">Nilai</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <p>Showing
        {{$paginate->firstItem()}}
        to
        {{$paginate->lastItem()}}
        of
        {{$paginate->total()}}
        entries</p>
     </div>
    <div class="float-right my-2">
        {{$paginate->links()}}
    </div>
@endsection
