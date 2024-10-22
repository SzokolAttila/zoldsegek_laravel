@extends("layouts.main")

@section("title", $title)

@section("content")

<main class="container">
    <h1 class="text-center my-4 text-uppercase">
        {{ $title }}
    </h1>
    <div class="row">
        <div class="col-12 col-md-6 mb-2">
            <img class="img-fluid img-thumbnail" src="{{asset("img/". $vegetable["image"])}}" alt="">
        </div>
        <div class="col-12 col-md-6">
            <p>
                {{$vegetable["description"]}}
            </p>
        </div>
    </div>
</main>
@endsection