<?php

namespace controllers;

use services\AdvertisementService;
use services\UserService;

require_once 'services/AdvertisementService.php';
require_once 'services/UserService.php';

class AdvertisementController {
    private $advertisementService;

    public function __construct() {
        $this->advertisementService = new AdvertisementService();
        $this->userService = new UserService();
    }
    public function index() {
        $advertisements = $this->advertisementService->getAdvertisements();
        $users = $this->userService->getAllUsers();
        foreach ($advertisements as $advertisement) {
            foreach ($users as $user) {
                if($user->getId() == $advertisement->getUserid()) {
                    $advertisement->setUserName($user->getName());
                }
            }
        }
        include 'views/advertisements.php';
    }
}