<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Client;
use Session;

class ClientsController extends Controller
{
    //Admin - Client Details List
    public function admin_index()
    {
        $clients = Client::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $clients->where(function ($query) use ($s) {
                $query->where('name', 'LIKE', "%$s%");
            });
        }
        $clients = $clients->paginate(10);
        return view('clients.admin_index', ['clients' => $clients]);
    }

    //Admin - Client Details Add
    public function admin_add()
    {
        return view('clients.admin_add');
    }

    public function admin_store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', Rule::unique('clients')->where(function ($query) use ($request) {
                return $query->where('name', $request->name)->where('status', '<>', 'Trash');
            })],
        ]);
        $clients = new Client();
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->mobile = $request->mobile;
        $clients->country = $request->country;
        $clients->state = $request->state;
        $clients->district = $request->district;
        $clients->status = "Active";
        $clients->save();
        Session::flash('message', 'Client Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('clients.admin_index', []);
    }

    //Admin - Client Details View
    public function admin_view($id = null)
    {
        $client = Client::where('id', '=', $id)->first();
        return view('clients.admin_view', ['client' => $client]);
    }

    //Admin - Client Details Edit
    public function admin_edit($id = null)
    {
        $client = Client::where('id', '=', $id)->first();
        return view('clients.admin_edit', ['client' => $client]);
    }

    public function admin_update(Request $request, $id = null)
    {
        $validateData = $request->validate([
            'name' => ['required', Rule::unique('clients')->where(function ($query) use ($request, $id) {
                return $query->where('name', $request->name)->where('id', '<>', $id)->where('status', '<>', 'Trash');
            })],
        ]);
        $clients = Client::find($id);
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->mobile = $request->mobile;
        $clients->country = $request->country;
        $clients->state = $request->state;
        $clients->district = $request->district;
        $clients->status = "Active";
        $clients->save();
        Session::flash('message', 'Client Details Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('clients.admin_index', []);
    }

    //Admin - Client Details Delete
    public function admin_delete($id = null)
    {
        $data = Client::find($id);
        $data->status = "Trash";
        $data->update();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('clients.admin_index', []);
    }
}
