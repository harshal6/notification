<?php

//use Pimple\Container;
//
//$container = new Container();

// Notification Types

$notification_type = 'email';

$service = 'send_grid';

$notification = new NotificationChannel($notification_type, $service);
$data = [
    'subject' => '',
    'message' => '',
    'recipient' => '',
    'sender' => ''
];
$notification->sendNotification($data);




// Notification Type would be e.g. Emails, SMS, Push

// The service we need to use e.g. Twilio , Sengrid based on notification type

// Prepare Interface for the Service and NotificationChannel

// Prepare NotificationEmail Class which will extend the NotificationChannel base class (and the base class will  implement the NotificationChannel interface )

// Prepare NotificationService Class which will have a service dependency on Notification Email



