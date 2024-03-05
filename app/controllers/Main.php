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
     * @link https://gabrielsilva.dev.br/glowie
     */
    class Main extends Controller{

        /**
         * Index action.
         */
        public function index(){
            $this->response->setBody('Glowie is awesome!');
        }

    }

?>