# Observer pattern example in PHP
This is a simple example of the observer pattern in PHP.

## Description
The observer pattern is a software design pattern in which an object, called the subject, maintains a list of its dependents, called observers, and notifies them automatically of any state changes, usually by calling one of their methods.

## UML diagram
```mermaid
classDiagram
    VideoData --|> Subject : +extends
    Subject -- Observer : +observers
    VideoData -- EmailNotifier : +subject
    VideoData -- PhoneNotifier : +subject
    EmailNotifier ..|> Observer
    PhoneNotifier ..|> Observer
    VideoData : -String title
    VideoData : -String description
    VideoData : -String fileName
    VideoData : +setTitle(String title)
    VideoData : +getTitle() string
    VideoData : +setDescription(String description)
    VideoData : +getDescription() string
    VideoData : +setFileName(String fileName)
    VideoData : +getFileName() string
    VideoData : +videoDataChanged() void

    class Subject {
        -List~Observer~ Observer
        +attachObserver()
        +detachObserver()
        +notifiObserver()
    }

    class Observer {
        #Subject subject
        +notify(Subject subject, object object)
    }

    class EmailNotifier {
        -Subject subject
        +notify(Subject subject, Object object)
    }

    class PhoneNotifier {
        -Subject subject
        +notify(Subject subject, Object object)
    }
```

## Installation and running
1. Clone the repository
2. Run `composer install`
3. Run `php src/main.php`

## Usage
The example is a simple simulation of a video notification system. When a video is edited, the system notifies the users with a message by email, SMS,...

### Example
```php
// Init the subject
$videoData = new VideoData();

// Init the notifier (observer)
$phoneNotifier = new PhoneNotifier($videoData);

// Can be added more notifiers (observers)
new EmailNotifier($videoData); // Discarded in this example

// When the subject is changed, the observers are notified
$videoData->setTitle('Observer pattern');

// Detach a specific observer
$videoData->detachObserver($phoneNotifier);

// When the subject is changed, the observers are notified
$videoData->setDescription('New video description');
```

### Output
```
Notify all subscribers by phone about the new video: 
                Observer pattern 
Notify all subscribers by email about the new video: 
                Observer pattern 
Notify all subscribers by email about the new video: 
                Observer pattern 
                New video description
```
