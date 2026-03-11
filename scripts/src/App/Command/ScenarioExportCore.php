<?php
namespace Console\App\Command;
 
class ScenarioExportCore extends AbstractCommand
{
    /** @var string */
    protected $projectName = 'Core';

    /** @var string */
    protected $name = 'scenario:export:core';

    /** @var string */
    protected $description = 'Scenario QA : Export Core';

    /** @var string */
    protected $statsFile = 'stats/core.md';

    protected $pageWeight = 1;
}
