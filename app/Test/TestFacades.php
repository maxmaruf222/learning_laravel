<?php
    namespace App\Test;
    use Carbon\Carbon;
    class TestFacades{
        // this method will be call 
        public function current_date(){
            return Carbon::now();
        }
        public function max(){
            return 'Max Maruf';
        }
    }