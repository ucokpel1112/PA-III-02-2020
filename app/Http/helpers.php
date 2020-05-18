<?php


function checkPermission($permissions){

    $userAccess = getMyPermission(auth()->user()->is_permission);

    foreach ($permissions as $key => $value) {

        if($value == $userAccess){

            return true;

        }

    }

    return false;

}


function getMyPermission($id)

{

    switch ($id) {
        case 0:

            return 'customer';

            break;

        case 1:

            return 'member';

            break;

        case 2:

            return 'admin';

            break;

        default:

            return 'user';

            break;

    }

}


?>
