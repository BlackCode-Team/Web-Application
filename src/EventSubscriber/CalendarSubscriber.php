<?php

namespace App\EventSubscriber;

use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
        $filters = $calendar->getFilters();

        // You may want to make a custom query from your database to fill the calendar

        $calendar->addEvent(new Event(
            'Reduction 5%',
            new \DateTime('Monday this week'),
            new \DateTime('Wednesdays this week')
        ));

        // If the end date is null or not defined, it creates a all day event
        $calendar->addEvent(new Event(
            'Réduction 10%',
            new \DateTime('Friday this week')
        ));

        $calendar->addEvent(new Event(
            'happy hour',
            new \DateTime('Sunday this week')
        ));

        $calendar->addEvent(new Event(
            '-10% sur les trotinettes',
            new \DateTime('2023-05-15'),
            new \DateTime('2023-05-17')
        ));

        $calendar->addEvent(new Event(
            '-50% sur la deuxième location',
            new \DateTime('2023-05-20'),
            new \DateTime('2023-05-23')
        ));

        $calendar->addEvent(new Event(
            '-5% sur les voitures tesla',
            new \DateTime('2023-05-10'),
            new \DateTime('2023-05-10')
        ));



    }
}