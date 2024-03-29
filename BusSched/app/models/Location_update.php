<?php

class Location_update extends Model
{
    protected $table = 'location_update';

    // editable columns
    protected $allowedColumns = [
        'id',
        'username',
        'user_role',
        'ticket',
        'halt',
        'tripID',
        'timestamp'
    ];

    // function to add new location update record
    public function addLocationUpdate($data, $user)
    {
        // if the location was updated by a passenger
        if ($user == 'passenger') {
            // win loyalty point for updating location
            $point = new Point();
            $point->addPoints(1);
        }
        // calls update trip location function, conditions are checked there
        if ($user == 'conductor') {
            $this->updateTripLocation($data['tripID'], $data['halt']);
        }

        return $this->insert($data);
    }

    // function to get updates relevant to each trip
    public function getUpdates($trip, $location="", $role="passenger")
    {
        $data['tripID'] = $trip;
        $data['user_role'] = $role;
        if ($location != "") {$data['halt'] = $location;}
        return $this->where($data);
    }

    // update location on trip
    public function updateTripLocation($tripID, $location)
    {
        $trips = new Trip();
        $trips->updateTripLocation($tripID, $location);
    }

    // get passengers for a trip and given halt
    public function getPassengers($tripID, $halt)
    {
        $data['tripID'] = $tripID;
        $data['halt'] = $halt;
        $data['user_role'] = 'passenger';
        return $this->where($data);
    }

    /**
     * Description - Get the last location updates for a given passenger and trip
     * @param $tripID - trip ID
     * @param $username -username
     * @return mixed - last location updates
     */
    public function getLastLocationUpdates($tripID, $username){
        $data['tripID'] = $tripID;
        $data['username'] = $username;
        $data['user_role'] = 'passenger';
        return $this->where($data,'timestamp');
    }


}