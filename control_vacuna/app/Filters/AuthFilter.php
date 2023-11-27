<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Verificar si el usuario ha iniciado sesión
        if (!$session->has('usuario')) {
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }

        // Verificar si el usuario tiene el tipo de usuario "administrador"
        if ($session->get('type') != 'administtrador') {
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }

        if (!isLoggedIn()) {
            return redirect()->to('/');
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Lógica opcional para realizar acciones después de que se haya procesado la solicitud
    }
}