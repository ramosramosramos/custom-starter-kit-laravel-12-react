<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Summary of index
     *
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function index(): Response|ResponseFactory
    {

        return inertia('user/index', [
            'users' => app(UserService::class)->getUsers(),
        ]);
    }

    /**
     * Summary of create
     *
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function create(): Response|ResponseFactory
    {
        //
        return inertia('user/create', [
            'roles' => Role::select(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): void
    {
        //
    }
}
