<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    // Read all:

    public function readall() {

        $people = People::all();

        return response()->json([
            'People: ' => $people,
        ]);
    }

    // Create:

    public function create(Request $request)    {

        $people = new People();
        $people->phone = $request->phone;
        $people->street = $request->street;
        $people->name = $request->name;
        $people->surname = $request->surname;
        $people->city = $request->city;

        $people->save();

            return response()->json(['Person created.']);
        }
    
    // Read:

    public function read(string $id)    {
        $people = People::find($id);
        if ($people)    {
            return response()->json([
                'Message: ' => 'Person found.',
                'Person: ' => $people
            ], 200);
        }
        else    {
            return response([
                'Message: ' => 'We could not find the person.',
            ], 500);
        }
    }

    // Update:

    public function update(Request $request, string $id)    {
        $people = People::find($id);

        if($people)    {
            $input = $request->validate([
                'phone' => ['required'],
                'street' => ['required'],
                'name' => ['required'],
                'surname' => ['required'],
                'city' => ['required'],
            ]);
            $people->phone = $input['phone'];
            $people->street = $input['street'];
            $people->name = $input['name'];
            $people->surname = $input['surname'];
            $people->city = $input['city'];

            if($people->save()) {
                return response()->json([
                    'Message: ' => 'Person updated with success.',
                    'Person: ' => $people
                ], 200);
            }
            else    {
                return response([
                    'Message: ' => 'We could not update the person.',
                ], 500);
            }
        }
    }

    //Delete: 

    public function delete(string $id) {
            $people = People::find($id);

           
                 $people->delete();
                return response()->json([
                    'Message: ' => 'Person deleted with success.',
                ], 200);
        
    }

}
