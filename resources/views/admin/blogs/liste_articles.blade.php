@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Tous les Articles du blog</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Articles du Blog</h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php($i = 1)
        @foreach($articles as $item)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->titre }}</td>
            <td>
                <a href="{{ route('editer.article', $item->id) }}" class="btn btn-info sm" title="Editer article">
                    <i class="fas fa-edit"></i>
                </a>

                <a href="{{ route('supprimer.article', $item->id) }}" class="btn btn-danger sm delete-item" title="Supprimer article" data-item-id="{{ $item->id }}">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete-item').forEach(function(deleteButton) {
        deleteButton.addEventListener('click', function(event) {
            event.preventDefault();
            var itemId = event.currentTarget.dataset.itemId;

            Swal.fire({
                title: 'Etes-vous Sûr?',
                text: "Votre suppression est irréversible !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprime-le!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var deleteUrl = "{{ route('supprimer.article', ':id') }}".replace(':id', itemId);
                    window.location.href = deleteUrl;
                }
            });
        });
    });
</script>


                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection