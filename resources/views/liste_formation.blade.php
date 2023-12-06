@extends('navbar')
@section('content')

<div class="container mt-5 col-md-8">

    <div class="card">
        <div class="card-header bg-success text-white">
            Liste des Formation
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($form as $f)
                        <tr>
                            <th scope="row">{{$f->id}}</th>
                            <td>{{$f->nom}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection

