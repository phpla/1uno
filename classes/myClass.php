class myClass {
	const VERSION = '4.5.4';

	public $variable1;
	public $variable2;

	protected $error;

	public function __construct(){
		
		$error = NULL;
		$variable1 = $variable2 = NULL;
	}
	
	public getVar1(){
		return $variable1;  
	}

	public getVar2(){
		return $variable2;  
	}

 }	
