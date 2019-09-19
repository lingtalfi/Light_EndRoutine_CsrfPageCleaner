<?php


namespace Ling\Light_EndRoutine_CsrfPageCleaner\Handler;


use Ling\CSRFTools\CSRFProtector;
use Ling\Light_EndRoutine\Handler\LightEndRoutineHandlerInterface;

/**
 * The LightEndRoutineCsrfPageCleanerHandler class.
 * We just implement the @page(csrf tool page cleaning system).
 */
class LightEndRoutineCsrfPageCleanerHandler implements LightEndRoutineHandlerInterface
{


    /**
     * @implementation
     */
    public function handle()
    {
        CSRFProtector::inst()->deletePageUnusedTokens();
    }

}