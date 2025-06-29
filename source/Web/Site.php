<?php

namespace Source\Web;

class Site extends Controller
{
    public function __construct()
    {
        parent::__construct("web");
    }

    public function home(): void
    {
        //echo "Home Page...";
        echo $this->view->render("home",[]);
    }

    public function about(): void
    {
        echo $this->view->render("about", []);
    }

    public function contact(): void
    {
        echo "Contact Us";
    }

    public function location(): void
    {
        echo "Our Location";
    }

    public function cart(): void
    {
        echo "Shopping Cart";
    }

    public function services(): void
    {
        echo "Our Services";
    }

    public function faqs(): void
    {
        echo "Frequently Asked Questions";
    }

    public function login(): void
    {
        echo $this->view->render("login",[]);
    }

    public function register (array$data): void
    {
        echo $this->view->render("register", []);
    }

    public function error (array $data): void
    {
        echo "Error {$data["errcode"]}...";
    }

}