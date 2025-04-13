# SOLID Principles in PHP – E-learning Project Example

This project demonstrates the **SOLID principles of Object-Oriented Programming** using a simple e-learning system built in raw PHP. These principles help create software that is modular, maintainable, and scalable.

---

## ✅ S – Single Responsibility Principle (SRP)

> A class should have one and only one reason to change.

**Applied in:**
- `CourseUploader`: Handles only uploading logic.
- `CourseNotification`: Responsible for sending notifications only.
- `EmailNotifier`, `SMSNotifier`: Each handles one task (sending email or SMS).

✅ This ensures that each class is focused and easy to test or change independently.

---

## ✅ O – Open/Closed Principle (OCP)

> Software entities should be open for extension but closed for modification.

**Applied in:**
- Add new types of `NotifierInterface` (e.g., `SlackNotifier`, `PushNotifier`) without changing existing code.
- Add new `LessonInterface` types like `QuizLesson`, `AssignmentLesson`.

✅ You can extend functionality without modifying tested code.

---

## ✅ L – Liskov Substitution Principle (LSP)

> Subtypes must be substitutable for their base types.

**Applied in:**
- `VideoLesson` and `TextLesson` extend `Lesson` and override `getContentLink()` correctly.
- Wherever `Lesson` is expected, child classes work without breaking logic.

✅ Guarantees that inherited classes behave as expected.

---

## ✅ I – Interface Segregation Principle (ISP)

> Clients should not be forced to depend on methods they do not use.

**Applied in:**
- `NotifierInterface` has only one method: `send($message)`.
- `LessonInterface` has only one method: `getContentLink()`.

✅ Keeps interfaces clean and focused on specific contracts.

---

## ✅ D – Dependency Inversion Principle (DIP)

> High-level modules should not depend on low-level modules. Both should depend on abstractions.

**Applied in:**
- `CourseNotification` depends on `NotifierInterface`, not specific implementations.
- Easily switch between `EmailNotifier`, `SMSNotifier`, etc.

✅ Improves flexibility and testability.

---

## 💡 Example Use Case (Summary)

```php
// Upload a course
$uploader = new CourseUploader();
$uploader->uploadCourse("OOP in PHP");

// Notify users
$notifier = new CourseNotification(new EmailNotifier());
$notifier->notify("New course uploaded");

// Access content
$lesson = new VideoLesson();
echo $lesson->getContentLink();
