<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon ;
use App\Http\Requests\EventStoreRequest;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $events = Event::paginate(10);
        return view('events.index')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {

        //when not using event:request for store action, uderline would work

        // $request->validate([
        // 'name' => 'required|string|min:10|max:50',
        // 'max_attendees' => 'required|integer|digits_between:2,5',
        // 'description' => 'required|string'
        // ]);


        // $messages = [
        //     'required'=>'Please provide an event :attribute','max_attendees.required'=>'What is the maximum number of attendees allowed to attend your event?',
                
        //         'name.min'=>'Event names must consist of at least 10 characters',
                
        //         'name.max'=>'Event names cannot be longer than 50 characters',
                
        //         'max_attendees.digits_between'=>'We try to keep events cozy,consisting of between 2 and 5 attendees, including you.'
        // ];

        // Validator::make($request->input(), $rules. $messages)->validate();

        $event = Event::create([
            $request->input()
        ]);

    flash('Event created!')->success();
    return redirect()->route('events.show')->with('event',$event);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update(
            $request->input()
        );

        return redirect()
            ->route('events.show',$event)
            ->with('message', 'Event updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()
            ->route('events.index')
            ->with('message','The event has been deleted');
    }
}
