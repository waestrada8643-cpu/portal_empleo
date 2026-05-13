@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Encabezado -->
        <div class="text-center mb-12 text-white">
            <h1 class="text-4xl font-extrabold drop-shadow-lg">🌟 Bienvenido al Portal de Empleo 🌟</h1>
            <p class="mt-4 text-lg">Tu futuro laboral comienza aquí. Explora, conecta y crece.</p>
        </div>

        <!-- Tarjetas principales -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Busco empleo -->
            <a href="{{ route('menu') }}" 
               class="bg-white rounded-xl shadow-lg p-8 transform hover:scale-105 transition duration-300">
                <div class="flex items-center space-x-4">
                    <div class="bg-blue-100 p-4 rounded-full">
                        <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 14h2v2h-2v-2zm0-8h2v6h-2V6z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-blue-700">Busco Empleo</h2>
                        <p class="text-gray-600">Explora las mejores ofertas laborales disponibles.</p>
                    </div>
                </div>
            </a>

            <!-- Busco candidatos -->
            <a href="{{ route('contacto') }}" 
               class="bg-white rounded-xl shadow-lg p-8 transform hover:scale-105 transition duration-300">
                <div class="flex items-center space-x-4">
                    <div class="bg-green-100 p-4 rounded-full">
                        <svg class="w-10 h-10 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.05 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-green-700">Busco Candidatos</h2>
                        <p class="text-gray-600">Publica tus vacantes y encuentra el mejor talento.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Sección motivacional -->
        <div class="mt-16 bg-white rounded-xl shadow-lg p-10 text-center">
            <h2 class="text-3xl font-bold text-purple-700 mb-4">🚀 Tu éxito comienza aquí</h2>
            <p class="text-gray-700 mb-6">
                Ya seas un profesional buscando empleo o una empresa en busca de talento, 
                este portal está diseñado para ayudarte a alcanzar tus metas.
            </p>
            <a href="{{ route('inicio') }}" 
               class="inline-block bg-purple-600 text-white px-6 py-3 rounded-lg shadow hover:bg-purple-700 transition">
                Ir al Inicio
            </a>
        </div>
    </div>
</div>
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-center">Bienvenido al Dashboard</h1>

    <p class="text-center">
        Solo los usuarios autenticados pueden ver esta página.
    </p>

    <div class="text-center">
        <a href="{{ route('mensajes') }}" class="btn btn-primary">
            Ver mensajes PQRS
        </a>
    </div>
@endsection

@endsection

