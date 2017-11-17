<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RecipientTesting
 *
 * @author emodatt08
 */
class RecipientTest extends TestCase {
   /**
 * Get all recipients testing
 *
 * @return void
 */
    public function testGetRecipient(){
        
          $this->json('GET', '/api/v1/recipient', [])
             ->seeJson([
                 'responseCode'=>'200', 
                 'responseMessage' => 'Recipients fetched successfully'
             ]);
    }
    
    
/**
 * Get one recipient testing
 *
 * @return void
 */
     public function testOneRecipient(){
        
          $this->json('GET', '/api/v1/recipient/1', [])
             ->seeJson([
               'responseCode'=>'200', 
               'responseMessage' => 'Recipient fetched successfully',  
             ]);
    }
}
