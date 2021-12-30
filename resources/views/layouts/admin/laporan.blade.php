@extends('admin.master')

@section('titleAdmin')
ADMIN | UINSGD
@endsection

@section('judulAdmin')
<h2 align="center">Menampilkan Semua Akun</h2>
@endsection

@section('contentAdmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr align="center">
                                <th scope="col">No</th>
                                <th scope="col">NIP / NIK</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Golongan</th>
                                <th scope="col">Jam Lembur</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Uraian Hasil</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach($pengguna as $data)
                        <tr scope="row">
                            <td>
                                {{$no++}}
                            </td>
                            <td>
                                {{$data->user->nip}}
                            </td>
                            <td>
                                {{$data->user->name}}
                            </td>
                            <td>
                                <center>
                                    {{$data->user->golongan}}
                                </center>
                            </td>
                            <td>
                                {{$data->jamLembur}}
                            </td>
                            <td>
                                {{$data->kegiatan->namakegiatan}}
                            </td>
                            <td>
                                {{$data->date}}
                            </td>
                            <td>
                                {{$data->uraian}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
