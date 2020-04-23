<?php
Broadcast::channel('App.User.{id}', function ($user, $id) {
 return (int) $user->id === (int) $id;
});

Broadcast::channel('conversion', function ($id) {
 return 'test ' . $id;
});