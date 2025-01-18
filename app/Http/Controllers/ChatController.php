<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function index(){
        $users = User::where('id','!=',auth()->user()->id)->get();
        return view('dashboard', compact('users'));
    }

    public function checkChannel(Request $request){
        $recipientId = $request->recipientId;
        $loggedUserId = auth()->user()->id;

        $channel = Channel::where(function($query) use ($recipientId, $loggedUserId){
            $query->where('user1_id', $recipientId)
            ->where('user2_id', $loggedUserId);
        })->orWhere(function($query) use ($loggedUserId, $recipientId){
            $query->where('user1_id', $loggedUserId)
            ->where('user2_id', $recipientId);
        } )->first();

        if($channel){
            return response()->json([
                'channelExist' => true,
                'channelName' => $channel->name
            ]);
        }else{
            return response()->json([
                'channelExist' => false
            ]);
        }
    }

    public function createChannel(Request $request){
        $recipientId = $request->recipientId;
        $loggedUserId = auth()->user()->id;

        try{
            // Generate channel name
            $channelName = 'chat-'. min($recipientId, $loggedUserId). '-'. max($recipientId, $loggedUserId);

            // Create the channel
            $channel = Channel::create([
                'user1_id' => $loggedUserId,
                'user2_id' => $recipientId,
                'name' => $channelName
            ]);

            return response()->json([
                'success' => true,
                'channelName' => $channelName
            ]);
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
