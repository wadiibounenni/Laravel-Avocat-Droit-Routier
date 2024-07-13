@extends ('admin.admin_master')
@section ('admin')

<div class="page-content">
<div class="container-fluid">


<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-9">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Changer mon Mot de Passe </h4><br>

            @if(count($errors))
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                @endforeach

            @endif

            <form method="post" action="{{ route('update.password') }}">
                @csrf

            <div class="row mb-3">
            <label for="example-text-input" class="col-sm-4 col-form-label" style="color: blue">Ancien Mot de Passe:</label>
                <div class="col-sm-8">
                    <input name="ancien_mot_de_passe" class="form-control" type="text" id="example-text-input">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
            <label for="example-text-input" class="col-sm-4 col-form-label" style="color: blue">Nouveau Mot de Passe:</label>
                <div class="col-sm-8">
                    <input name="nouveau_mot_de_passe" class="form-control" type="password" id="example-text-input">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
            <label for="example-text-input" class="col-sm-4 col-form-label" style="color: blue">Confirmer Mot de Passe:</label>
                <div class="col-sm-8">
                    <input name="confirmer_mot_de_passe" class="form-control" type="password" id="example-text-input">
                </div>
            </div>
            <!-- end row -->

             
        <input type="submit" class="btn btn-info waves-effect waves-light" value="Mettre à Jour mon Profil">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>



@endsection