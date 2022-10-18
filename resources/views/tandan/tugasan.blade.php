@extends('layouts.app')

@section('title', 'Tandan')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Senarai Tugasan
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}

            </div>

            <div class="row">


                <div class="col-3">
                    
                </div>

                <div class="col-9">


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Senarai Tugasan</h5>
                            <h6 class="card-subtitle text-muted">- - -</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-sm tugasan-datatable mb-5">
                                <thead>
                                    <tr>
                                        <th>Tarikh Kerja</th>
                                        <th>Jenis</th>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pekerja</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tugasans as $tugasan)
                                    <tr>
                                        <td>{{$tugasan->tarikh_kerja_mula}}</td>
                                        <td>{{$tugasan->jenis}}</td>
                                        <td>{{$tugasan->no_tugasan}}</td>
                                        <td>{{$tugasan->nama_tugasan}}</td>
                                        <td>{{$tugasan->assignee->name}}</td>
                                        <td><a href="/tugasan/{{$tugasan->id}}">Link</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>



            </div>





        </div>



    </main>

@endsection

@section('script')

@endsection
