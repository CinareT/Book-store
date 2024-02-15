<!--

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }
    
        return redirect('/store');
        
    }
   // return $next($request);
}; -->


 <!-- @foreach($products as $product)
                    <tr>
                      <td>{{$product->id}}</td>
                      <td>{{$product->title}}</td>
                      <td>{{$product->slug}}</td>
                      
                      <td>{{$product->status}}</td>

                      <td><a href="{{route('store.categories.edit', $product->id)}}" style=" width: 61px; margin-left: 5px; padding:13 20px;" class="btn btn-success">Edit</a>
                      <form onsubmit ="return confirm('are you sure?')" method="post" action="{{route('store.categories.destroy', $product->id)}}">
                         @method('delete')
                         @csrf 
                         <input type="submit" style="width: 63px;" class="btn btn-outline-danger m-1" value="Delete">
                    </form>
                    </td>
                    </tr>
                    @endforeach -->


<!-- 
                    <label for="exampleSelectBorderWidth2">Select related category</label>
                  <select name="category_id" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                    <option value="0">Main category</option>
                    @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->title}}</option>
                    @endforeach

                  </select> -->