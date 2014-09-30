<form data-abide method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        <div class="row">
            <label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}
            <input required class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </label>
            <small class="error">Name is required.</small>
        </div>
        <div class="row">
        <label for="password">
            {{{ Lang::get('confide::confide.password') }}}
        <input required class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
        </label>
        <small class="error">Password is required.</small>
        </div>
        <div class="row">
            <label for="remember" class="checkbox">{{{ Lang::get('confide::confide.login.remember') }}}
                <input type="hidden" name="remember" value="0">
                <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
            </label>
        </div>
        <div class="row">
            <button tabindex="3" type="submit" class="btn btn-default">{{{ Lang::get('confide::confide.login.submit') }}}</button>
            <a class="button secondary" href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
        </div>
    </fieldset>
</form>