<?php

namespace Glowie\Controllers;

use Glowie\Core\Http\Controller;

/**
 * Main controller for Glowie application.
 * @category Controller
 * @package glowieframework/glowie
 * @author Glowie
 * @copyright Copyright (c) Glowie
 * @license MIT
 * @link https://glowie.gabrielsilva.dev.br
 */
class Main extends Controller
{

    /**
     * Index action.
     */
    public function index()
    {
        return response()->setJson([
            'message' => 'Glowie is awesome!'
        ]);
    }
}
