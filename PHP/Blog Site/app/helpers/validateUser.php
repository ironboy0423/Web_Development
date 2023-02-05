<?php
function validateUser($user)
{

  $errors = array();

  if(empty($user['username'])) {
    array_push($errors, 'Username is required');
  }

  if(empty($user['email'])) {
    array_push($errors, 'Email is required');
  }

  if(empty($user['password'])) {
    array_push($errors, 'Password is required');
  }

  if($user['passwordConf'] !== $user['password']) {
    array_push($errors, 'Password do not match');
  }

  $existingUser = selectOne('users', ['email' => $user['email']]);
  if ($existingUser) {
    if (isset($post['update-user']) && $existingUser['id'] != $post['id']) {
      array_push($errors, 'Email already exists!');
    }
    if (isset($post['create-admin'])) {
      array_push($errors, 'Email already exists!');
    }
  }

  $existingUser = selectOne('users', ['username' => $user['username']]);
  if ($existingUser) {
    if (isset($post['update-user']) && $existingUser['id'] != $post['id']) {
      array_push($errors, 'Username already exists!');
    }
    if (isset($post['create-admin'])) {
      array_push($errors, 'Username already exists!');
    }
  }
  return $errors;
}


// login validation

function validateLogin($user)
{
  $errors = array();

  if(empty($user['username'])) {
    array_push($errors, 'Username is required');
  }

  if(empty($user['password'])) {
    array_push($errors, 'Wrong password!');
  }
  return $errors;
}
?>
