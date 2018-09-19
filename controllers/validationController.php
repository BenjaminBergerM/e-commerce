<?php

    function validateRegister ($user)
    {
        $errors = [];
        if (isset($user['name'])) {
            if (empty($user['name'])) {
                $errors['name'] = 'El nombre está vacío.';
            } elseif (strlen($user['name']) < 3) {
                $errors['name'] = 'El nombre es muy corto.';
            } elseif (strlen($user['name']) > 15) {
                $errors['name'] = 'El nombre es muy largo.';
            } elseif (strtolower($user['name']) == 'montoto') {
                $errors['name'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
            }
        }

        if (isset($user['lastName'])) {
            if (empty($user['lastName'])) {
                $errors['lastName'] = 'El apellido está vacío.';
            } elseif (strlen($user['lastName']) < 2) {
                $errors['lastName'] = 'El apellido debe tener 4 caracteres o más.';
            } elseif (strlen($user['lastName']) > 15) {
                $errors['lastName'] = 'El apellido debe tener 15 caracteres o menos.';
            } elseif (strtolower($user['lastName']) == 'montoto') {
                $errors['lastName'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
            }
        }

        if (isset($user['username'])) {
            if (empty($user['username'])) {
                $errors['username'] = 'El usuario está vacío.';
            } elseif (strlen($user['username']) < 5) {
                $errors['username'] = 'El usuario debe tener 4 caracteres o más.';
            } elseif (strlen($user['username']) > 25) {
                $errors['username'] = 'El usuario debe tener 15 caracteres o menos.';
            } elseif ($user['username'] === strtolower($user['username'])) {
                $errors['username'] = 'El usuario no tiene mayúsculas.';
            } elseif (strtolower($user['username']) == 'montoto') {
                $errors['username'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
            }
        }
        if (isset($user['email'])) {
            if (empty($user['email'])) {
                $errors['email'] = 'El email está vacío.';
            } elseif (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'El email no es correcto';
            } elseif (strtolower($user['email']) == 'montoto@montoto.montoto') {
                $errors['email'] = '<marquee behavior="alternate">jajajajaj dale nico eleji otro ejemplo</marquee>';
            }
        }
        if(isset($user['date'])){
            if(empty($user['date'])){
                $errors['date']='La fecha esta vacia.';
            }
        }
        if (isset($user['password'])) {
            if (empty($user['password'])) {
                $errors['password'] = 'El password está vacío.';
            } elseif (strlen($user['password']) < 8) {
                $errors['password'] = 'El password debe tener 8 caracteres o más.';
            } elseif (strlen($user['password']) >= 16) {
                $errors['password'] = 'El password debe tener 15 caracteres o menos.';
<<<<<<< HEAD
            }elseif($user['password']!== $user['comfirmPassword']){
                $errors['password']='Las contraseña no coincide';            
=======
            }elseif($user['password'] !== $user['comfirmPassword']){
                $errors['password']='Las contraseña no coincide';
>>>>>>> c5b8072f7131c790bee5ee2b9892549e9f7ef126
            }
        }
        

        return $errors;
    }
?>