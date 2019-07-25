<?php
/**
 *  This file is part of the Xpressengine package.
 *
 * PHP version 7
 *
 * @category
 * @package     Xpressengine\
 * @author      XE Team (developers) <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
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
 * @package     Xpressengine\Plugins\WidgetPage\Controllers
 * @author      XE Team (developers) <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        https://xpressengine.io
 */
class WidgetPageController extends Controller
{
    /**
     * @var string $pageId page instance id
     */
    protected $pageId;

    public function __construct()
    {
        $instanceConfig = InstanceConfig::instance();
        $this->pageId = $instanceConfig->getInstanceId();
    }

    public function show(WidgetBoxHandler $handler)
    {
        $widgetboxPrefix = 'widgetpage-';
        $id = $widgetboxPrefix.$this->pageId;

        $widgetbox = $handler->find($id);
        return XePresenter::make(Plugin::view('views.show'), compact('widgetbox'));
    }
}
