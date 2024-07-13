@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Editer un Domaine d'Intervention  </h4><br><br>

            <form method="post" action="{{route('update.domaine.intervention')}}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $domaineintervention->id }}">

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-10">
                    <input name="titre" class="form-control" type="text" id="example-text-input" value="{{ $domaineintervention->titre}}">

                </div>
            </div>
            <!-- end row -->
            <input type="hidden" name="slug" value="{{ Str::slug($domaineintervention->titre) }}">




            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description </label>
                <div class="col-sm-10">
      <textarea id="elm1" name="description">
      {{ $domaineintervention->description}}

      </textarea>
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Ajouter une Image </label>
                <div class="col-sm-10">
           <input name="image_intervention" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                <img id="showImage" class="rounded avatar-lg" src="{{ !empty($domaineintervention->image_intervention) ? asset($domaineintervention->image_intervention) : asset('upload/no_image.jpg') }}" alt="Card image cap">


                </div>
            </div>
            <!-- end row -->
            <br><br>

            <h4 class="card-title">Optimisation pour le SEO</h4><br><br>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Meta-Titre</label>
                <div class="col-sm-10">
                    <input name="meta_titre" class="form-control" type="text" id="example-text-input" value="{{ $domaineintervention->meta_titre}}">

                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Meta-Description </label>
                <div class="col-sm-10">
      <textarea cols="70" rows="5" name="meta_description">
      {{$domaineintervention->meta_description}}
      </textarea>
                </div>
            </div>
            <!-- end row -->
            <br>

<input type="submit" class="btn btn-info waves-effect waves-light" value="Mettre à Jour ce domaine">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


@endsection 