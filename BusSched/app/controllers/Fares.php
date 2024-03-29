<?php


class Fares
{

    use Controller;

    public function index()
    {
        $fare = new Fare();
        $fares = $fare->getFares();
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($fare->validate($_POST)) {
                $fare->insert($_POST);
                redirect('fares');
            }

            $data['errors'] = $fare->errors;
        }

        $this->view('fare', ['fares' => $fares]);
    }
}
