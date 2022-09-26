<?php
	namespace App\Facades;
	class TestFacades{
		public function company_name(){
			return 'ABC Pvt Ltd';
		}

		public function current_date(){
			return \Carbon\Carbon::now()->format('Y-m-d');
		}

	}

?>