<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Map extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {

        $data = array_merge($this->data, [
            'Alat'        => $this->alatModel->getDevices()
        ]);
        return view('terrafert/map', $data);
    }

    public function getDevices()
    {

        // Call a method to fetch "Alat" data filtered by the selected month
        $filteredHistory = $this->alatModel->getDevices();

        // Send the filtered data as JSON response
        return json_encode($filteredHistory);
    }
}
