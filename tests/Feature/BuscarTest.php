<?php

use App\Models\Vacante;

it('busca vacantes por texto', function () {
    Vacante::create([
        'titulo' => 'Desarrollador Backend',
        'empresa' => 'TechNova',
        'descripcion' => 'Necesitamos un desarrollador para crear APIs seguras.',
        'ubicacion' => 'Pasto',
        'estado' => 'activo',
    ]);

    Vacante::create([
        'titulo' => 'Diseñador UX',
        'empresa' => 'Studio Azul',
        'descripcion' => 'Diseño de experiencias para plataformas web.',
        'ubicacion' => 'Bogotá',
        'estado' => 'activo',
    ]);

    $response = $this->get('/buscar?q=desarrollador');

    $response->assertOk();
    $response->assertSee('Desarrollador Backend');
    $response->assertDontSee('Diseñador UX');
});
