<?php

// SRP: Only handles course notifications
// DIP: Depends on abstraction (NotifierInterface), not concrete classes
class CourseNotification {
    protected $notifier;
  
    public function __construct(NotifierInterface $notifier) {
      $this->notifier = $notifier;
    }
  
    public function notify($message) {
      $this->notifier->send($message);
    }
  }