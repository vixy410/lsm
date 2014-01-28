<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('Component', 'Controller');

class ProtectorComponent extends Component{
    function startup( $controlller ){
        $this->Controller = $controlller;
        $this->loadModel('Protect');
        $this->Protect = new Protect();
    }
    
    function access( $action,$limit ){
        if( $this->Protect->amount(gethostbyname($_SERVER['REMOTE_ADDR']),$action < $limit) ){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    
    function fail(  ){
        
    }
}

