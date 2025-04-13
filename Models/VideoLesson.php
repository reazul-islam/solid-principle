<?php

// LSP: Can substitute for `Lesson` without breaking logic
class VideoLesson extends Lesson {
    public function getContentLink() {
      return "http://elearning.com/video-lesson";
    }
  }