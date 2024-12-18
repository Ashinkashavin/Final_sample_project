<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;  // Import the Vehicle model
use Illuminate\Http\Request;
use App\Models\User;

class TemplateController extends Controller
{
    // Method for home page (first page displayed)and display total users and vehicles
    public function index()
    {

        // Get the total number of users
        $totalUsers = User::count();
        
        // Get the total number of vehicles
        $totalVehicles = Vehicle::count();
        
        // Return the data to a view (assuming the view is named 'vehicles.index')
        return view('Frontend.master', [
            'totalUsers' => $totalUsers,
            'totalVehicles' => $totalVehicles
        ]);
    }

    // Method for vehicle data table page
    public function showVehicles()
    {
        // Get all vehicles from the database
        $vehicles = Vehicle::all();  // Fetch the vehicles

        // Pass the vehicles data to the view
        return view('Frontend.table', compact('vehicles'));  // Make sure to pass it here
    }
}

