<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminEditMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  
    public function handle(Request $request, Closure $next): Response
    {
         /** @var User $user */
        $user = Auth::user();
      
        if (!$user || !$user->isAdmin()) {
            return redirect()->route('catalog.index');
        }
        return $next($request); 
    }
}
