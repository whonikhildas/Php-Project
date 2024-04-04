<?php  
namespace App\Http\Middleware;  
use Closure;  
class CheckAge  
{  
      
/** 
     * Handle an incoming request. 
     * 
      
* @param 
\Illuminate\Http\Request  $request 
     
     * @param  \Closure  $next 
         * @return mixed 
         */  
       
       public function handle($request, Closure $next)  
            
        {  
            echo ($request->age>10) ? "greater" : " less";   
        if($request->age>10)  
        {  
        echo "Age is greater than 10";  
        }  
        else  
        {  
        echo "Age is not greater than 10";  
        }  
        return $next($request);  
            
        }
    }  
            