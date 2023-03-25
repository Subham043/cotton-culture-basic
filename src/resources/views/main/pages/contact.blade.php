@extends('main.layouts.main')

@section('css')
<link href="{{ asset('admin/css/iziToast.min.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    @include('main.includes.breadcrumb', ['page_name' => 'Contact Us'])

    <!-- main-container -->
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section class="col-sm-12 wow bounceInUp animated">
                    <div class="col-main">

                        <form id="countryForm" method="POST" class="static-contain">
                            <fieldset class="group-select">
                                <ul>
                                    <li>
                                        <div class="customer-name">
                                            <div class="input-box name-firstname">
                                                <label for="first_name"> First Name<span
                                                        class="required">*</span></label>
                                                <br>
                                                <input type="text" id="first_name" name="first_name"
                                                    value="" title="First Name" class="input-text ">
                                            </div>
                                            <div class="input-box name-lastname">
                                                <label for="last_name"> Last Name<span
                                                        class="required">*</span></label>
                                                <br>
                                                <input type="text" id="last_name" name="last_name"
                                                    value="" title="Last Name" class="input-text ">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-box name-lastname">
                                            <label for="email"> Email Address <span class="required">*</span>
                                            </label>
                                            <br>
                                            <input type="text" id="email" name="email"
                                                value="" title="Email" class="input-text">
                                        </div>
                                        <div class="input-box">
                                            <label for="phone">Telephone <span class="required">*</span></label>
                                            <br>
                                            <input type="text" name="phone" id="phone" value=""
                                                title="Telephone" class="input-text validate-email">
                                        </div>
                                    </li>
                                    <li class="">
                                        <label for="message">Message<em class="required">*</em></label>
                                        <br>
                                        <div style="float:none" class="">
                                            <textarea name="message" id="message" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                                        </div>
                                    </li>
                                </ul>
                                <input type="text" name="hideit" id="hideit" value=""
                                    style="display:none !important;">
                                <div class="buttons-set">
                                    <button type="submit" id="SubmitBtn" title="Submit" class="button submit"> <span> Submit </span>
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--End main-container -->

@stop

@section('js')
<script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
<script>
const COMMON_REGEX = /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i;

// initialize the validation library
const validation = new JustValidate('#countryForm', {
      errorFieldCssClass: 'is-invalid',
});
// apply rules to form fields
validation
.addField('#first_name', [
{
    rule: 'required',
    errorMessage: 'First Name is required',
},
{
    rule: 'customRegexp',
    value: COMMON_REGEX,
    errorMessage: 'First Name is invalid',
},
])
.addField('#last_name', [
{
    rule: 'required',
    errorMessage: 'Last Name is required',
},
{
    rule: 'customRegexp',
    value: COMMON_REGEX,
    errorMessage: 'Last Name is invalid',
},
])
.addField('#email', [
    {
      rule: 'required',
      errorMessage: 'Email is required',
    },
    {
      rule: 'email',
      errorMessage: 'Email is invalid!',
    },
])
.addField('#phone', [
{
    rule: 'required',
    errorMessage: 'Phone is required',
},
{
    rule: 'customRegexp',
    value: COMMON_REGEX,
    errorMessage: 'Phone is invalid',
},
])
.addField('#message', [
{
    rule: 'required',
    errorMessage: 'Message is required',
},
{
    rule: 'customRegexp',
    value: COMMON_REGEX,
    errorMessage: 'Message is invalid',
},
])
.onSuccess(async (event) => {
    event.target.preventDefault;
    const errorToast = (message) =>{
        iziToast.error({
            title: 'Error',
            message: message,
            position: 'bottomCenter',
            timeout:7000
        });
    }
    const successToast = (message) =>{
        iziToast.success({
            title: 'Success',
            message: message,
            position: 'bottomCenter',
            timeout:6000
        });
    }
    var submitBtn = document.getElementById('SubmitBtn')
    submitBtn.innerHTML = `
        <span class="d-flex align-items-center">
            <span class="spinner-border flex-shrink-0" role="status">
                <span class="visually-hidden"></span>
            </span>
            <span class="flex-grow-1 ms-2">
                &nbsp; Submiting...
            </span>
        </span>
        `
    submitBtn.disabled = true;
    try {
        var formData = new FormData();
        formData.append('first_name',document.getElementById('first_name').value)
        formData.append('last_name',document.getElementById('last_name').value)
        formData.append('email',document.getElementById('email').value)
        formData.append('phone',document.getElementById('phone').value)
        formData.append('message',document.getElementById('message').value)
        const response = await axios.post('{{route('contact.post')}}', formData)
        successToast(response.data.message)
        event.target.reset()
    } catch (error) {
        if(error?.response?.data?.errors?.first_name){
            errorToast(error?.response?.data?.errors?.first_name[0])
        }
        if(error?.response?.data?.errors?.last_name){
            errorToast(error?.response?.data?.errors?.last_name[0])
        }
        if(error?.response?.data?.errors?.email){
            errorToast(error?.response?.data?.errors?.email[0])
        }
        if(error?.response?.data?.errors?.phone){
            errorToast(error?.response?.data?.errors?.phone[0])
        }
        if(error?.response?.data?.errors?.message){
            errorToast(error?.response?.data?.errors?.message[0])
        }
        if(error?.response?.data?.error){
            errorToast(error?.response?.data?.error)
        }
    } finally{
        submitBtn.innerHTML =  `
            Submit
            `
        submitBtn.disabled = false;
    }
});
</script>
@stop
