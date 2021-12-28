<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class admincheckout
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
        if (Auth::check()) {

            $user = Auth::user();
            if ($user->level == 3) {
            return $next($request);
            }else{
                return redirect()->action('QuanlytimvieclamController@dangnhapadmin')->with('success','Tài khoản không đủ quyền!');   
            }
        }else
        {
            return redirect()->action('QuanlytimvieclamController@dangnhapadmin')->with('success','Bạn chưa đăng nhập!');
        }
    }
}
