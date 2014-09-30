<form data-abide method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

    <div class="form-group">
        <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
        <div class="row">
            <input required class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="email" name="email" id="email" value="{{{ Input::old('email') }}}">
            <small class="error">An email address is required.</small>
            <span class="row">
                <input class="button" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
            </span>
        </div>
    </div>
</form>