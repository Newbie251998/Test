namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller {
    
    public function showLoginForm() {

        return view('login');
    }
}