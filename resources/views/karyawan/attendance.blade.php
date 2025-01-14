@extends('layouts.main')
@section('content')
<div class=" min-h-screen bg-blueGray font-satoshi">
    <h1 class="text-5xl font-black py-8 text-center uppercase ">Absensi Hari ini</h1>
    @include('livewire.absensi')
</div>
@endsection