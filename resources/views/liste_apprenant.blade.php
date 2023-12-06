@extends('navbar')
@section('content')

<div class="container mt-5 col-md-8">

    <div class="card">
        <div class="card-header bg-success text-white">
            Liste des Apprenants
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($liste as $l)
                        <tr>
                            <th scope="row">{{$l->id}}</th>
                            <td>{{$l->nom}}</td>
                            <td>{{$l->prenom}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection

