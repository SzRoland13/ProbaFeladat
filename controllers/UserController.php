<?php

namespace controllers;

use services\UserService;

require_once 'services/UserService.php';

class UserController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function index() {
        $users = $this->userService->getAllUsers();
        include 'views/users.php';
        
    }
}