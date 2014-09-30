<form data-abide method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        <div class="row">
            <label for="username">{{{ Lang::get('confide::confide.username') }}}
                <input required class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
                <small class="error">Name is required and must be a string.</small>
            </label>
        </div>
        <div class="row">
            <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small>
                <input required class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="email" name="email" id="email" value="{{{ Input::old('email') }}}">
                <small class="error">Email is required.</small>
            </label>
        </div>
        <div class="row">
            <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
            <input required class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
            <small class="error">Password is required.</small>
        </div>
        <div class="row">
            <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
            <input required data-equalto="password" class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
            <small class="error">The password did not match.</small>
        </div>

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </fieldset>
</form>