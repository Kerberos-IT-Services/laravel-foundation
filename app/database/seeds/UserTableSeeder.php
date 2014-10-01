<?php

class UserTableSeeder extends Seeder {

  public function run()
  {
    $user = new User;
    $user->username = 'prueba';
    $user->email = 'admin@site.dev';
    $user->password = 'admin';
    $user->password_confirmation = 'admin';
    $user->confirmation_code = md5(uniqid(mt_rand(), true));
    $user->confirmed = '1';

    if(! $user->save()) {
      Log::info('Unable to create user '.$user->username, (array)$user->errors());
    } else {
      Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
    }
  }
}