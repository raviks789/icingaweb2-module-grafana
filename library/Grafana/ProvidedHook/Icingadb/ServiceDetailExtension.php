<?php

namespace Icinga\Module\Grafana\ProvidedHook\Icingadb;

use Icinga\Application\Icinga;

use Icinga\Module\Graphite\Util\InternalProcessTracker as IPT;
use Icinga\Module\Graphite\Web\Controller\TimeRangePickerTrait;
use Icinga\Module\Graphite\Web\Widget\Graphs;
use Icinga\Module\Icingadb\Hook\ServiceDetailExtensionHook;
use Icinga\Module\Icingadb\Model\Service;
use ipl\Html\Html;
use ipl\Html\HtmlString;
use ipl\Html\ValidHtml;
use ipl\Orm\Model;

class ServiceDetailExtension extends ServiceDetailExtensionHook
{
    use IcingaDbGrapher;

    public function getHtmlForObject(Service $service): ValidHtml
    {
        $this->object = $service;
        return $this->getPreviewHtml($service);
    }
}
