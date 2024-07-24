<?php

namespace App;

class Application
{
    public function start() {
        $router = new Router();
    
        $router->create("GET", "/", function () {
          http_response_code(200);
          return;
        });    
    
        $router->create("GET", "/ola", function () {
          http_response_code(200);
          echo json_encode(["ola" => "kaua"]);
          return;
        });
    
        $router->init();
      }
}