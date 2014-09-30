<form data-abide method="POST" action="{{{ URL::to('/users/reset_password') }}}" accept-charset="UTF-8">
    <input type="hidden" name="token" value="{{{ $token }}}">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

    <div class="row">
        <label for="password">{{{ Lang::get('confide::confide.password') }}}
        <input required class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
        </label>
        <small class="error">Your password must match the requirements</small>
    </div>
    <div class="row">
        <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}
        <input data-equalto="password" class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
        </label>
        <small class="error">The password did not match</small>
    </div>

    <div class="row">
        <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
    </div>
</form>