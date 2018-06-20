<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\Eloquent\Model;
use App\Command;

class EdaResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commands = Command::paginate(10); //paginate posts to group of n.

        return view('EdaContent.displaycommands', ['commands' => $commands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EdaContent.addcommand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request)
        {
            $order = $request->get('command_order');
            $response = $request->get('command_response');
            $is_command = $request->get('is_command');

            //dd($order, $response, $is_command);
            $command = new Command;
            $command->command_order = $order;
            $command->command_response = $response;
            $command->is_command = $is_command;
            $command->save();

            return redirect('/commands');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $command = Command::where('id', $id)->first();
        return view('EdaContent.updatecommand')->with('command',$command);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request && $id)
        {
            $order = $request->get('command_order');
            $response = $request->get('command_response');
            $is_command = $request->get('is_command');

            $command = Command::where('id', $id)
                    ->update(['command_order' => $order, 'command_response' => $response, 'is_command' => $is_command]);

            if($command) {
                return redirect('/commands');
            }
            else {
                dd($post);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteCommand($id)
    {
        Command::destroy($id);
        return redirect('/commands');
    }
}
