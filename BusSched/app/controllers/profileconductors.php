<?php

class ProfileConductors
{

    use Controller;

    public function index()
    {
        $data = [];

        $conductor = new Conductor();
        $arr['username'] = $_SESSION['USER']->username;
        $row = $conductor->first($arr);

        // $this->view('profileconductor', [$row]);
        $this->view( 'profileconductor',['username' => [$row]]);
    }
}
