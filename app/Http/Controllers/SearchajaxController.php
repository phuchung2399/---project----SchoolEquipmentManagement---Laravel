<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class SearchajaxController extends Controller
{
    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = User::select('id')->where('username', 'LIKE', "%{$query}%")->get();
            $output = '<ul class="dropdown-menu" name="nameuser" style="display:block; position:relative" class="form-control">';
            foreach($data as $row)
            {
               $output .= '
               <li ><a herf="#">'.$row->id.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
       }
    }
}
