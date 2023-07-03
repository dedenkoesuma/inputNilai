@extends('layouts.app')
@section('page')
<form method="POST" action="{{ URL::to('/input/result') }}" >
    @csrf

   <div class="box">
    <div class="container">
        <div class="top">
            <header>Masukan Nilai</header>
        </div>

        <div class="input-field">
            <input type="number" class="input" name="nilaiA" placeholder="Nilai A" id="nilaiA">
        </div>

        <div class="input-field">
            <input type="number" class="input" name="nilaiB"placeholder="Nilai B" id="nilaiB">
        </div>

        <div class="input-field">
            <input type="submit" class="btn btn-primary" value="Login" >
        </div>
    </div>
</div>  
@endSection