<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ntdcheckout
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
            if ($user->level == 2) {
            return $next($request);
            }else{
                return redirect()->action('QuanlytimvieclamController@getdangnhapNTD')->with('success','Tài khoản không đủ quyền!');   
            }
        }else
        {
            return redirect()->action('QuanlytimvieclamController@getdangnhapNTD')->with('success','Bạn chưa đăng nhập!');
        }
    }
}
