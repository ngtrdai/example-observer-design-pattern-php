# Observer pattern example in PHP
This is a simple example of the observer pattern in PHP.

## Description
The observer pattern is a software design pattern in which an object, called the subject, maintains a list of its dependents, called observers, and notifies them automatically of any state changes, usually by calling one of their methods.

## UML diagram
```
comming soon...
```

## Installation and running
1. Clone the repository
2. Run `composer install`
3. Run `php src/main.php`

## Usage
The example is a simple simulation of a video notification system. When a video is edited, the system notifies the users with a message by email, SMS,...

### Example
```php
$videoData = new VideoData(); // Init the subject
$phoneNotifier = new PhoneNotifier($videoData); // Init the notifier (observer)
new EmailNotifier($videoData); // Can be added more notifiers (observers) | Discarded in this example

$videoData->setTitle('Observer pattern'); // When the subject is changed, the observers are notified

$videoData->detachObserver($phoneNotifier); // Detach a specific observer

$videoData->setDescription('New video description'); // When the subject is changed, the observers are notified
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
