# Time-Tracker
Measure time of process

## How to use
```ruby
$tt = new TimeTracker(); // Measuring of time starts here
// do some processes
$tt->getTime(); // Return: 2h 32m 26s 6538ms
$tt->reset(); // Measuring is reset to 0
// do something
$tt->getTime(); // Return: 2s 475ms
```
