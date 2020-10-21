<?php if ($_SESSION['user']['role'] == 'app-admin'): ?>
    <?= $this->helper->creatorHelper->renderCreatorField($this->model->projectUserRoleModel->getAssignableUsersList($values['project_id']), $values, $errors) ?>
<?php endif ?>