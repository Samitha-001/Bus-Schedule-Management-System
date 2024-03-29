<?php

class Scheduler extends Model
{
    protected $table = 'scheduler';

    // editable columns
    protected $allowedColumns = [
        'username',
        'name',
        'phone',
        'address'
    ];

    public function schedulerInfo()
    {
        return $this->findAll();
    }

    public function updateScheduler($id, $data)
    {
        $this->update($id, $data, 'username');
    }

    
}