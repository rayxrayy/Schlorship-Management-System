namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminVerification
{
/**
* Handle an incoming request.
*
* @param \Illuminate\Http\Request $request
* @param \Closure $next
* @return mixed
*/
public function handle(Request $request, Closure $next)
{
// Check if the user is authenticated
if(auth()->check()) {
// Check if the authenticated user has the admin role
if(auth()->user()->role === 'admin') {
// If user is admin, allow access
return $next($request);
}
}

// If user is not admin, redirect or throw an exception, whatever suits your application
return redirect()->route('home')->with('error', 'Unauthorized access.');
}
}