<?php
namespace Plugin\CustomEntry;

use Eccube\Event\EventArgs;

class Event
{
    public function onFormFrontEntryInit(EventArgs $event)
    {
        $builder = $event->getArgument('builder');
        $builder->add('tel', 'tel', array(
            'required' => false
        ));
    }

    public function onFormFrontMypageChangeInit(EventArgs $event)
    {
        $builder = $event->getArgument('builder');
        $builder->add('tel', 'tel', array(
            'required' => false
        ));
    }

    public function onFormAdminCustomerEditInit(EventArgs $event)
    {
        $builder = $event->getArgument('builder');
        $builder->add('tel', 'tel', array(
            'required' => false
        ));
    }

}