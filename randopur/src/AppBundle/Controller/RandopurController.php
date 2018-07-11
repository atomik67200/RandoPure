<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Randopur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Randopur controller.
 *
 * @Route("randopur")
 */
class RandopurController extends Controller
{
    /**
     * Lists all randopur entities.
     *
     * @Route("/", name="randopur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $randopurs = $em->getRepository('AppBundle:Randopur')->findAll();

        return $this->render('randopur/index.html.twig', array(
            'randopurs' => $randopurs,
        ));
    }

    /**
     * Creates a new randopur entity.
     *
     * @Route("/new", name="randopur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $randopur = new Randopur();
        $form = $this->createForm('AppBundle\Form\RandopurType', $randopur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($randopur);
            $em->flush();

            return $this->redirectToRoute('randopur_show', array('id' => $randopur->getId()));
        }

        return $this->render('randopur/new.html.twig', array(
            'randopur' => $randopur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a randopur entity.
     *
     * @Route("/{id}", name="randopur_show")
     * @Method("GET")
     */
    public function showAction(Randopur $randopur)
    {
        $deleteForm = $this->createDeleteForm($randopur);

        return $this->render('randopur/show.html.twig', array(
            'randopur' => $randopur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing randopur entity.
     *
     * @Route("/{id}/edit", name="randopur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Randopur $randopur)
    {
        $deleteForm = $this->createDeleteForm($randopur);
        $editForm = $this->createForm('AppBundle\Form\RandopurType', $randopur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('randopur_edit', array('id' => $randopur->getId()));
        }

        return $this->render('randopur/edit.html.twig', array(
            'randopur' => $randopur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a randopur entity.
     *
     * @Route("/{id}", name="randopur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Randopur $randopur)
    {
        $form = $this->createDeleteForm($randopur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($randopur);
            $em->flush();
        }

        return $this->redirectToRoute('randopur_index');
    }

    /**
     * Creates a form to delete a randopur entity.
     *
     * @param Randopur $randopur The randopur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Randopur $randopur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('randopur_delete', array('id' => $randopur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
