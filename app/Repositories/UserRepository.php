<?php

namespace App\Repositories;

use App\Models\User;


/**
 * Class UserRepository
 * @package App\Repositories
 * @package Locator : https://www.positronx.io/how-to-get-location-information-with-ip-address-in-laravel/
 * @author Richard Guevara ( https://kingrgdev.com )
 * 
 */

class UserRepository
{
    public function getUsers() {

        $query = User::orderBy( 'created_at' , 'desc' )->get();
        return $query;

    }

    public function storeUser( $userData ) {

        $store = User::create( $userData );
        return $store;

    }

    public function searchUser( $uuid ) {

        $query = User::find( $uuid );
        return $query;

    }
}