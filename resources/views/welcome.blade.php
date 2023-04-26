@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
    <div class="logo_laravel">

    <img src="https://www.dailymobile.ir/wp-content/uploads/2016/05/Star-Music-Tag-Editor.png" alt="logo" width="200px">
            
    </div>
        <h1 class="display-5 fw-bold mb-5">
          Richiedi un preventivo!
        </h1>

        


        <form>
         {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Il tuo indirizzo email:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Chi sei:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>CEO</option>
                    <option>Freelance</option>
                    <option>Azienda</option>
                    <option>Libero professionista</option>
                    <option>PMI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Ci contatti per:</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>Siti web</option>
                    <option>SEO</option>
                    <option>SEM</option>
                    <option>Tools</option>
                    <option>Proposte commerciali</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Maggiori informazioni...</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="button" class="btn btn-info text-light pt-3 pb-3 fs-5 mt-3"> Invio!</button>


        </form>


    </div>
</div>


@endsection