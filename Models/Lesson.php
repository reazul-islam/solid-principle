<?php

// LSP (Liskov Substitution): Parent class
// ISP: Implements a small interface
class Lesson implements LessonInterface {
    public function getContentLink() {
      return "http://elearning.com/lesson";
    }
  }