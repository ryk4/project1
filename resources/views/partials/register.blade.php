<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="d-flex flex-wrap" id="registerModal"><strong>{{ __('Register') }}</strong><span class="mx-1 d-none d-sm-inline">|</span><a href="#">
                    <small class="font-weight-light">Login</small></a></h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="registerForm">
                    @csrf
                    <h4 class="text-secondary d-flex align-items-center"><small class="mr-2"><i class="fas fa-user"></i></small> Personal info</h4>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="firstNameInput">{{ __('First Name') }}</label>
                                <input id="firstNameInput" type="text" class="form-control" name="firstName" 
                                value="{{ old('firstName') }}"  autocomplete="name" autofocus placeholder="e.g John">
                                <span class="invalid-feedback" role="alert" id="firstNameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="lastNameInput">{{ __('Last Name') }}</label>
                                <input id="lastNameInput" type="text" class="form-control" name="lastName" 
                                value="{{ old('lastName') }}"  autocomplete="name" autofocus placeholder="e.g Smith">
                                <span class="invalid-feedback" role="alert" id="lastNameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-secondary d-flex align-items-center"><small class="mr-2"><i class="fas fa-unlock"></i></small> Account info</h4>
                    <div class="row">
                        <div class="col-12 col-lg-12">

                            <div class="form-group">
                            <label for="emailInput" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                        </div>
                                        <input id="emailInput" type="email" class="form-control" name="email" 
                                        value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">
                                        <span class="invalid-feedback" role="alert" id="emailError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                <label for="passwordInput" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                                        </div>
                                        <input id="passwordInput" type="password" class="form-control" name="password" 
                                        required autocomplete="new-password" placeholder="Enter Password">
                                        <span class="invalid-feedback" role="alert" id="passwordError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                                    required autocomplete="new-password" placeholder="Re-enter Password">
                                    </div>
                                </div>
                            </div>
                        </div>                     
                        <hr>                        
                        <div class="row align-items-center">
                        <div class="col-12 col-lg-7">
                            <div class="form-check custom-control custom-checkbox mt-4">
                            <input class="form-check-input custom-control-input" type="checkbox" id="exampleRegCheck">
                            <label class="form-check-label custom-control-label" for="exampleRegCheck">I agree to <a href="#">privacy policy</a></label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 text-right mt-4">
                        <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div><br>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@parent

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('register') }}",
            data: formData,
            success: () => window.location.assign("{{ route('home') }}"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection