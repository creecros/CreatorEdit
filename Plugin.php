<?php

namespace Kanboard\Plugin\CreatorEdit;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
  public function initialize()
  {
    $this->helper->register('creatorHelper', '\Kanboard\Plugin\CreatorEdit\Helper\CreatorHelper');
    $this->template->hook->attach('template:task:form:second-column', 'CreatorEdit:task/creator');

  }
  public function getPluginName()
  {
    return 'CreatorEdit';
  }
  public function getPluginAuthor()
  {
    return 'Craig Crosby';
  }
  public function getPluginVersion()
  {
    return '1.0.0';
  }
  
  public function getPluginDescription()
  {
    return 'Ability to edit Task Creator';
  }
  public function getPluginHomepage()
  {
    return 'https://github.com/creecros/CreatorEdit';
  }
}
