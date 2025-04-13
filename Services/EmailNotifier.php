<?php

// SRP (Single Responsibility): Only handles sending email
// DIP (Dependency Inversion): Implements interface, not tied to any concrete controller
class EmailNotifier implements NotifierInterface {
  public function send($message) {
    echo "Sending Email: $message\n";
  }
}