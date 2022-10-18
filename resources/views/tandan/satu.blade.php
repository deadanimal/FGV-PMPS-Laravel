@extends('layouts.app')

@section('title', 'Tandan')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Tandan
                </h1>
                {{-- <p class="header-subtitle">---</p> --}}

                <div class="mb-3 col-md-6">
                    {!! QrCode::generate(Request::url('https://fgv-pmps.prototype.com.my/pokok/{{ $tandan->pokok->id }}/tandan/{{ $tandan->id }}')); !!}
                </div>                  
            </div>

            <div class="row">


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kemaskini Tandan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

			
                            <form action="/pokok/{{$tandan->pokok->id}}/tandan/{{$tandan->id}}" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="pokok_id" value="{{ $tandan->pokok->id }}">
                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>No Daftar</label>
                                        <input type="text" class="form-control" id="noDaftar" name="noDaftar" value="{{$tandan->no_daftar}}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Kitaran</label>
                                        <input type="text" class="form-control" id="kitaran" name="kitaran" value="{{$tandan->kitaran}}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Deskripsi Kitaran</label>
                                        <input type="text" class="form-control" id="deskripsiKitaran" name="deskripsiKitaran" value="{{$tandan->deskripsi_kitaran}}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Status Tandan</label>
                                        <input type="text" class="form-control" id="statusTandan" name="statusTandan" value="{{$tandan->status_tandan}}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Catatan</label>
                                        <input type="text" class="form-control" id="catatan" name="catatan" value="{{$tandan->catatan}}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>umur</label>
                                        <input type="number" class="form-control" id="umur" name="umur" value="{{$tandan->umur}}">
                                    </div>


                                </div>

								<button type="submit" class="btn btn-primary">Kemaskini Tandan</button>
                                <a href="/pokok/{{$tandan->pokok->id}}/tandan/{{$tandan->id}}/buang-qr"><button type="button" class="btn btn-danger">Buang Tandan</button></a>
                            </form>



                        </div>
                    </div>              
                    
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Tugasan Tandan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

			
                            <form action="/tugasan" method="POST">
                                @csrf

                                <input type="hidden" value="{{ $tandan->id }}" name="tandan_id">

                                <div class="row">

                                    <div class="mb-3 col-md-3">
                                        <label>Jenis Kerja</label>
                                        <select class="form-control" id="jenis" name="jenis">
                                            <option value="bagging">Bagging</option>
                                            <option value="control">Control Pollination</option>
                                            <option value="quality">Quality Control</option>
                                            <option value="harvest">Harvest</option>
                                            <option value="pollen">Pollen Preparation</option>
                                            <option value="pollen-usage">Pollen Usage</option>
                                        </select>                                        
                                    </div>


                                    <div class="mb-3 col-md-3">
                                        <label>Tarikh Mula Kerja</label>
                                        <input type="date" class="form-control" id="tarikh_kerja_mula" name="tarikh_kerja_mula">
                                    </div>                                         

                                    <div class="mb-3 col-md-6">
                                        <label>No Tugasan</label>
                                        <input type="text" class="form-control" id="no_tugasan" name="no_tugasan">
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label>Nama Tugasan</label>
                                        <input type="text" class="form-control" id="nama_tugasan" name="nama_tugasan">
                                    </div>                                    

                                    <div class="mb-3 col-md-6">
                                        <label>Pekerja ID</label>
                                        <input type="text" class="form-control" id="assignee_id" name="assignee_id">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Supervisor ID</label>
                                        <input type="text" class="form-control" id="pengesah_id" name="pengesah_id">
                                    </div>



                                </div>

								<button type="submit" class="btn btn-primary">Cipta Tugasan</button>
                            </form>



                        </div>
                    </div>                       

                </div>



            </div>

 



        </div>



    </main>

@endsection

@section('script')

@endsection
