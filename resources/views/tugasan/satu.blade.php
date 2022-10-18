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


                <div class="col">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}

             
                    
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Tugasan Tandan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">

			
                            <form action="/tugasan/{{$tugasan->id}}" method="POST">
                                @csrf

                                <div class="row">

                                    <div class="mb-3 col-md-3">
                                        <label>Jenis Kerja</label>
                                        <select class="form-control" id="jenisKerja" name="jenisKerja">
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
                                        <input type="text" class="form-control" id="kitaran" name="kitaran">
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label>Nama Tugasan</label>
                                        <input type="text" class="form-control" id="kitaran" name="kitaran">
                                    </div>                                    

                                    <div class="mb-3 col-md-6">
                                        <label>Pekerja ID</label>
                                        <input type="text" class="form-control" id="pekerjaId" name="pekerjaId">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Supervisor ID</label>
                                        <input type="text" class="form-control" id="s" name="s">
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
