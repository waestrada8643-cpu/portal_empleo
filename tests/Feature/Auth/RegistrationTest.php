<?php

use App\Providers\AppServiceProvider;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('registration form uses HTTPS behind a reverse proxy', function () {
    $response = $this->withHeader('X-Forwarded-Proto', 'https')->get('/register');

    $response->assertOk();
    $response->assertSee('action="https://localhost/register"', false);
});

test('registration form uses HTTPS in production', function () {
    $this->app->instance('env', 'production');
    (new AppServiceProvider($this->app))->boot();

    $response = $this->get('/register');

    $response->assertOk();
    $response->assertSee('action="https://localhost/register"', false);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});
