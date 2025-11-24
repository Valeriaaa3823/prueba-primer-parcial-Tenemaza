<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ValidateAuthToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token requerido'], 401);
        }

        // Llama al microservicio de autenticación
        $response = Http::withHeaders([
            'Authorization' => $token
        ])->get('http://127.0.0.1:8001/api/validate-token'); 
        // <-- cambia el puerto si tu AuthService usa otro

        if ($response->failed()) {
            return response()->json(['error' => 'Token inválido'], 401);
        }

        // Si el token es válido, continúa
        return $next($request);
    }
}
