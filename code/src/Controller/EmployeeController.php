<?php

namespace App\Controller;
use App\Entity\Employee;
use App\Form\Type\EmployeeType;
use App\Repository\EmployeeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Routing\Requirement\Requirement; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpFoundation\RedirectResponse;
 
    
class EmployeeController extends AbstractController
{ 


    #[Route('/employee/add', name: 'app_employee_add')]
    public function addEmployee(Request $request, EntityManagerInterface $manager): Response
    {
        $employee = new Employee();
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($employee);
            $manager->flush();

            return $this->redirectToRoute('app_view_employee', ['id' => $employee->getId()]);
        }

        return $this->render('employee/add.html.twig', [
            'employee_form' => $form->createView(),
        ]);
    }
 


        #[Route('/employee/{id}', name: 'app_view_employee', requirements:['employeeIdentifier' => Requirement::POSITIVE_INT])]
        public function viewEmployee(
            #[MapEntity] Employee $employee,
        ): Response
        {
            return $this->render('employee/view.html.twig', [
                'employee' => $employee,
            ]);
        }
    


        #[Route('/employee/edit/{employeeIdentifier}', name: 'app_edit_employee',)]
        public function editEmployee(
            #[MapEntity( id :'employeeIdentifier')] Employee $employee,
            Request $request,
            EntityManagerInterface $manager
        ): Response
        {
            $form = $this->createForm(EmployeeType::class, $employee);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $manager->flush();
    
                return $this->redirectToRoute('app_view_employee', ['id' => $employee->getId()]);
            }
    
            return $this->render('employee/edit.html.twig', [
                'employee_form' => $form,
            ]);
        }



        #[Route('/employee/all', name: 'app_employee', priority: 1)]
        public function index(EntityManagerInterface $manager, Request $request): Response
        {
            $query = $request ->query->get('employe', '');
 
            $repository = $manager->getRepository(Employee::class);
    
            $employees = $repository->search($query);
    
            return $this->render('employee/index.html.twig', [
                'employees' => $employees,
                'query' => $query,
            ]);
        }



        #[Route('/employee/remove/{id}', name: 'app_remove_employee')]
         public function remove(
                EntityManagerInterface $manager,
                #[MapEntity] Employee $employee,
                    ): RedirectResponse {
                $manager->remove($employee);
                $manager->flush();

                return $this->redirectToRoute('app_employee');
            }
}