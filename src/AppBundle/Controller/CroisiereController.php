<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Croisiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Croisiere controller.
 *
 * @Route("croisiere")
 */
class CroisiereController extends Controller
{
    /**
     * Lists all croisiere entities.
     *
     * @Route("/", name="croisiere_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $croisieres = $em->getRepository('croisiere.php')->findAll();

        return $this->render('croisiere/index.html.twig', array(
            'croisieres' => $croisieres,
        ));
    }

    /**
     * Creates a new croisiere entity.
     *
     * @Route("/new", name="croisiere_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $croisiere = new Croisiere();
        $form = $this->createForm('AppBundle\Form\CroisiereType', $croisiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($croisiere);
            $em->flush();

            return $this->redirectToRoute('croisiere_show', array('id' => $croisiere->getId()));
        }

        return $this->render('croisiere/new.html.twig', array(
            'croisiere' => $croisiere,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a croisiere entity.
     *
     * @Route("/{id}", name="croisiere_show")
     * @Method("GET")
     */
    public function showAction(Croisiere $croisiere)
    {
        $deleteForm = $this->createDeleteForm($croisiere);

        return $this->render('croisiere/show.html.twig', array(
            'croisiere' => $croisiere,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing croisiere entity.
     *
     * @Route("/{id}/edit", name="croisiere_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Croisiere $croisiere)
    {
        $deleteForm = $this->createDeleteForm($croisiere);
        $editForm = $this->createForm('AppBundle\Form\CroisiereType', $croisiere);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('croisiere_edit', array('id' => $croisiere->getId()));
        }

        return $this->render('croisiere/edit.html.twig', array(
            'croisiere' => $croisiere,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a croisiere entity.
     *
     * @Route("/{id}", name="croisiere_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Croisiere $croisiere)
    {
        $form = $this->createDeleteForm($croisiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($croisiere);
            $em->flush();
        }

        return $this->redirectToRoute('croisiere_index');
    }

    /**
     * Creates a form to delete a croisiere entity.
     *
     * @param Croisiere $croisiere The croisiere entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Croisiere $croisiere)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('croisiere_delete', array('id' => $croisiere->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
