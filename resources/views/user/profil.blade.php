@extends('layouts.app')

@section('title', 'Profil')

@section('content')

    <main class="content">

        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Profil
                </h1>
                <p class="header-subtitle">---</p>
            </div>

            <div class="row">


                <div class="col-xl-6">
                    {{-- <img src="{!!$message->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}


                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Kemaskini Kata Laluan</h5>
                            {{-- <h6 class="card-subtitle text-muted">- - - </h6> --}}
                        </div>
                        <div class="card-body">


                            <form action="/profil/katalaluan" method="POST">
                                @csrf
                                @method('PUT')

								<input type="hidden" name="user_id" value="{{$user->id}}">
                                

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name}}" readonly>
                                    </div>

									<div class="mb-3 col-md-6">
                                        <label>Kata Laluan</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>									

                                    {{-- <div class="mb-3 col-md-6">
                                        <label>Kitaran</label>
                                        <input type="text" class="form-control" id="kitaran" name="kitaran">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Deskripsi Kitaran</label>
                                        <input type="text" class="form-control" id="deskripsiKitaran">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Status Tandan</label>
                                        <input type="text" class="form-control" id="statusTandan" name="statusTandan">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Catatan</label>
                                        <input type="text" class="form-control" id="catatan" name="catatan">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>umur</label>
                                        <input type="number" class="form-control" id="umur" name="umur">
                                    </div> --}}


                                </div>

                                <button type="submit" class="btn btn-primary">Tukar Kata Laluan</button>
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
