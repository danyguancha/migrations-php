<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function testDB(){
        Try{
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                echo "Conexion a la base de datos exitosa: " . DB::connection()->getDatabaseName();
            }else{
                echo "No se pudo conectar a la base de datos.";
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
