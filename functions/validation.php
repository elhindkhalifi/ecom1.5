<?php
require_once("userCrud.php");

function usernameIsValid(string $username): array
{
    $result = [
        'isValid' => true,
        'msg' => ''

    ];
    $userInDB = getUserByName($username);
    if (strlen($username) < 2) {
        $result = [
            'isValid' => false,
            'msg' => '<h2><center>ERROR!</center></H2>Le nom utilisé est trop court'

        ];
    } elseif (strlen($username) > 20) {
        echo '<br><br> Dans mon if strlen >20';
        echo strlen($username);  
        $result = [
            'isValid' => false,
            'msg' => '<h2><center>ERROR!</center></H2>Le nom utilisé est trop long'

        ];
    } elseif ($userInDB) {
        $result = [
            'isValid' => false,
            'msg' => '<h2><center>ERROR!</center></H2>Le nom est déjà utilisé!'

        ];
    }
    return $result;
}




?>