<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller {

    private $oRequest;

    /**
     * @var string
     */
    private $sUsername;

    /**
     * @var string
     */
    private $sPassword;

    public function __construct(Request $oRequest) {

        $this->oRequest = $oRequest;
    }

    public function showLoginPage() {

        return view('login');
    }

    public function doLogin() {

        try{
        return $this
                    ->checkIfUserExists();
//                    ->thenCheckIfPasswordIsCorrect()
//                    ->proceedToResourceIfCredentialIsCorrect();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

        /**
        *
        *  @return LoginController
        *
        */

    public function checkIfUserExists(): LoginController {

        User::where('username', $this->oRequest->input('username'));
        return $this;
    }
}