@extends('layouts.master')
@section('title')
    kripton
@endsection
@section('css')

@endsection


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DoctorSection</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('DoctorSection.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_vector_img</label>
                                    <div class="form-file">
                                        <input type="file" name="section_vector_img" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_dr_img</label>
                                    <div class="form-file">
                                        <input type="file" name="section_dr_img" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_title_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="section_title_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="section_title" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_sub_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="section_sub_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_sub</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="section_sub" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_desc_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="section_desc_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_desc</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="section_desc" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">dr_name_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dr_name_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">dr_name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dr_name" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">dr_medical_title_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dr_medical_title_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">dr_medical_title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dr_medical_title" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Qualification_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Qualification_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Qualification</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Qualification" class="form-control form-control-sm">
                                    </div>
                                </div>
                                                                                                
                                <div class="mb-3 row">
                                
                                <button type="submit" class="btn btn-primary">submit</button>

                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('scripts')

@endsection