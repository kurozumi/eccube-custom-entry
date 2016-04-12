<?php
namespace Plugin\CustomEntry;

use Eccube\Event\EventArgs;

class Event
{
    /**
     * @param EventArgs $event
     */
    public function onFormInitializeEntry(EventArgs $event)
    {
        $builder = $event->getArgument('builder');
        $builder->add('tel', 'tel', array(
            'required' => false
        ));
    }

    public function onAdminCustomerEditInit(EventArgs $event)
    {
        $builder = $event->getArgument('builder');
        $builder->add('tel', 'tel', array(
            'required' => false
        ));
    }

}