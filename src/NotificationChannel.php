<?php

use Notification\NotificationService;

/**
 * Class NotificationChannel
 */
class NotificationChannel implements NotificationChannelInterface
{

    /**
     * NotificationChannel constructor.
     * @param $notification_type
     *      Type of notification channel.
     * @param $service
     *     Service used to send notification.
     */
    public function __construct($notification_type, $service)
    {


    }

    /**
     * Send Notification
     * @param $data
     *   Data pertaining to notification
     *
     */
    protected function sendNotification($data)
    {

    }

    protected function deleteNotification($id)
    {

    }

    public function createNotification()
    {

    }

    public function updateNotification()
    {

    }

    public function listNotifications()
    {

    }

}





}


