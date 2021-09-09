<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @ Form Request 
 **/
use App\Http\Requests\UserRequest\StoreUser;
use App\Http\Requests\UserRequest\SearchUser;
/**
 * @ Repository 
 **/
use App\Repositories\UserRepository;

/**
 * Class UserController
 * @package App\Http\Controllers\Api
 * @author Richard Guevara ( https://kingrgdev.com )
 */

class UserController extends Controller
{
    /**
     *@ Repository Implementation 
     **/
    protected $user;

    /**
     * Create a new controller instance
     * @param UserRepository $user_repository
     * @ Constructor 
     **/

    public function __construct( UserRepository $user_repository ) {

        $this->user = $user_repository;

    }

    public function index() {

        $index = $this->user->getUsers();

        return $index;

    }

    public function storeLocation( StoreUser $request ) {

        $location_data = \Location::get( $request->ip_address );

        $user_data = array(
            'uuid' => $request->uuid,
            'name' => $request->name,
            'ip_address' => $request->ip_address,
            'country'  => $location_data->countryName,
            'country_code'  => $location_data->countryCode,
            'region_code'  => $location_data->regionCode,
            'region'  => $location_data->regionName,
            'city'  => $location_data->cityName,
            'zip_code'  => $location_data->zipCode,
            'latitude'  => $location_data->latitude,
            'longitude'  => $location_data->longitude
        );


        $storeUser = $this->user->storeUser($user_data);

        return $storeUser;

    }

    public function searchLocation( SearchUser $uuid ) {

        $searchUser = $this->user->searchUser( $uuid );

        return $searchUser;
    }


}
