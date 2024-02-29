<?php 

namespace Framework;

class Router {
    private array $routes = [];

    public function add(string $path, array $params): void {
        $this->routes[] = [
            "path" => $path,
            "params" => $params
        ];
    }

    public function match(string $path): array|bool {
        $pattern = "#^/home/index$#";
        
        foreach($this->routes as $route) {
            if($route["path"] === $path) {

                return $route["params"];
            }
        }

        return false;
    }
}

?>