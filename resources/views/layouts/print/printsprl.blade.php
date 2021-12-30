@extends('user.master')

@section('titleUser')
    PTIPD | UINSGD
@endsection

@section('contentUser')

    <div class="table-responsive">
        <table align="center">
            <tr>
                <td>
                    <img src="{{ asset('Stylesnya/dist/img/uiin.png') }}" width="160" height="220">
                </td>
                <td>
                    <center>
                        <b>
                            <font size="5">KEMENTRIAN AGAMA</font><br>
                            <font size="5">UNIVERSITAS ISLAM NEGRI</font><br>
                            <font size="5">SUNAN GUNUNG DJATI BANDUNG</font><br>
                            <font size="5">PUSAT TEKNOLOGI INFORMASI DAN</font><br>
                            <font size="5">PANGKALAN DATA</font><br>
                        </b>
                        <i>
                            <font size="3">Jl. A.H. Nasution No. 105 Cibiru Bandung 40614 <i class='fas fa-tty'></i> (022)
                                7800525 Fax. </font><br>
                            <font size="3">(022)7803936 Website: <a
                                    href="http://ptipd.uinsgd.ac.id">http://ptipd.uinsgd.ac.id</a> E-mail:
                                ptipd@uinsgd.ac.id</font><br>
                        </i>
                    </center>
            </tr>
            <tr>
                <td colspan="4">
                    <hr color="black">
                </td>
            </tr>
        </table>
        <center><b><u>
                    <font size="5">SURAT PERINTAH KERJA LEMBUR</font><br>
                </u></b>
            Nomor : B- /Un. 05/PTIPD/PP.00.9/06/2021
        </center>
        <br>

        <table align="center">
            <tr align="">
                <td>
                    <font size="3">Yang bertanda tangan dibawah ini Kuasa Pengguna Anggaran UIN Sunan Gunung Djati Bandung
                        memerintahkan <br>
                        <b>Kerja Lembur</b>
                        kepada pegawai tersebut dibawah ini untuk tanggal 08 November 2021, dengan perincian <br> pekerjaan
                        sebagai berikut:
                    </font>
            </tr>
            </td>
        </table>

        <table border="1">
            <tr align="center">
                <th>No.</th>
                <th>NAMA</th>
                <th>GOL</th>
                <th>JABATAN</th>
                <th>JENIS PEKERJAAN YANG DILEMBURKAN</th>
            </tr>
            @php $no = 1; @endphp
            <tr align="center">
                <td> {{ $no++ }} </td>
                <td width="300"> {{ Auth::user()->name }}</td>
                <td width="300">{{ $pengguna->jamDatang }} - {{ $pengguna->jamPulang }}</td>
                <td width="300">{{ $pengguna->kegiatan->namakegiatan }}</td>
                <td width="300">{{ $pengguna->uraian }}</td>
            </tr>
        </table>
        Demikian agar dilaksanakan dengan penuh rasa tanggung jawab.
        <br><br><br><br><br><br><br>
        <table align="right">
            <tr>
                <td width="260">Bandung, .....................</td>
            </tr>
            <tr>
                <td>An. Kuasa Pengguna Anggaran<br>
                    Pejabat Pembuat Komitmen,</td>
            </tr>
            <tr>
                <td height="80"></td>
            </tr>
            <tr>
                <td>.........................................</td>
            </tr>
            <tr>
                <td>NIP/NIK</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('pengguna.index') }}" class="btn btn-sm  btn-success float-right"> <i
                            class="fa fa-undo" aria-hidden="true"> Kembali</i></a>
                </td>
                <td>
                    <a href="{{ route('pengguna.index') }}" class="btn btn-sm  btn-primary float-right"> <i
                            class="fa fa-print" aria-hidden="true"> Print</i></a>
                </td>
            </tr>
        </table>
    @endsection
