<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::where('user_id', Auth::user()->id)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('notification', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = User::where('id', '!=', Auth::user()->id)
        //          ->where('is_admin', false)
        //          ->get();

        // //$notifications = Notification::where('id', Auth::user()->id)->get();



        // return view('notifications.create', compact('tasks','users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'user_id' => 'required|numeric',
        //     'task_id' => 'required|numeric'
        // ]);

        // //$datavalidate['user_id'] = Auth::id();

        // Notification::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
