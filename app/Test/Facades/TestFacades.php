<?php
    namespace App\Test\Facades;
    use illuminate\Support\Facades\Facade;
    class TestFacades extends Facade{
        public static function getFacadeAccessor(){
            // return name needed for bind name 
            return 'bind_call_name';
        }
    }