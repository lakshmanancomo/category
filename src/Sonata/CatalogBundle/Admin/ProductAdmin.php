<?php

namespace Sonata\CatalogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProductAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('slug')
            ->add('quantity')
            ->add('price')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('slug')
            ->add('quantity')
            ->add('price')
           ->add('brand','entity',array('class' =>'SonataCatalogBundle:Brand',
                'property'=>'name'))
          ->add('category','entity',array('label'=> 'Category',
                 'class'=>'SonataCatalogBundle:Category',
                 'property'=>'name','multiple'=>true,'expanded'=> false  )) 
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('slug')
            ->add('quantity')
            ->add('price')
            ->add('brand','entity',array('class' =>'SonataCatalogBundle:Brand',
                'property'=>'name'))
          ->add('category','entity',array('label'=> 'Category',
                 'class'=>'SonataCatalogBundle:Category',
                 'property'=>'name','multiple'=>true,'expanded'=> false  )) 
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            
            ->add('name')
            ->add('description')
            ->add('summary')
            ->add('isActive')
            ->add('slug')
            ->add('quantity')
            ->add('price')
            ->add('brand','entity',array('class' =>'SonataCatalogBundle:Brand',
                'property'=>'name'))
          ->add('category','entity',array('label'=> 'Category',
                 'class'=>'SonataCatalogBundle:Category',
                 'property'=>'name','multiple'=>true,'expanded'=> false  )) 
        ;
    }
}
