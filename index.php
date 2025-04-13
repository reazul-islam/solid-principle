<?php

require_once 'Interfaces/NotifierInterface.php';
require_once 'Interfaces/LessonInterface.php';

require_once 'Services/EmailNotifier.php';
require_once 'Services/SMSNotifier.php';

require_once 'Models/Lesson.php';
require_once 'Models/VideoLesson.php';
require_once 'Models/TextLesson.php';

require_once 'Controllers/CourseUploader.php';
require_once 'Controllers/CourseNotification.php';

// SRP: CourseUploader only uploads courses
$uploader = new CourseUploader();
$uploader->uploadCourse("OOP with PHP");

// DIP + OCP: Easily swap notifiers without modifying CourseNotification
$emailNotifier = new CourseNotification(new EmailNotifier());
$emailNotifier->notify("New course uploaded!");

$smsNotifier = new CourseNotification(new SMSNotifier());
$smsNotifier->notify("SMS: Course is now live!");

// LSP: These lesson objects can safely replace Lesson
$video = new VideoLesson();
$text = new TextLesson();

echo "Video Lesson Link: " . $video->getContentLink() . "\n";
echo "Text Lesson Link: " . $text->getContentLink() . "\n";
?>