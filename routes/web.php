<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Rota de utilidades
 * [x] - ping responde pong
 *
 * -- Rotas de Autenticação * Autenticação via TOKEN
 * [ ] - /user/login -- login
 * [ ] - /user/registro -- registro do usuário
 * [ ] - /user/me -- informações do usuário logado
 * [ ] - /user/index -- lista de usuários
 *
 * - Rotas de configuração geral
 * [x] - /states -- listar os estados
 * [ ] - /categories-- listar as categorias do sistema
 *
 * Rotas de anuncios CRUD
 * [ ] - /Add/:id/image(delete ) -- deletar uma imagem
 *
 */


 Route::get('ping',function() : JsonResponse{
     return response()->json(['pong'=> true]);
 });
