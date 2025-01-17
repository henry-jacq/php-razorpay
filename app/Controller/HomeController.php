<?php

namespace App\Controller;

use App\Core\View;
use App\Core\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller
{
    public function __construct(
        private readonly View $view,
    ) {
        parent::__construct($view);
    }

    public function index(Request $request, Response $response): Response
    {
        $args = [
            'title' => 'Payment Gateway'
        ];
        return $this->render($request, $response, 'home', $args);
    }

}
