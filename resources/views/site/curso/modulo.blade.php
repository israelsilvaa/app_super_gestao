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
                  <li><a class="dropdown-item" href="{{Route('curso.aula46')}}">aula 46-if/else</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula47')}}">aula 47-Isset()</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula48')}}">aula 48-Empty()</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula49')}}">aula 49/50-Opera. Ternário</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula51')}}">aula 51-@@switch/case</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula52')}}">aula 52-@@for</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula53')}}">aula 53-@@while</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula54')}}">aula 54-@@foreach</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula55')}}">aula 55-56-@@forelse/escapando chaves</a></li>
                  <li><a class="dropdown-item" href="{{Route('curso.aula57')}}">aula 57-@@variavel lopp</a></li>
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
