<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PrototypeController extends Controller
{

    private static $key = null; 
    private $payload = null;
    private $decrypt = null; 
    private $InnerRequest = null; 
    private $Action = null; 

    //Your decode string need to be the same
    //You need to seend this on Params of request
    //Thats only for guide
    private $my_encode_string = "uRAeeIeccbAYSQ5tYCEXnw8HYnSKn/zXhbBxVvKfSLg=";
    //Save in varable and show the decode need to be the same as us
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->key = "LO9658JMP09876543";   
    }

    public function _getContext(Request $request){
        if(!empty($request)):
            if($request->has('string_decrypt')):
                //Make it work (explain why and how)
                self::GetOTFConnectionCredential();
                //Add validation of context and response JSON
                //If it works make it work the next Line
                //if():
                    //Make it work explain why
                    $this->InnerRequest = app('ContextController')->$Action();
                    //Add response
                    //return
                //else:
                //endif;
                //If not make the response
            else:
                 //Add response JSON with body and headers (server code)
            endif;
        else:
            //Add response JSON with body and headers (server code)
        endif;
    }

    final private static function _setContext(){
        $this->Payload = "aes127" ;
    }

    final private  function GetOTFConnectionCredential(){
        $this->_setContext();
        //Add context for decrypt
        $this->decrypt =  @openssl_decrypt($this->Payload , $this->key);
        //Add context for validate return
    }

}
