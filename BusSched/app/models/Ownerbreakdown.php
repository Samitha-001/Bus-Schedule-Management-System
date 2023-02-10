<?php

class OwnerBreakdown extends Model
{
    protected $table = 'ownerbreakdown';

    // editable columns
    protected $allowedColumns = [
        'id',
        'bus_no',
        'description',
        // 'date',
        // 'time',
        'time_to_repair'
    ];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['bus_no'])) {
            $this->errors['bus_no'] = "Bus number is required";
        } else
        if (empty($data['description'])) {
            $this->errors['description'] = "Enter Description";
        } else
        if (empty($data['time_to_repair'])) {
            $this->errors['time_to_repair'] = "Enter estimate time to repair";
        }


        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    public function getBreakdowns()
    {
        return $this->findAll();
    }
}