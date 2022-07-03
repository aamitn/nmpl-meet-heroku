@extends('layouts.app')

@section('title', getSetting('APPLICATION_NAME') )

@section('content')
    <section class="auth-section">
        <div class="container auth-container">
            <div class="row align-items-center h-100">
                <div style="background-image: url(30.svg);background-position: left 90px;background-repeat: no-repeat;" class="col-12 col-md-10 main-authsection h-100 ">
                    <div class="row h-100">
                        <div class="col-12 col-md-6 auth-enterdata h-100">
                            <div class="card auth-info mb-0">
	<center>
	     <h1>{{ __('Oops!') }}</h>
             <h3>{{ __('404 - Page not found') }}</h3>
                                {{ __('The page you are looking for might have been removed had its name changed or is temporarily unavailable.') }}<br /><a href="{{ route('register') }}"
                                    class="white-text"><u>{{ __('Home') }}</u></a> </center>

	
                                <div class="card-header text-center">Click below to go back to home
                                                                 <div class="card-body">

                                        <div class="form-group row mb-0">
                                            <div class="col-12 text-center">
                                         <button onclick="window.location.href='/'" class="btn btn-primary mb-2">
                                                 Home
                                                </button>

                                            </div>
                                        </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
