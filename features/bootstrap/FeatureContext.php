<?php

use Behat\MinkExtension\Context\MinkContext,
    Behat\Mink\Exception\ElementNotFoundException,
    Behat\Mink\Exception\ElementHtmlException,
    Behat\Behat\Event\StepEvent;

class FeatureContext extends MinkContext
{
    /**
     * After state hook to write failure back to the page, which alerts phantom to a 
     * failure. See: http://shaneauckland.co.uk/2012/11/capturing-screenshots-with-mink-sahi-and-phantomjs/
     * 
     * @AfterStep
     */
    public function afterStep(StepEvent $event)
    {
        $context = $event->getContext();

        if ($context->getMinkParameter('browser_name') == 'phantomjs' && $event->getResult() == StepEvent::FAILED) {
            $javascript = 'window.callPhantom({value:"fail"})';
            $context->getSession()->executeScript($javascript);
        }
    }


}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
