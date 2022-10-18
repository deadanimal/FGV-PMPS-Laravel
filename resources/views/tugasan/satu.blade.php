@extends('layouts.app')

@section('title', 'Tandan')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Tugasan
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}

            </div>

            <div class="row">


                <div class="col-6">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}



                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Tugasan Tandan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">


                            <form>

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>Jenis Kerja</label>
                                        <input type="text" class="form-control" value="{{ $tugasan->jenis }}" readonly>
                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <label>Tarikh Mula Kerja</label>
                                        <input type="date" class="form-control" value="{{ $tugasan->tarikh_kerja_mula }}"
                                            readonly>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>No Tugasan</label>
                                        <input type="text" class="form-control" value="{{ $tugasan->no_tugasan }}"
                                            readonly>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Nama Tugasan</label>
                                        <input type="text" class="form-control" value="{{ $tugasan->nama_tugasan }}"
                                            readonly>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Pekerja</label>
                                        <input type="text" class="form-control" value="{{ $tugasan->assignee->name }}"
                                            readonly>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Supervisor</label>
                                        <input type="text" class="form-control" value="{{ $tugasan->pengesah->name }}"
                                            readonly>
                                    </div>



                                </div>
                            </form>



                        </div>
                    </div>

                </div>


            </div>

            @if ($tugasan->jenis == 'bagging')
                <div class="row">

                    <div class="col-6">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Tugasan Bagging</h5>
                                {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                            </div>
                            <div class="card-body">

                                <form action="/tugasan/{{ $tugasan->id }}/kerja" enctype="multipart/form-data"
                                    method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="file" name="upload" id="upload">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">No Bagging</label>
                                        <input type="text" class="form-control" id="no_bagging" name="no_bagging"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Catatan</label>
                                        <input type="text" class="form-control" id="catatan_bagging" name="catatan_bagging" required>
                                    </div>
                                    <button class="btn btn-primary">Siap Kerja</button>
                                </form>

                            </div>

                        </div>

                    </div>


                    <div class="col-6">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Siap Kerja</h5>
                                {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                            </div>
                            <div class="card-body">

                                <form action="/tugasan/{{ $tugasan->id }}/sah" enctype="multipart/form-data"
                                    method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="title">Catatan</label>
                                        <input type="text" class="form-control" id="catatan" name="catatan" required>
                                    </div>
                                    <button class="btn btn-primary">Sah</button>
                                </form>

                            </div>

                        </div>

                    </div>                    
                </div>
            @endif

        </div>





        </div>



    </main>

@endsection

@section('script')

@endsection
