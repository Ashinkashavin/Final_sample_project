<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\User;


class VehicleController extends Controller
{

        public function store(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            
        ]);

        // Save data to the database
        Vehicle::create($validatedData);

        // Redirect with success message
        return redirect()->back()->with('success', 'Car details saved successfully!');
    }
    
        // Delete a vehicle by ID
        public function destroy($id)
        {
            // Find the vehicle and delete it
            $vehicle = Vehicle::find($id);
            if ($vehicle) {
                $vehicle->delete();
                return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
            }
            return redirect()->route('vehicles.index')->with('error', 'Vehicle not found.');
        }
}
