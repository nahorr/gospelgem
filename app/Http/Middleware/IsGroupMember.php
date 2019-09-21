<?php

namespace App\Http\Middleware;

use Closure;
use App\User; 
use Auth;
use App\Group;

class IsGroupMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $allusergroups = \Auth::user()->groups->pluck('id')->toArray();

        if (in_array($request->group->id, $allusergroups)) {
            return $next($request);
        }else{
            flash('You are not a memeber of this group!. Please request to join a group by clicking on "join".')->error();
            return back(); 
        }
        
        return $next($request);
    }
}
