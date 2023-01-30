@extends('layouts.main')

@section('title', 'Modulos')

@section('content')


    <div class="content">
        <div class="g-col-6 g-col-md-4">
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    modulo 1
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula 46</a></li>
                    <li><a class="dropdown-item" href="#">aula 47</a></li>
                    <li><a class="dropdown-item" href="#">aula 48</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 2
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula </a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 3
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula </a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 4
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula </a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 5
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula </a></li>
                </ul>
            </div>
        </div>
        <div class="g-col-6 g-col-md-4">
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 6
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula 46</a></li>
                    <li><a class="dropdown-item" href="#">aula 47</a></li>
                    <li><a class="dropdown-item" href="#">aula 48</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 7
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{Route('curso.aula46')}}">aula 46</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula47')}}">aula 47</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula48')}}">aula 48</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 8
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula </a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 9
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula </a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    modulo 10
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">aula </a></li>
                </ul>
            </div>
        </div>
    </div>


@endsection
