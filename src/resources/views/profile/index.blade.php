@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil Panel') }}</div>

                <div class="card-body">
                   
                  
                      


                    <section style="background-color: #eee;">
                        <div class="container py-5">
                          
                      
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="card mb-4">
                                <div class="card-body text-center">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 150px;">
                                  <h5 class="my-3">{{ Auth::user()->name }}</h5>
                                
                                </div>
                              </div>
                              
                            </div>
                            
                            <div class="col-lg-8">
                              <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Név</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9 text-right">
                                      <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Telefonszám</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">
                                        @if (Auth::user()->telefon == '0')
                                        Ismeretlen
                                        @else
                                        {{ Auth::user()->telefon }}
                                        @endif    
                                    </p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Irányítószám</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">
                                        @if (Auth::user()->postal == '0')
                                        Ismeretlen
                                        @else
                                        {{ Auth::user()->postal }}
                                        @endif       
                                    </p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Város</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">
                                        @if (Auth::user()->varos == '0')
                                        Ismeretlen
                                        @else
                                        {{ Auth::user()->varos }}
                                        @endif       
                                    </p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Utca</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">
                                        @if (Auth::user()->utca == '0')
                                        Ismeretlen
                                        @else
                                        {{ Auth::user()->utca }}
                                        @endif   
                                      </p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Házszám</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">
                                        @if (Auth::user()->hazszam == '0')
                                        Ismeretlen
                                        @else
                                        {{ Auth::user()->hazszam }}
                                        @endif   
                                    </p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Profil létrehozása</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{ Auth::user()->created_at }}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Profil módosítása</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">{{ Auth::user()->updated_at }}</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Jogosultság</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">
                                        @if (Auth::user() && Auth::user()->is_admin == '1')
                                        Admin
                                        @else
                                        Vásárló
                                        @endif
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </section>





                </div>
            </div>
        </div>
    </div>
</div>


@endsection
