<?php
	namespace App\facades;
	use Illuminate\Support\Facades\Facade;
	class InvoiceFacade extends Facade{
		protected static function getFacadeAccessor(){
			return 'Invoice';
		}
	}

?>