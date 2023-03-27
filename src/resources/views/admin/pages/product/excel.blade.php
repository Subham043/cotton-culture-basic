@extends('admin.layouts.dashboard')


@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        @include('admin.includes.breadcrumb', ['page'=>'Products', 'page_link'=>route('product_list.get'), 'list'=>['Excel', 'Upload']])
        <!-- end page title -->

        <div class="row">
            @include('admin.includes.back_button', ['link'=>route('product_list.get')])
            <div class="col-lg-12">
                <form id="countryForm" method="post" action="{{route('product_excel.post')}}" enctype="multipart/form-data">
                @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Product Excel</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <button type="button" class="btn rounded-pill btn-secondary waves-effect" data-bs-toggle="modal" data-bs-target="#myModal">Guide For Excel Upload</button>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-12 col-md-12">
                                        @include('admin.includes.file_input', ['key'=>'excel', 'label'=>'Excel'])
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="submitBtn">Create</button>
                                    </div>


                                </div>
                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <!--end col-->
        </div>
        <!--end row-->



    </div> <!-- container-fluid -->
</div><!-- End Page-content -->

<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Guide</h5>
                <button type="button" id="myModalClose" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="live-preview">
                    <p><code><b>Step 1:</b></code> First you need to upload an excel sheet. The excel sheet must contain atleast one row of data. <br><br><code>Note:</code>Download sample excel sheet. <a href="{{asset('excel/document.xlsx')}}" download type="button" class="btn btn-ghost-info btn-sm waves-effect waves-light add-btn" id="create-btn"><i class="ri-download-line align-bottom me-1"></i> Download</a><br><br><code>Note:</code> Please do not delete/modify/edit the first row of data which contains the heading from the sample excel provided.</p>
                    <p><code><b>Step 2:</b></code> Second press the submit button.</p>
                </div>

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop


@section('javascript')


<script type="text/javascript">

// initialize the validation library
const validation = new JustValidate('#countryForm', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation
  .addField('#excel', [
    {
        rule: 'minFilesCount',
        value: 1,
        errorMessage: 'Please select a excel',
    },
    {
        rule: 'files',
        value: {
            files: {
                extensions: ['xls', 'xlsx']
            },
        },
        errorMessage: 'Please select a valid excel',
    },
  ])
  .onSuccess(async (event) => {
    event.target.submit();
  });
</script>

@stop
