<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/6/14
 * Time: 1:58 PM
 */

namespace Ens\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Ens\JobeetBundle\Entity\Affiliate;
use Ens\JobeetBundle\Entity\Job;
use Ens\JobeetBundle\Repository\AffiliateRepository;

class ApiController extends Controller
{
    public function listAction(Request $request, $token) {
        $em = $this->getDoctrine()->getManager();
        $jobs = array();
        $rep = $em->getRepository('EnsJobeetbundle:Affiliate');
        $affiliate = $rep->getForToken($token);

        if(!$affiliate) {
            throw $this->createNotFoundException('This affiliate account does not exist!');
        }

        $rep = $em->getRepository('EnsJobeetBundle:Job');
        $active_jobs = $rep->getActiveJobs(null, null, null, $affiliate->getId());

        foreach($active_jobs as $job) {
            $jobs[$this->get('router')->generate('ens_job_show', array(
                'company' => $job->getCompanySlug(),
                'location' => $job->getLocationSlug(),
                'id' => $job->getId(),
                'position' => $job->getPositionSlug(),
            ), true)] = $job->asArray($request->getHost());
        }

        $format = $request->getRequestFormat();
        $jsonData = json_encode($jobs);

        if($format == "json") {
            $headers = array('Content-Type' => 'application/json');
            $response = new Response($jsonData, 200, $headers);

            return $response;
        }

        return $this->render('EnsJobeetBundle:Api:jobs.'.$format.'.twig', array('jobs' => $jobs));
    }
} 