@php
/**
* @var Illuminate\Support\Collection $vegetables
*/
@endphp
@extends("layouts.main")

@section("title", $title)

@section("content")

    <h1 class="text-center my-2">
        {{$title}}
    </h1>
    <form class="w-50 mx-auto" action="">
        <div class="form-group">
            <label for="name" class="form-label">Mit keresel?</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button class="btn btn-success my-2 w-75 mx-auto d-block">
            Kereses
        </button>
    </form>
    <main class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">Zoldseg</th>
                    <th class="text-center">Nev</th>
                    <th class="text-center">Leiras</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vegetables as $vegetable)
                    <tr>
                        <td><img src="{{asset("img/" . $vegetable["image"])}}" class="img-fluid img-thumbnail" alt=""></td>
                        <td class="text-uppercase text-center">{{$vegetable["name"]}}</td>
                        <td>{{$vegetable["description"]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection