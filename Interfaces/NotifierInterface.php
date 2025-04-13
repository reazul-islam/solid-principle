<?php

// ISP (Interface Segregation Principle): A specific, minimal interface
interface NotifierInterface {
    public function send($message);
  }