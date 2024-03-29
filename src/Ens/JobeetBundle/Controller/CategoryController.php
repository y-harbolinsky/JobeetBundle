<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/30/14
 * Time: 2:46 PM
 */

namespace Ens\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\JobeetBundle\Entity\Category;

class CategoryController extends Controller{

    public function showAction($slug, $page) {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('EnsJobeetBundle:Category')->findOneBySlug($slug);

        if(!$category) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }
        /*
        $category->setActiveJobs($em->getRepository('EnsJobeetBundle:Job')->getActiveJobs($category->getId()));

        return $this->render('EnsJobeetBundle:Category:show.html.twig', array(
            'category' => $category
        ));
        */

        $total_jobs = $em->getRepository('EnsJobeetBundle:Job')->countActiveJobs($category->getId());
        $jobs_per_page = $this->container->getParameter('max_jobs_on_category');
        $last_page = ceil($total_jobs / $jobs_per_page);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
        $category->setActiveJobs($em->getRepository('EnsJobeetBundle:Job')->getActiveJobs($category->getId(), $jobs_per_page, ($page - 1) * $jobs_per_page));

        $format = $this->getRequest()->getRequestFormat();

        return $this->render('EnsJobeetBundle:Category:show.'.$format.'.twig', array(
            'category' => $category,
            'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_jobs' => $total_jobs,
            'feedId' => sha1($this->get('router')->generate('EnsJobeetBundle_category', array('slug' => $category->getSlug(), '_format' => 'atom'), true)),
        ));
    }
} 