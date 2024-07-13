@extends ('admin.admin_master')
@section ('admin')
@php
    $controller = app()->make('App\Http\Controllers\AdminController');
    $adminData = $controller->profil()->getData()['adminData'];
    @endphp

<!-- Page content with fade-in effect -->
<style>
  /* Style for the page content */
  .page-content {
    opacity: 0; /* Initially hidden */
    transition: opacity 3.5s ease-in-out; /* Smooth fade-in transition */
  }

  /* Animation to fade in the page content */
  .page-content.fade-in {
    opacity: 1;
  }
</style>

<div class="page-content">
  <div class="container-fluid">
    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Dashboard</h4>
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Avocat Droit Routier</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end page title -->

    <!-- Welcome message -->
<div style="background-color: #f8f9fa; border-radius: 10px; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; color: #333333; font-size: 18px; line-height: 1.5;">
  <p style="font-size: 24px; margin-bottom: 10px;">Bonjour {{ $adminData->name }},</p>
  <p style="font-size: 20px; margin-bottom: 10px;">Bienvenue sur votre tableau de bord administratif. Nous sommes ravis de vous accueillir !</p>
  <p style="font-size: 20px; margin-bottom: 10px;">Votre espace personnalisé vous permettra de gérer efficacement votre Site Web.</p>
  <p style="font-size: 20px; margin-bottom: 10px;">N'hésitez pas à explorer les fonctionnalités et à nous contacter si vous avez besoin d'aide ou d'assistance.</p>
  <p style="font-size: 24px;">Bonne journée !</p>
</div>
  </div>
</div>

<script>
  // Function to add fade-in effect to page content
  window.addEventListener('load', function() {
    const pageContent = document.querySelector('.page-content');
    pageContent.classList.add('fade-in');
  });
</script>


@endsection