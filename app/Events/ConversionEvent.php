<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ConversionEvent implements ShouldBroadcastNow {
 use Dispatchable, InteractsWithSockets, SerializesModels;
 public $task;
 public function __construct($id) {
  $this->id = $id;
 }
 public function broadcastOn() {
  return new Channel('conversion');
 }
 public function broadcastAs() {
  return 'conversion';
 }
}