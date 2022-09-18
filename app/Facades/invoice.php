<?php
	namespace App\facades;
	class Invoice{
		public function companyName(){
			return 'ABC Pvt Ltd';
		}

		public function current_date(){
			return \Carbon\Carbon::now()->format('Y-m-d');
		}

	}

?>