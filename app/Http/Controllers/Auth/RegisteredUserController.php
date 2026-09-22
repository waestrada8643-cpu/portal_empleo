<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'apellido'  => ['sometimes', 'string', 'max:255'],
            'celular'   => ['sometimes', 'string', 'max:20'],
            'ciudad'    => ['sometimes', 'string', 'max:100'],
            'direccion' => ['sometimes', 'string', 'max:255'],
            'email'     => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password'  => ['required', 'confirmed', Rules\Password::defaults()],
            'rol'       => ['sometimes', 'in:candidato,empresa'],
            'cv_file'   => ['sometimes', 'file', 'mimes:pdf,doc,docx,jpg,jpeg,png', 'max:5120'],
            'terminos'  => ['sometimes', 'accepted'],
        ], [
            'name.required'      => 'El nombre es obligatorio.',
            'email.required'     => 'El correo electrónico es obligatorio.',
            'email.email'        => 'Ingresa un correo electrónico válido.',
            'email.unique'       => 'Este correo ya está registrado.',
            'password.required'  => 'La contraseña es obligatoria.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'cv_file.mimes'      => 'El archivo debe ser PDF, DOC, DOCX, JPG o PNG.',
            'cv_file.max'        => 'El archivo no puede superar los 5 MB.',
            'terminos.accepted'  => 'Debes aceptar los términos y condiciones.',
        ]);

        $cvPath = null;
        if ($request->hasFile('cv_file')) {
            $cvPath = $request->file('cv_file')->store('cv_files', 'public');
        }

        $userData = [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ];

        foreach (['apellido', 'ciudad', 'direccion', 'rol'] as $column) {
            if (Schema::hasColumn('users', $column) && $request->filled($column)) {
                $userData[$column] = $request->{$column};
            }
        }

        if (Schema::hasColumn('users', 'telefono') && $request->filled('celular')) {
            $userData['telefono'] = $request->input('celular');
        }

        if (Schema::hasColumn('users', 'cv')) {
            $userData['cv'] = $cvPath;
        }

        $user = User::create($userData);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended(route('dashboard', absolute: false));
    }
}