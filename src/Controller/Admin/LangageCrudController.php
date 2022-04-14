<?php

namespace App\Controller\Admin;

use App\Entity\Langage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LangageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Langage::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
