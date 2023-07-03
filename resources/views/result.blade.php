@extends('layouts.app')
@section('page')
<div class="box">
    <div class="container">
        <div class="top">
            <header>{{ $lulus ? $lulus : $tidakLulus }}</header>
        </div>
@endSection