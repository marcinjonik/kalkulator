<?php 
require_once 'init.php';

switch ($action){
    default:
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute':
        include_once 'app/controllers/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
    case 'action1':
        echo "żegnam";
        break;
    case 'action2':
        echo "witam";
        break;
}