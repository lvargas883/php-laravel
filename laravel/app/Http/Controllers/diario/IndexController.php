<?php

namespace App\Http\Controllers\diario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //index
    
    public function index()
    {

    	if( request()->has('empty') )
    	{
    		$a_param = [];
    	}
    	else
    	{

	    	$a_param = [
	    		'0'=>
	    			[
	    				'name'=>'Nombre Diario 1'
	    			],
	    		'1'=>
	    			[
	    				'name'=>'Nombre Diario 2'
	    			]
	    	];

    	}

    	$s_title = 'RSN Computacion - Diario';

    	/*return view('diario/index',[
    		'param'=> $param,
    		'title'=> $title
    	]);*/

    	return view('diario/index', compact('a_param','s_title') );
    } 
}
