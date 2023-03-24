@extends('admin.layouts.dashboard')

@section('css')
<link href="{{ asset('admin/libs/quill/quill.core.css' ) }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/quill/quill.bubble.css' ) }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/quill/quill.snow.css' ) }}" rel="stylesheet" type="text/css" />

<style>
    #description_quill{
        min-height: 200px;
    }
</style>
@stop

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        @include('admin.includes.breadcrumb', ['page'=>'Products', 'page_link'=>route('product_list.get'), 'list'=>['Create']])
        <!-- end page title -->

        <div class="row">
            @include('admin.includes.back_button', ['link'=>route('product_list.get')])
            <div class="col-lg-12">
                <form id="countryForm" method="post" action="{{route('product_create.post')}}" enctype="multipart/form-data">
                @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Product Detail</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.input', ['key'=>'name', 'label'=>'Product Name', 'value'=>old('name')])
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        <div>
                                            <label for="category_id" class="form-label">Product Category</label>
                                            <select id="category_id" name="category_id"></select>
                                            @error('category_id')
                                                <div class="invalid-message">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-4">
                                        @include('admin.includes.file_input', ['key'=>'catalogue', 'label'=>'Product Catalogue'])
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        @include('admin.includes.quill', ['key'=>'description', 'label'=>'Product Description', 'value'=>old('description')])
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-4 mt-md-0">
                                            <div>
                                                <div class="form-check form-switch form-check-right mb-2">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRightDisabled2" name="publish_status" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckRightDisabled2">Publish Status</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!--end col-->

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



@stop


@section('javascript')

<script src="{{ asset('admin/js/pages/choices.min.js') }}"></script>
<script src="{{ asset('admin/libs/quill/quill.min.js' ) }}"></script>
<script type="text/javascript">

var quillDescription = new Quill('#description_quill', {
    theme: 'snow'
});
quillDescription.on('text-change', function(delta, oldDelta, source) {
  if (source == 'user') {
    document.getElementById('description').value = quillDescription.root.innerHTML
  }
});

// initialize the validation library
const validation = new JustValidate('#countryForm', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation
  .addField('#name', [
    {
      rule: 'required',
      errorMessage: 'Product Name is required',
    },
    {
        rule: 'customRegexp',
        value: COMMON_REGEX,
        errorMessage: 'Product Name is invalid',
    },
  ])
  .addField('#description', [
    {
      rule: 'required',
      errorMessage: 'Product Description is required',
    },
  ])
  .addField('#category_id', [
    {
      rule: 'required',
      errorMessage: 'Please select a product category',
    },
    {
        validator: (value, fields) => {
        if (value?.length==0) {
            return false;
        }

        return true;
        },
        errorMessage: 'Please select a product category',
    },
  ])
  .addField('#catalogue', [
    {
        rule: 'files',
        value: {
            files: {
                extensions: ['pdf']
            },
        },
        errorMessage: 'Please select a valid product catalogue',
    },
  ])
  .onSuccess(async (event) => {
    event.target.submit();
  });
</script>

<script type="text/javascript">

    const categoryChoice = new Choices('#category_id', {
        choices: [
            @foreach($categories as $val)
                {
                    value: '{{$val->id}}',
                    label: '{{$val->name}}',
                    selected: {{(old('category_id')==$val->id) ? 'true' : 'false'}},
                },
            @endforeach
        ],
        placeholderValue: 'Select the product category',
        ...CHOICE_CONFIG
    });


</script>

@stop
