<?php
namespace App\Http\Controllers\Backend;
	
	use Illuminate\Routing\Controller as BaseController;
	use App\Models\Usuario;
	use Illuminate\Http\Request;
	use InoOicClient\Flow\Basic;
	use InoOicClient\Http;
	use InoOicClient\Client;
	use InoOicClient\Oic\Token;
	use Session;

	class AuthController extends BaseController{

       protected $authConfig;
	   
	   public function __construct(){

	   		dd(getenv(getenv('cu_client_id')));
	       $this->authConfig = array(
	           'client_info' => array(
	               'client_id' => getenv('cu_client_id'),
	               'redirect_uri' => getenv('cu_callback'),
	               'authorization_endpoint' => getenv('cu_url_auth'),
	               'token_endpoint' => getenv('cu_url_token'),
	               'user_info_endpoint' => getenv('cu_url_userinfo'),
	               'authentication_info' => array(
	                   'method' => 'client_secret_post',
	                   'params' => array(
	                       'client_secret' => getenv('cu_client_secret')
	                   )
	               )
	           )
	       );
	   }
		
		public function autenticar(){
			$flow = new Basic($this->authConfig);
		    if (!isset($_GET['redirect'])) {
		        try {
		            $uri = $flow->getAuthorizationRequestUri(getenv('cu_scope'));
		            return \Redirect::to($uri);
		        } catch (\Exception $e) {
		            printf("Exception during authorization URI creation: [%s] %s", get_class($e), $e->getMessage());
		        }
		    } else {
		        try {
		            $userInfo = $flow->process();
		        } catch (\Exception $e) {
		            printf("Exception during user authentication: [%s] %s", get_class($e), $e->getMessage());
		        }
		    }

		}

		public function getCallback(Request $request){
			$error = $request->input('error');
			if ($error) return \Redirect::to('/');
			
			$flow = new Basic($this->authConfig);
	        $token = $flow->getAccessToken($_GET['code']);
	        $infoPersonal = $flow->getUserInfo($token);
	        $rut_numero = $infoPersonal['RolUnico']['numero'];
	        $rut_dv = $infoPersonal['RolUnico']['DV'];
	        $rut = $rut_numero.$rut_dv;
	        $usuario = Usuario::where('rut',$rut)->first();
	        if($usuario){
	        	\Auth::login($usuario);
	        	return \Redirect::to(\URL::to('backend'));	
	        }else{
	        	Session::flash('message', 'Su rut no cuenta con acceso a la Plataforma. Para más información contáctese con traspaso2018@digital.gob.cl o con el administrador de su institución');
	        	return \Redirect::to(\URL::to('/'));
	        }
		}

		public function logout(){
			if(\Auth::check()){
				\Auth::logout();
			}
			\Session::flush();
			return \Redirect::to('/');
		}

		public function login(){
			if(\Auth::check()){
				return \Redirect::to('backend');
			}else{
				return \Redirect::to('/');
			}
		}
}


?>