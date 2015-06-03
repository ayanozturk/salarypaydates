<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 * @package Application\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * Home page
     * @return ViewModel
     */
    public function indexAction()
    {
        $view = new ViewModel();
        $year = (int) $this->params()->fromRoute('year', date('Y') + 1);

        $expenseDates = $this->FetchExpenseDates($year);

        $view->setVariable('expenseDates', $expenseDates);
        return $view;
    }

}
