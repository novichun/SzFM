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
                          
                            <form action="{{route('profile-update')}}" method="POST">
                              @csrf
                            <div class="col-lg-12">
                              <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Név</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->name}}">
                                   
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
                                        <input type="text" class="form-control" id ="telefon" name="telefon" value="Ismeretlen">
                                        @else
                                        <input type="text" class="form-control" id ="telefon" name="telefon" value=" {{ Auth::user()->telefon }}">
                                        @endif    
                                        @error('telefon') <span class="error">{{ $message }}</span> @enderror
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
                                        <input type="text" class="form-control" id ="postal" name="postal" value="Ismeretlen">
                                        @else
                                        <input type="text" class="form-control" id ="postal" name="postal" value="{{ Auth::user()->postal }}">
                                        
                                        @endif       
                                        @error('postal') <span class="error">{{ $message }}</span> @enderror
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
                                        <input type="text" class="form-control" id ="varos" name="varos" value="Ismeretlen">
                                        @else
                                        <input type="text" class="form-control" id ="varos" name="varos" value="{{ Auth::user()->varos }}">
                                        
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
                                        <input type="text" class="form-control" id ="utca" name="utca" value="Ismeretlen">
                                        @else
                                        <input type="text" class="form-control" id ="utca" name="utca" value="{{ Auth::user()->utca }}">
                                        
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
                                        <input type="text" class="form-control" id ="hazszam" name="hazszam" value="Ismeretlen">
                                        @else
                                        <input type="text" class="form-control" id ="hazszam" name="hazszam" value="{{ Auth::user()->hazszam }}">
                                
                                        @endif   
                                        @error('hazszam') <span class="error">{{ $message }}</span> @enderror
                                    </p>
                                    </div>
                                  </div>
                                  
                                  
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Profil szerkesztése</button>
                            </div>
                            </form>
                          </div>

                        </div>
                      </section>





                </div>
            </div>
        </div>
    </div>
</div>


@endsection
