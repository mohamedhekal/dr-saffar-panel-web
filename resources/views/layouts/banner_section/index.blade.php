@extends('layouts.master')
@section('title')
    kripton
@endsection
    <!-- Datatable -->
    <!-- Custom Stylesheet -->
<link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">

@section('css')

@endsection


@section('content')
<div class="row">
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banner</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>actions</th>
                                        <th>id</th>
                                        <th>title_en</th>
                                        <th>title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                    @foreach($banner_sections as $banner_section)
                                    @php
                                    $i++
                                    @endphp
                                        <tr>
                                            <td>
                                           
                                        <button type="submit" class="btn btn-danger">
                                        <a class="dropdown-item"href="{{ route('Banner.edit', $banner_section->id) }}"  >edit</a>        

                                        </button>

                                        <form class="deleteForm" action="{{route('Banner.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $banner_section->id }}">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                            </td>
                                        </form>


                                            <td>{{ $i }}</td>
                                            
                                            <td>{{ $banner_section->title_en }}</td>
                                            <td>{{ $banner_section->title }}</td>
                                           
                                        </tr>

                                        

                                    @endforeach                                           
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
			{{ $banner_sections->links() }}


		</div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.querySelectorAll(".deleteForm").forEach(form => {
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission
            
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    form.submit();
                } else {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your setting is safe :)",
                        icon: "error"
                    });
                }
            });
        });
    });
</script>
<script src="{{ URL::asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/plugins-init/datatables.init.js')}}"></script>

@endsection