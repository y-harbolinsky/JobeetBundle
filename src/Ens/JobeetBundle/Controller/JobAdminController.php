<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/5/14
 * Time: 1:44 PM
 */

namespace Ens\JobeetBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery as ProxyQueryIntergace;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class JobAdminController extends Controller
{
    public function batchActionExtend(ProxyQueryIntergace $selectedModelQuery) {
        if($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
            throw new AccessDeniedException();
        }

        $modelManager = $this->admin->getModelManager();

        $selectedModels = $selectedModelQuery->execute();

        try {
            foreach($selectedModels as $selectedModel) {
                $selectedModel->extend();
                $modelManager->update($selectedModel);
            }
        } catch(\Exception $e) {
                $this->get('session')->getFlashBag()->add('sonata_flash_error', $e->getMessage());
            return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
        }

        $this->get('session')->getFlashBag()->add('sonata_flash_success', sprintf('The selected jobs validity has been extended until %s.', date('m/d/Y', time() + 86400 * 30)));

        return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
    }

    public function getBatchActions() {
        $actions = parent::getBatchActions();

        if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')) {
            $actions['extend'] = array(
                'label'         => 'Extend',
                'ask_confirmation' => true
            );

            $actions['deleteNeverActivated'] = array(
                'label'             => 'Delete never activated jobs',
                'ask_confirmation'  => true
            );
        }

    }

    public function batchActionDeleteNeverActivatedIsRelevant() {
        return true;
    }

    public function batchActionDeleteNeverActivated() {
        if($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
            throw new AccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $nb = $em->getRepository('EnsJobeetBundle:Job')->cleanup(60);

        if($nb) {
            $this->get('session')->getFlashBag()->add('sonata_flash_success', sprintf('%d never activated jobs have been deleted successfully.', $nb));
        } else {
            $this->get('session')->getFlashBag()->add('sonata_flash_info', 'No job to delete.');
        }
        return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
    }
} 