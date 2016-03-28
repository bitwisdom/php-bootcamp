<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$operation = 'delete';

switch ($operation) {
    case 'login':
        print "You have logged in successfully.";
        break;
    
    case 'logout':
        print "You have logged out. Goodbye.";
        break;
    
    case 'create':
    case 'update':
        print "Your account has been updated.";
        break;
    
    default:
        print "Huh? What did you do?";
}