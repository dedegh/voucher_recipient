<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * Description of RecipientsController
 *
 * @author emodatt08
 */
class RecipientsController extends Controller {
    
    
/**
 *Get all resources
 *
 * @return Illuminate\Http\JsonResponse
 */
    public function index(Request $request){
        $recipients = \App\Recipient::all();
        
        if($recipients){
             return response()->json([
            'responseCode'=>'200', 
            'responseMessage' => 'Recipients fetched successfully', 
            'data' => $recipients]);
        }else{
              return response()->json([
            'responseCode'=>'404', 
            'responseMessage' => 'Failed to fetch recipients', 
                 ]);
        }
       
    }
    /**
 * Get one resource
 *
 * @return Illuminate\Http\JsonResponse
 */
    
     public function getOne(Request $request, $id){
        $recipient = \App\Recipient::find($id);
        
        if($recipient){
             return response()->json([
            'responseCode'=>'200', 
            'responseMessage' => 'Recipient fetched successfully', 
            'data' => $recipient]);
        }else{
              return response()->json([
            'responseCode'=>'404', 
            'responseMessage' => 'Failed to fetch recipient', 
                 ]);
        }
       
    }
    
}
