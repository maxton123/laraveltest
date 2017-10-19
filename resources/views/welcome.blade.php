<h2>Register!</h2>

<?php

echo Form::open(['register', 'POST']);

echo Form::label('username', 'Username') . Form::text('username');
echo "<br>";
echo Form::label('email', 'E-mail') . Form::text('email');
echo "<br>";
echo Form::label('password', 'Password') . Form::password('password');
echo "<br>";

echo Form::submit('Register!');

echo Form::token() . Form::close();

?>