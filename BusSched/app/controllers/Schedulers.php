<?php

class Schedulers
{

    use Controller;

    public function index()
    {
        $data = [];

        $scheduler = new Scheduler();
        $arr['username'] = $_SESSION['USER']->username;
        $row = $scheduler->first($arr);

        $this->view('schedulerhome', [$row]);
    }
}