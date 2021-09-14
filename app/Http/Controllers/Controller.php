<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected function file_upload($filenamext,$pathxt)
    {
        /*
         *@param $request global variable
         * return filename
         * */
        global $request;
        if($request->hasFile($filenamext))
        {
            $filenameWithExt = $request->file($filenamext)->getClientOriginalName();
            //get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get Extsion();
            $extension = $request->file($filenamext)->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file($filenamext)->storeAs($pathxt, $fileNameToStore);
        }else
        {
            $fileNameToStore = 'noimage.jpg';
        }
        return  $fileNameToStore;
    }

    protected function getUserRole(){
        return auth()->user()->role_id;
    }
}
