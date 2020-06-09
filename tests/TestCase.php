<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signIn($user = null)
    {
        if ($user === null) {
            $user = create(User::class);
        }
        $this->actingAs($user);

        return $user;
    }
}
