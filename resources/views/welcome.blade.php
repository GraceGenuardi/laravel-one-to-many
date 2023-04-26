@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
    <div class="logo_laravel">

    <img src="https://www.dailymobile.ir/wp-content/uploads/2016/05/Star-Music-Tag-Editor.png" alt="logo" width="200px">
            
    </div>
        <h1 class="display-5 fw-bold mb-5">
          Crea il tuo progetto!
        </h1>

        <form method="POST" action="/projects">

                {{ csrf_field() }}
                <div class="m-3">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="name" required>
                </div>

                <div class="m-3">
                    <label for="client">Client:</label>
                    <input type="text" id="client" name="client" required>
                </div>

                <div class="m-3">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary m-4">Create Project</button>
        </form>


    </div>
</div>


@endsection