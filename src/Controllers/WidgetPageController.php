<?php
/**
 *  This file is part of the Xpressengine package.
 *
 * PHP version 7
 *
 * @category
 *
 * @author      XE Team (developers) <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 *
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Plugins\WidgetPage\Controllers;

use App\Http\Controllers\Controller;
use XePresenter;
use Xpressengine\Plugins\WidgetPage\Plugin;
use Xpressengine\Routing\InstanceConfig;
use Xpressengine\Widget\WidgetBoxHandler;

/**
 * @category    WidgetPage
 *
 * @author      XE Team (developers) <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 *
 * @link        https://xpressengine.io
 */
class WidgetPageController extends Controller
{
    /**
     * @var string page instance id
     */
    protected $pageId;

    public function __construct()
    {
        $instanceConfig = InstanceConfig::instance();
        $this->pageId = $instanceConfig->getInstanceId();
    }

    public function show(WidgetBoxHandler $handler)
    {
        $siteTitle = $this->getSiteTitle();
        \XeFrontend::title($siteTitle);

        $widgetboxPrefix = 'widgetpage-';
        $id = $widgetboxPrefix.$this->pageId;

        $widgetbox = $handler->find($id);

        return XePresenter::make(Plugin::view('views.show'), compact('widgetbox'));
    }

    private function getSiteTitle()
    {
        $siteTitle = \XeFrontend::output('title');

        $instanceConfig = InstanceConfig::instance();
        $menuItem = $instanceConfig->getMenuItem();

        $title = xe_trans($menuItem['title']).' - '.xe_trans($siteTitle);
        $title = strip_tags(html_entity_decode($title));

        return $title;
    }
}
