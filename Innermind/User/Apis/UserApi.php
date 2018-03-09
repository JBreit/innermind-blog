<?php

namespace Innermind\User\Apis;

use Illuminate\Http\Request;
use Innermind\User\Services\UserService;
use Innermind\Support\Http\Controller;
use Innermind\User\Entities\User;

class UserApi extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    protected function index()
    {

       //
    }

    protected function create()
    {
        //
    }

    protected function store()
    {
        //
    }

    protected function show()
    {
        //
    }

    protected function edit()
    {
        //
    }

    protected function update()
    {
        //
    }

    protected function destroy(t)
    {
        //
    }
}