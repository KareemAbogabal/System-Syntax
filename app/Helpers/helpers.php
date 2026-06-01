<?php
  function notify(string $type, string $message): void {
    session()->flash('notification', [
      'type' => $type,
      'message' => $message,
    ]);
  };
?>