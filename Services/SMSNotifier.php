<?php

// SRP: Only handles sending SMS
// DIP: Implements same interface
class SMSNotifier implements NotifierInterface {
    public function send($message) {
      echo "Sending SMS: $message\n";
    }
  }