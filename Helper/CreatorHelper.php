<?php

namespace Kanboard\Plugin\CreatorEdit\Helper;

use Kanboard\Helper\TaskHelper;
use Kanboard\Core\Base;

/**
 * Creator Helper
 *
 * @package helper
 * @author  Craig Crosy
 */
class CreatorHelper extends TaskHelper
{
    public function renderCreatorField(array $users, array $values, array $errors = array(), array $attributes = array())
    {
        if (isset($values['project_id']) && ! $this->helper->projectRole->canChangeAssignee($values)) {
            return '';
        }

        $attributes = array_merge(array('tabindex="5"'), $attributes);

        $html = $this->helper->form->label(t('Creator'), 'creator_id');
        $html .= $this->helper->form->select('creator_id', $users, $values, $errors, $attributes);
        $html .= '&nbsp;';

        return $html;
    }
    
}
