<?php

// LSP: Another substitute for `Lesson`
class TextLesson extends Lesson {
    public function getContentLink() {
      return "http://elearning.com/text-lesson";
    }
  }