@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/templates/css/index.css') }}">
@endpush

@section('header')
    @include('templates.esportes.secoes.navbar')
@endsection

@section('content')
    @include('templates.esportes.secoes.banner')
    @include('templates.esportes.secoes.sobre')
    @include('templates.esportes.secoes.servicos')
    @include('templates.esportes.secoes.contato')
    @include('templates.esportes.secoes.produtoseprojetos')
    @include('templates.esportes.secoes.colaboradores')
    @include('templates.esportes.secoes.depoimentos')
@endsection

@section('footer')
    @include('templates.esportes.secoes.rodape')
@endsection

@push('scripts')
    <script src="{{ asset('assets/templates/js/index.js') }}"></script>
@endpush