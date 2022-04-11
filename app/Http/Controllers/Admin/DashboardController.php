<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Role;
use App\Models\Admin\Permission;
use App\Models\Admin\UserStatus;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{

    /**
     * Middleware
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        \config_set('theme.cdata', [
            'title' => 'Dashboard',
            'breadcrumb' => [
                [
                    'name' => 'Dashboard',
                    'link' => false
                ],
            ],
            'add' => \route('admin.role.create')
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \config_set('theme.cdata', [
            'description' => 'Dashboard',

        ]);

        $analytic = [];


        if (\can('user_status_management')) $analytic['user']['status'] = UserStatus::cacheData()->count();
        if (\can('user_role_management')) $analytic['user']['role'] = Role::cacheData()->count();
        if (\can('user_permission_management')) $analytic['user']['permission'] = Permission::cacheData()->count();
        if (\can('user_browse')) {
            $analytic['user']['status_data'] = UserStatus::cacheData();
            $analytic['user']['user'] = User::cacheData()->count();
        }




        // seo
        $this->seo()->setTitle(config('theme.cdata.title'));
        $this->seo()->setDescription(\config('theme.cdata.description'));

        return view('pages.admin.dashboard', \compact('analytic'));
    }

    /**
     *
     *
     * return Redirect Url
     *
     *
     */
    public function redirect()
    {
        return \redirect()->route('admin.dashboard');
    }
}
